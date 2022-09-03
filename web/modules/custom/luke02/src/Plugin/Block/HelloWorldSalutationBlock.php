<?php

namespace Drupal\luke02\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\luke02\Luke02Spew;

/**
 * Luke 02 Spew
 * Based on Hello World Salutation block.
 *
 * @Block(
 *  id = "luke_02_spew_block",
 *  admin_label = @Translation("Luke 02 spew - salutation"),
 * )
 */
class Luke02SpewBlock extends BlockBase implements ContainerFactoryPluginInterface {

  /**
   * The salutation service.
   *
   * @var \Drupal\luke02\Luke02Spew
   */
  protected $salutation;

  /**
   * Constructs a Luke02SpewBlock.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param string $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\hello_world\Luke02Spew $salutation
   *   The salutation service.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, Luke02Spew $salutation) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->salutation = $salutation;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('luke02.salutation')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->salutation->getSalutation(),
    ];
  }

}
