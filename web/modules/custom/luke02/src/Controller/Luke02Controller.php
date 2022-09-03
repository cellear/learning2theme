<?php

namespace Drupal\luke02\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for luke02 based on the luke01.
 */
class Luke02Controller extends ControllerBase {

  /**
   * runFucker controller method.
   *
   * @return array
   *   Return just an array with a piece of markup to render in screen.
   */
  public function runFucker() {

    return [
      '#markup' => $this->t('Fuck off, luke, I am just a stupid example.'),
    ];
  }

}
