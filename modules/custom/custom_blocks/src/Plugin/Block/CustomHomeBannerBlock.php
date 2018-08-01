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
 *   id = "home_banner",
 *   admin_label = @Translation("Home Banner"),
 * )
 */

class CustomHomeBannerBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    
    /* You can put any PHP code here if required */
    //print ('Hello World - PHP version');
    $output = '';
    $query = \Drupal::entityQuery('node')
        ->condition('status', 1)
        ->condition('type', 'home_banners')
        ->sort('field_sequence','DESC');
    $nids = $query->execute();

    $nodes = entity_load_multiple('node', $nids);
    $base_path =  \Drupal::config('assets_path')->get('url');

    foreach($nodes as $node) {
    
      $data[] = array(
        'title' => $node->title->value,
        'body' => $node->body->value,
        'imagePath' => $node->field_image_path->value,
        'fieldLink' => $node->field_link_->value,
        'fieldLinkUrl'  => isset($node->field_link_url->value)?$base_path.$node->field_link_url->value:'javascript:;',
        'fieldYoutubeId' => $node->field_youtube_id->value,
        'fieldImagePath' => isset($node->field_image_path->value)?$base_path.$node->field_image_path->value:'javascript:;',
        // 'alias' => $path,
      );
    }

    return [
      '#theme'    => 'block--home-banner',
      '#cur_page' => $this->t('landing_page'),
      '#test_var' => $this->t('Test Value'),
      '#data_obj' => $data,
    ];
  }
}