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
  public function validateForm(array &$form, FormStateInterface $form_state) {
    if ($form_state->getValue('who_are_you') == "J-P") {
      $form_state->setErrorByName(
        'who_are_you',
        $this->t("Is that you, J-P? Have you finished your D8 demo yet? I don't think so! Get back to work!")
      );
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    drupal_set_message(
      $this->t(
        'Hello, %who! Welcome to OxDUG.',
        array('%who' => $form_state->getValue('who_are_you'))
      )
    );
  }

}
