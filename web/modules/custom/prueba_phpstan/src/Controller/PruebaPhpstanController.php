<?php

namespace Drupal\prueba_phpstan\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Prueba phpstan routes.
 */
class PruebaPhpstanController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
