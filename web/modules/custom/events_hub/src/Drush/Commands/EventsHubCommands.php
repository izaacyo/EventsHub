<?php

namespace Drupal\events_hub\Drush\Commands;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Queue\QueueFactory;
use Drupal\events_hub\EventImporter;
use Drupal\events_hub\EventsApiClient;
use Drush\Attributes as CLI;
use Drush\Commands\AutowireTrait;
use Drush\Commands\DrushCommands;
use Symfony\Component\DependencyInjection\Attribute\Autowire;

/**
 * Drush commands for Events Hub.
 */
final class EventsHubCommands extends DrushCommands {

  // AutowireTrait lets Drush hand us services without a services.yml entry.
  // Each #[Autowire(service: '...')] says which service goes into which slot.
  use AutowireTrait;

  public function __construct(
    #[Autowire(service: 'events_hub.api_client')]
    private readonly EventsApiClient $client,
    #[Autowire(service: 'events_hub.importer')]
    private readonly EventImporter $importer,
    #[Autowire(service: 'queue')]
    private readonly QueueFactory $queueFactory,
    #[Autowire(service: 'config.factory')]
    private readonly ConfigFactoryInterface $configFactory,
  ) {
    parent::__construct();
  }

  /**
   * Imports events from the external API.
   */
  // The command's name, and a short alias: "drush evi" does the same thing.
  #[CLI\Command(name: 'events:import', aliases: ['evi'])]
  // Options are the --somthing parts. They appear in "drush help events:import".
  #[CLI\Option(name: 'limit', description: 'Maximum number of events. Defaults to the "Import limit" settings. ')]
  #[CLI\Option(name: 'queue', description: 'Add events to the queue instead of importing them now.')]
  #[CLI\Usage(name: 'drush events:import --limit=10', description: 'Import 10 events now. ')]
  #[CLI\Usage(name: 'drush events:import --queue', description: 'Queue events for cron.')]
  // The $options array lists each option and its default:
  // - self:REQ means "--limit needs a value", and it's NULL if not given.
  // - FALSE means --queue is an on/off switch, off unless you type it.
  public function import(array $options = ['limit' => self::REQ, 'queue' => FALSE]) : void{
    $limit = (int) ($options['limit'] ?? $this->configFactory->get('events_hub.settings')->get('import_limit'));

    // Get the queue by the SAME name as the worker's id.
    $queue = $this->queueFactory->get('events_hub_import');

    $count = 0;
    $page = 1;

    // Keep fetching pages while there is a next page AND we're under the limit.
    // This is where the API's "next" value is used.
    while ($page !== NULL && $count < $limit) {
      $result = $this->client->fetchPage($page);

      foreach ($result['data'] as $item) {
        // Stop in the middle of a page if we've reached the limit.
        if ($count >= $limit) {
          break;
        }

        if ($options['queue']) {
          $queue->createItem($item);
        }
        else {
          $this->importer->import($item);
        }
        $count++;
      }

      // NULL on the last page, or when the API failed (see fetchPge's catch).
      $page = $result['next'];
    }

    // A green [success] message in the terminal.
    // dt() is a Drush's version of t(): it fills in the @placeholders.
    $this->logger()->success(dt('@count events @action.', [
      '@count' => $count,
      '@action' => $options['queue'] ? 'queued' : 'imported',
    ]));
  }

}
