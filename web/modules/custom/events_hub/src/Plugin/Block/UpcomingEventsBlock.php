<?php

namespace Drupal\events_hub\Plugin\Block;

use Drupal\Core\Block\Attribute\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Datetime\DrupalDateTime;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\datetime\Plugin\Field\FieldType\DateTimeItemInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Show the next 5 upcoming events, optionally filtered by ?city=
 */
#[Block(
  id: 'events_hub_upcoming',
  admin_label: new TranslatableMarkup('Upcoming events'),
)]
final class UpcomingEventsBlock extends BlockBase implements ContainerFactoryPluginInterface {

  public function __construct(
    array $configuration,
    $plugin_id,
    $plugin_definition,
    // To query and load Event nodes.
    private readonly EntityTypeManagerInterface $entityTypeManager,
    // To read ?city= form the current URL.
    private readonly RequestStack $requestStack,
  ) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
  }

  // Same pattern as the queue worker: take services from the container
  // pass them into the constructor
  public static function create(
    ContainerInterface $container,
    array $configuration,
    $plugin_id,
    $plugin_definition ):
    static {
      return new static(
        $configuration,
        $plugin_id,
        $plugin_definition,
        $container->get('entity_type.manager'),
        $container->get('request_stack',)
      );
    }

  /**
   * {@inheritdoc}
   */
  // build() returns a render array: a PHP array describing WHAT to show.
  // Drupal turns it into HTML later (and caches it, using #cache below).
  public function build(): array {
    $storage = $this->entityTypeManager->getStorage('node');

    // "Now", in the same format and timezone the date field is stored in
    // (UTC, "2026-10-18T09:00:00"), so the database can compare them.
    $now = (new DrupalDateTime('now', 'UTC'))
      ->format(DateTimeItemInterface::DATETIME_STORAGE_FORMAT);

    // An entity query: "find me the IDs of nodes that match..".
    $query = $storage->getQuery()
      // Only return events the CURRENT VISITOR is allowed to see.
      // This is the opposite of the importer: here we're showing content
      // to people, so the access check must be ON.
      ->accessCheck(TRUE)
      ->condition('type', 'events')
      ->condition('status', 1)
      ->condition('field_date', $now, '>=')
      ->sort('field_date')
      ->range(0,5);

    // Read ?city=Helsinki from the URL. NULL if it isn't there.
    $city = $this->requestStack->getCurrentRequest()->query->get('city');
    if ($city) {
      // Follow the reference from the Event to the City term, and compare
      // the term's name. Entity query writes that as "field.entity.property".
      // Drupal escapes $city safely, so this isn't an SQL injection risk.
      $query->condition('field_cities.entity.name', $city);
    }

    // execute() returns the matching node IDs. loadMultiple() loads them.
    $nodes = $storage->loadMultiple($query->execute());

    // Turn each node into a clicable link to its page.
    $items = [];
    foreach ($nodes as $node) {
      $items[] = $node->toLink()->toRenderable();
    }

    return [
      // Drupal's built-in bulleted list.
      '#theme' => 'item_list',
      '#items' => $items,
      '#empty' => $this->t('No upcoming events'),
      '#cache' => [
        // TAGS: "throw the copy away when any Event node changes".
        // Every time an Event is saved or deleted, Drupal invalidates this tag.
        'tags' => ['node_list:events'],
        // CONTEXTS: "keep a separate copy for each different..."
        'contexts' => [
          // ...value of ?city= in the URL (Helsinki, Cluj, none...).
          'url.query_args:city',
          // ...set of permissions (because of accessCheck(TRUE) above).
          'user.permissions',
        ],
        // MAX-AGE: "throw the copy away after 1 hour, no matter what",
        // because events stop being "upcoming" just by time passing.
        'max-age' => 3600,
      ],
    ];
  }
}
