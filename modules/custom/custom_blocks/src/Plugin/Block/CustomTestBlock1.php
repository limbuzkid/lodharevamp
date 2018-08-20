<?php
  namespace Drupal\custom_blocks\Plugin\Block;
  
  use Drupal\Core\Block\BlockBase;
  use Drupal\Component\Annotation\Plugin;
  use Drupal\Core\Annotation\Translation;
  use Drupal\Core\Url;
  use Drupal\Core\Link;


  /**
   * Provides a 'Custom' Block
   *
   * @Block(
   *   id = "custom-test-block1",
   *   admin_label = @Translation("Custom Test Block 1"),
   * )
   */

  class CustomTestBlock1 extends BlockBase {
    /**
     * {@inheritdoc}
     */
    public function build() {


      return [
        '#theme'    => 'block--customtestblock1',
        '#cur_page' => $this->t('landing_page'),
        '#test_var' => $this->t('Test Value'),
        '#data_obj' => array()
      ];
    }
  }

