<?php

namespace Drupal\prueba_phpstan\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides an example block.
 *
 * @Block(
 *   id = "prueba_phpstan_example",
 *   admin_label = @Translation("Example"),
 *   category = @Translation("Prueba phpstan")
 * )
 */
class ExampleBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build['content'] = [
      '#markup' => $this->t('It works!'),
    ];
    return $build;
  }

}
