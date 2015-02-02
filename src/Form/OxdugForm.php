<?php
/**
 * @file
 * Contains \Drupal\oxdug\Form\OxdugForm.
 */

namespace Drupal\oxdug\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a simple form submission for the OxDUG module.
 */
class OxdugForm extends FormBase {

  /**
   * {@inheritdoc}.
   */
  public function getFormId() {
    return 'oxdug_my_form';
  }

  /**
   * {@inheritdoc}.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['message'] = array(
      '#markup' => $this->t('Welcome to the super secret OxDUG form.'),
    );

    $form['who_are_you'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Tell us who you are!'),
      '#required' => TRUE,
    );

    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Save'),
      '#button_type' => 'primary',
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
  }
}
