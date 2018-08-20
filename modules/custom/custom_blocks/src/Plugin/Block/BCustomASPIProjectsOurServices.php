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
 *   id = "b-aspi-projects-our-services",
 *   admin_label = @Translation("ASPI Projects - Our Services"),
 * )
 */

class BCustomASPIProjectsOurServices extends BlockBase {
    /**
     * {@inheritdoc}
     */
    public function build() {


        return [
            '#theme'    => 'block--b-aspi-projects-our-services',
            '#cur_page' => $this->t('landing_page'),
            '#test_var' => $this->t('Test Value'),
            '#data_obj' => array(),
        ];
    }
}