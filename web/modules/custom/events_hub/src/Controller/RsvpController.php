<?php

namespace Drupal\events_hub\Controller;

use Drupal\Component\Datetime\TimeInterface;
use Drupal\Core\Cache\CacheableJsonResponse;
use Drupal\Core\Cache\CacheableMetadata;
use Drupal\Core\Cache\CacheTagsInvalidatorInterface;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database\Connection;
use Drupal\node\NodeInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * RSVP endpoints.
 */
// ControllerBase gives you helpers like $this->t(). On recent Drupal it also
// builds the controller with autowiring, so there's no create() method.
// #[Autowire] says which service goes into which slot, like in your
// Drush command and hooks class.
final class RsvpController extends ControllerBase {

  public function __construct(
    // The database connection, for running queries on your table.
    #[Autowire(service: 'database')]
    private readonly Connection $database,
    // The current time. Using a service instead of PHP's time() means a
    // test can pretend it's a different time.
    #[Autowire(service: 'datetime.time')]
    private readonly TimeInterface $time,
    // The tool to fire cache tags ("throw away copies tagged X").
    #[Autowire(service: 'cache_tags.invalidator')]
    private readonly CacheTagsInvalidatorInterface $cacheTagsInvalidator,
  ) {}

  /**
   * Saves one RSVP: POST /api/events/{node}/rsvp.
   */
  // $node arrives already LOADED, thanks to parameter conversion in the
  // route. $request is the incoming HTTP request (Drupal passes it in
  // because of the type hint).
  public function rsvp(NodeInterface $node, Request $request): JsonResponse {
    // The number in the URL could belong to an Article, or to an
    // unpublished event. Only accept published Events. Answer "404 Not
    // Found" otherwise, so we don't reveal what exists.
    if ($node->bundle() !== 'events' || !$node->isPublished()) {
      throw new NotFoundHttpException();
    }

    // The request body is JSON text: {"name":"Test Guest","status":"going"}.
    // json_decode turns it into a PHP array. If the body is broken or empty,
    // it returns NULL, and "?? []" turns that into an empty array.
    $data = json_decode($request->getContent(), TRUE) ?? [];

    // trim() removes spaces around the name, so "   " counts as empty.
    $name = trim((string) ($data['name'] ?? ''));
    $status = $data['status'] ?? 'going';

    // NEVER trust input. Check it before it goes near the database.
    // in_array(..., TRUE) = strict: the value must be one of these exactly.
    if ($name === '' || !in_array($status, ['going', 'maybe', 'declined'], TRUE)) {
      // 422 = "I understood your request, but the data is invalid."
      return new JsonResponse(['error' => 'Invalid input'], 422);
    }

    // INSERT one row with Drupal's database API.
    // We never write SQL text with the values glued in, so a name like
    // "Robert'); DROP TABLE..." is stored as plain text, harmlessly.
    $this->database->insert('events_hub_rsvp')
      ->fields([
        'event_nid' => $node->id(),
        // Cut the name to 128 characters, the column's size.
        // mb_ = safe for letters like ä, ș, ö (more than 1 byte each).
        'name' => mb_substr($name, 0, 128),
        'status' => $status,
        'created' => $this->time->getRequestTime(),
      ])
      ->execute();

    // The "top events" list just changed, so throw away its cached copies.
    // This is a tag YOU invented. Any cache entry tagged events_hub_rsvp
    // is cleared.
    $this->cacheTagsInvalidator->invalidateTags(['events_hub_rsvp']);

    // 201 = "Created". The standard answer when something new was saved.
    return new JsonResponse(['ok' => TRUE], 201);
  }

  /**
   * The 10 events with the most "going" RSVPs in the last 30 days.
   */
  public function top(): CacheableJsonResponse {
    // A plain SQL query, the Drupal way:
    //  - {events_hub_rsvp} in curly braces: Drupal adds the table prefix if
    //    the site uses one. Always use braces around table names.
    //  - :status and :since are PLACEHOLDERS. The real values are passed
    //    separately (the array below), so the database never confuses data
    //    with SQL. That's what prevents SQL injection.
    //  - INNER JOIN: match each RSVP row (r) to its node (n) by node ID,
    //    to get the event's title.
    //  - default_langcode = 1: only the original-language row of each node,
    //    so a translated event isn't counted twice.
    //  - GROUP BY + COUNT(*): one result row per event, with how many RSVPs.
    $rows = $this->database->query(
      'SELECT r.event_nid, n.title, COUNT(*) AS going
       FROM {events_hub_rsvp} r
       INNER JOIN {node_field_data} n ON n.nid = r.event_nid AND n.default_langcode = 1
       WHERE r.status = :status AND r.created > :since
       GROUP BY r.event_nid, n.title
       ORDER BY going DESC
       LIMIT 10',
      [
        ':status' => 'going',
        // "30 days ago" = now minus 30 days' worth of seconds.
        ':since' => $this->time->getRequestTime() - 30 * 86400,
      ],
    )->fetchAll();

    // A JSON response that ALSO carries cache metadata (Mission 6 again).
    $response = new CacheableJsonResponse($rows);
    $response->addCacheableDependency(
      (new CacheableMetadata())
        // Throw the copy away when an RSVP is added (your own tag), or when
        // an Event changes (its title might be different).
        ->setCacheTags(['events_hub_rsvp', 'node_list:events'])
        // And at most every 5 minutes, because the "last 30 days" window
        // moves with time.
        ->setCacheMaxAge(300)
    );
    return $response;
  }

}
