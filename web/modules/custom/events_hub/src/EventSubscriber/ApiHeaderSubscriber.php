<?php

namespace Drupal\events_hub\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;


/**
 * Adds and X-Events-Hub header to responses under /api/.
 */
// "implements EventSubscriberInterface" is the promise: "I have a
// getSubscribedEvents() method that says which events I listen to."
final class ApiHeaderSubscriber implements EventSubscriberInterface {

  /**
   * {@inheritdoc}
   */
  // Which "radio channels" to listen to, and which method to call.
  // KernelEvents::RESPONSE fires once a response is ready, just before it's
  // sent to the browser. That's the last chance to change headers.
  // The 0 is the priority: higher numbers run earlier than other listeners.
  public static function getSubscribedEvents(): array {
    return [
      KernelEvents::RESPONSE => ['onResponse', 0],
    ];
  }

  /**
   * Adds the header when the path starts with /api/.
   */
  public function onResponse(ResponseEvent $event): void {
    // Drupal sometimes makes small internal "sub-requests" while building a
    // page. We only want the real request from the browser.
    if(!$event->isMainRequest()) {
      return;
    }

    // getPathInfo() is the path part of the URL, e.g. "/api/events/top".
    $path = $event->getRequest()->getPathInfo();

    if (str_starts_with($path, '/api/')) {
      // Add the Header to the response.
      $event->getResponse()->headers->set('X-Events-Hub', '1');
    }
  }

}
