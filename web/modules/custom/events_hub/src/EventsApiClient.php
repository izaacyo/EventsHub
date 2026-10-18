<?php

namespace Drupal\events_hub;

use Drupal\Core\Config\ConfigFactoryInterface;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Log\LoggerInterface;
use GuzzleHttp\Psr7\Uri;

/**
 * Talk to the external events API.
 */
// 'final' means no other class can extend this one.
// It keeps the class simple: if someone needs different
// Behaviour, they write their own class.
final class EventsApiClient {
  // The construct runs once, when Drupal creates this service.
  // Drupal reads the "arguments" list in events_hub.services.yml
  // and passes the servies in the same order.
  // Private readonly is a PHP 8 shortcut that does 2 things:
  // - saves each argumnet as a property
  // - forbids changing it later (readonly)
  public function __construct(
    private readonly ClientInterface $httpClient,
    private readonly ConfigFactoryInterface $configFactory,
    private readonly LoggerInterface $logger
  ){}

  /**
   * Fetches one page of events from the API
   *
   * @param int $page
   *   The page number to fetch, starting at 1.
   *
   * @return array{data: array, next: ?int}
   *   The events on this page, and the next page number (NULL on the last page).
   */

  public function fetchPage(int $page = 1): array {
    // Read the API address from the module's settings.
    // We read it here, on every call, not once in the constructor,
    // so a change made in the settings form is used straight away.
    $url = $this->configFactory->get('events_hub.settings')->get('api_url');

    try {
      // Send GET http://host.docker.internal:3001/events?page=1
      $response = $this->httpClient->request('GET', $url, [
        // Guzzle adds these to the URL as ?page=1 for us.
        'query' => ['page' => $page],
        // Give up after 5 seconds. Without this, a stuck API could make
        // the import wait forever
        'timeout' => 5,
      ]);
      // The response body is JSON text,
      // strings turns the body into plain text
      // TRUE asks for PHP arrrays instead of objects
      // JSON_THROW_ON_ERROR makes broken JSON throw an error
      // instead of silently returning NULL.
      return json_decode((string) $response->getBody(), TRUE, flags: JSON_THROW_ON_ERROR);
    }
    // We land here if:
      // - GuzzleException: the API returned 4xx/5xx (e.g. ?fail=1 -> 500),
      //   The server is down, or the reqest took longer than 5 seconds
      // - \JsonException: the API answered, but not with valid JSON.
    catch(GuzzleException | \JsonException $e){
      $this->logger->error('Events API failed: @msg', ['@msg' => $e->getMessage()]);
      // Return an empty page instead of crashing. "next"=>NULL tells the
      // caller "there's nothing more, stop".
      return ['data' => [], 'next' => NULL];
    }
  }
}
