<?php

namespace Drupal\luke01\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for luke01 based on the Basic Custom module example.
 */
class Luke01Controller extends ControllerBase {

  /**
   * Hello World controller method.
   *
   * @return array
   *   Return just an array with a piece of markup to render in screen.
   */
  public function helloWorld() {

    return [
      '#markup' => $this->t('Hello luke, I am just a basic custom example.'),
    ];
  }

}
