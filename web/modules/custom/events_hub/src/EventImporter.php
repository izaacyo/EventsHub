<?php

namespace Drupal\events_hub;

use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\node\NodeInterface;
use Drupal\datetime\Plugin\Field\FieldType\DateTimeItemInterface;

/**
 * Turns one event from the API into one Event node.
 */
final class EventImporter {
  public function __construct(
    private readonly EntityTypeManagerInterface $entityTypeManager,
  ){}

  /**
   * Creates or updates the Event node for one API item.
   *
   * @param array $item
   *  One event from the API: id, title, city, date, description.
   *
   * @return \Drupal\node\NodeInterface
   *  The created or updated Event node.
   */
  public function import(array $item): NodeInterface {
    // The "storage" for nodes: the object that loads, creates and saves them.
    $storage = $this->entityTypeManager->getStorage('node');

    // THE IDEMPOTENT PART: look for an Event that already has this external ID.
    // loadbyProperties() returns an array: empty if nothing was found,
    // or [node_id => node] if it was.
    $existing = $storage->loadByProperties([
      'type' => 'events',
      'field_external_id' => $item['id'],
    ]);

    // Found one? Take it, and we'll UPDATE it.
    // Nothing found? Create a NEW, empty Event node.
    // reset() gives the first element of an array.
    $node = $existing ? reset($existing) : $storage->create([
      'type' => 'events'
    ]);

    // The API sends dates like "2026-10-18T09:00:00.000Z" (Z = UTC).
    // Drupal's date field stores them in UTC as "2026-10-18T09:00:00"
    // (no milliseconds, no Z). DATETIME_STORAGE_FORMAT is that exact format.
    $date = (new \DateTime($item['date']))->setTimezone(new \DateTimeZone('UTC'));

    // Copy each value from the API into the node's fields.
    $node->set('title', $item['title']);
    $node->set('field_external_id', $item['id']);
    $node->set('field_date', $date->format(DateTimeItemInterface::DATETIME_STORAGE_FORMAT));
    $node->set('field_cities', ['target_id' => $this->cityTermId($item['city'])]);
    $node->set('field_events_description', [
      'value' => $item['description'],
      'format' => 'full_html',
    ]);

    // Write it to the database (INSERT for new nodes, UPDATE for existing ones).
    $node->save();
    return $node;
  }

  /**
   * Finds the City term with this name, or creates it if it doesn't exist
   */
  private function cityTermId(string $name): int {
    $storage = $this->entityTypeManager->getStorage('taxonomy_term');

    // Same idea as above: look first, so we never create "Berlin" twige.
    $terms = $storage->loadByProperties(['vid' => 'cities', 'name' => $name]);
    if ($terms) {
      return (int) reset($terms)->id();
    }

    // Not found: create a new term in the Cities vocab ("vid").
    $term = $storage->create(['vid' => 'cities', 'name' => $name]);
    $term->save();
    return(int) $term->id();
  }

}
