<?php
/**
 * @file
 * Contains \Drupal\oxdug\Controller\OxdugController.
 */

namespace Drupal\oxdug\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provides route responses for the OxDUG module.
 */
class OxdugController extends ControllerBase {

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function myPage() {
    return array(
      '#markup' => 'Here is some simple markup.',
    );
  }
}
