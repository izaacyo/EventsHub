<?php

namespace Drupal\events_hub\Hook;

use Drupal\Core\Hook\Attribute\Hook;
use Drupal\Core\Queue\QueueFactory;
use Drupal\events_hub\EventsApiClient;
use Drupal\node\NodeInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;


/**
 * Hook implementations for Events Hub.
 */
// Classes in src/Hook/ are registered as services automatically. There's no
// services.yml entry, so we use #[Autowire] to say which service goes where.
final class EventsHubHooks {

  public function __construct(
    #[Autowire(service: 'queue')]
    private readonly QueueFactory $queueFactory,
    #[Autowire(service: 'events_hub.api_client')]
    private readonly EventsApiClient $client,
    #[Autowire(service: 'logger.channel.events_hub')]
    private readonly LoggerInterface $logger,
  ) {}

  /**
   * Implements hook_cron().
   */
  // "Call me every time cron runs." The method name can be anything; the
  // attribute is what connects it to the cron hook.
  #[Hook('cron')]
  public function cron(): void {
    // Fetch the first page of events from the API.
    $result = $this->client->fetchPage(1);

    // Put each event on the same pile your Drush --queue option uses.
    // Cron processes queues AFTER all cron hooks have run, so these items
    // are imported in this same cron run by your EventImportWorker.
    $queue = $this->queueFactory->get('events_hub_import');
    foreach ($result['data'] as $item) {
      $queue->createItem($item);
    }

    // Leave a note in the log, so you can see that cron did something.
    $this->logger->info('Cron queued @count events.', ['@account' => count($result['data'])]);
  }

  /**
   * Implements hook_ENTITY_TYPE_presave() for nodes.
   */
  // "Call me just BEFORE any node is saved." Changes made here are saved
  // along with the node, so you don't call ->save() yourself.
  // This runs for EVERY node (articles, pages...), so we filter below
  #[Hook('node_presave')]
  public function nodePresave(NodeInterface $node): void {
    if ($node->bundle() !== 'events') {
      return;
    }

    // No date? Nothing to check.
    if ($node->get('field_date')->isEmpty()) {
      return;
    }

    // ->date gives the field's value as a date object we can compare.
    // getTimestamp() turns it into seconds since 1970, and so does time(),
    // so comparing two numbers tells us if the event is in the past.
    $eventTime = $node->get('field_date')->date->getTimeStamp();
    if($eventTime < time()) {
      $node->setUnpublished();
    }
  }
}
