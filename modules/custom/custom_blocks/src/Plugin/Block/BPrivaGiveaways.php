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
 *   id = "b-plans-and-prices-floor-plan",
 *   admin_label = @Translation("Priva Giveaways"),
 * )
 */

class BPrivaGiveaways extends BlockBase {
    /**
     * {@inheritdoc}
     */
    public function build() {


        return [
            '#theme'    => 'block--b-priva-giveaways',
            '#cur_page' => $this->t('landing_page'),
            '#test_var' => $this->t('Test Value'),
            '#data_obj' => array(),
        ];
    }
}