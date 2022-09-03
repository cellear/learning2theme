<?php

namespace Drupal\module01\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * module01.
 *
 * @return array
 *   Our message.
 */
public function helloWorld() {
  return "This is a text string coming from module01/src/Controller/Module01Controller.php ";
}
