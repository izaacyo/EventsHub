<?php

namespace Drupal\events_hub\Plugin\QueueWorker;

use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Queue\Attribute\QueueWorker;
use Drupal\Core\Queue\QueueWorkerBase;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\events_hub\EventImporter;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Imports one queued event at a time
 */
// The attribute is the plugin's "ID card". Drupal finds it automatically:
// -id: the queue's name. The Drush command adds item to this same name.
// -title: a human-radable name (shown in drush queue:list).
// - cron: "during cron, spend at most 30 seconds on this queue".
// Whatever is left waits for the next cron run, so cron never runs too long.
#[QueueWorker(
  id: 'events_hub_import',
  title: new TranslatableMarkup('Events Hub Import'),
  cron: ['time' => 30],
)]
final class EventImportWorker extends QueueWorkerBase implements ContainerFactoryPluginInterface {

  // Plugins don't use services.yml. They get their tools through create()
  // below, which hands them to this constructor.
  public function __construct(
    array $configuration,
    $plugin_id,
    $plugin_definition,
    private readonly EventImporter $importer,
  ) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
  }

  // public calls create() to build the plugin. It's the plugin version of the
  // "arguments" list in services.yml: we take the importer service from
  // the container and pass it into the constructor.
  public static function create(ContainerInterface $container, array $configuration, $plugin_id,
    $plugin_definition): static {
      return new static(
        $configuration,
        $plugin_id,
        $plugin_definition,
        $container->get('events_hub.importer'),
      );
  }

  // Called once for each item in the queue. $data is exactly what the Drush
  // command put in: one event array from the API.
  // If this throws an error, the item stays in the queue and is retried later.
  public function processItem($data): void {
    $this->importer->import($data);
  }


}
