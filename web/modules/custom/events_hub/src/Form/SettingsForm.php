<?php

namespace Drupal\events_hub\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Settings form for Events Hub
 */
// "extends ConfigFormBase" means we build on Drupal's ready-made settings page.
// We get the Save button, the "The configuration options have been saved."
// message, and the saving logic for free. We only describe the fields.
final class SettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  // A unique name for this form. Drupal uses it internally, and other modules
  // use it to change your form (hook_form_FORM_ID_alter, in Mission 5).
  // Convention: start with your module's name.
  public function getFormId(): string {
    return 'events_hub_settings';
  }

  /**
   * {@inheritdoc}
   */
  // Which settings this form is allowed to change. It must match the name
  // of your config file: config/install/events_hub.settings.yml.
  protected function getEditableConfigNames(): array {
    return ['events_hub.settings'];
  }

  /**
   * {@inheritdoc}
   */
  // Builds the form. In Drupal, a form is just a PHP array: each key is a
  // field, and the keys starting with # describe how that field behaves.
  public function buildForm(array $form, FormStateInterface $form_state): array {
    $form['api_url'] = [
      '#type' => 'url',
      '#title' => $this->t('Events API Url'),
      '#description' => $this->t('Address of the external events API, e.g. http://host.docker.internal:3001/events'),
      // The form won't save if this is empty.
      '#required' => TRUE,
      // The shortcut: "load this field's value from events_hub.settings →
      // api_url, and save it back there on submit". Format is
      // 'config_name:key'. Before Drupal 10.2 you had to write that
      // loading and saving code yourself.
      '#config_target' => 'events_hub.settings:api_url',
    ];

    $form['import_limit'] = [
      // A number field (with up/down arrows in the browser).
      '#type' => 'number',
      '#title' => $this->t('Import limit'),
      '#description' => $this->t('Maximum number of events to import in one run'),
      // Don't allow 0 or negative numbers. Drupal checks this on the server
      // too, not just in the browser
      '#min' => 1,
      '#config_target' => 'events_hub.settings:import_limit',
    ];

    // Let the parent class add the "Save configuration" button and the
    // rest of its standard pieces, then return the finished form.
    return parent::buildForm($form, $form_state);
  }
}
