<?php
/**
 * @file
 * Contains \Drupal\custom_blocks\Plugin\Block\CustomTestimonialBlock.
 */
namespace Drupal\custom_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormInterface;
use Drupal\Component\Annotation\Plugin;
use Drupal\Core\Annotation\Translation;
use Drupal\Core\Url;
use Drupal\Core\Link;
use Drupal\image\Entity\ImageStyle;

/**
 * Provides a 'Custom' block.
 *
 * @Block(
 *   id = "project-related-projects-block",
 *   admin_label = @Translation("Project Related Projects Block"),
 * )
 */
class ProjectRelatedProjectBlock extends BlockBase {

    /**
     * {@inheritdoc}
     */
    public function build() {

        return [
            '#theme'    => 'block--aspi-relatedprojects',
            '#cur_page' => $this->t('landing_page'),
            '#test_var' => $this->t('Test Value'),
            //'#data_obj' => $data,
        ];
    }
}