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
   *   id = "custom-test-block3",
   *   admin_label = @Translation("Custom Test Block 3"),
   * )
   */

  class CustomTestBlock3 extends BlockBase {
    /**
     * {@inheritdoc}
     */
    public function build() {

        $first = true;
        $base_path =  \Drupal::config('assets_path')->get('url');
        $output = '';
        $query = \Drupal::entityQuery('node')
            ->condition('status', 1)
            ->condition('type', 'home_pillars')
            ->sort('field_sequence','asc');
        $nids = $query->execute();
        $nodes = entity_load_multiple('node', $nids);

        foreach($nodes as $node) {

            $data[] = array(
                'title' => $node->title->value,
                'body' => $node->body->value,
                'fieldSequence' => sprintf("%02d", $node->field_sequence->value),
                'imagePath' => $base_path.$node->field_image_path->value,
//                'iconImageHover' => $base_path.$node->field_imagfield_icon_image_hovere_path->value,
                // 'imagePath' =>$node->field_image_path->value,
                // 'iconImageHover' => $node->field_imagfield_icon_image_hovere_path->value,
                // 'alias' => $path,
            );
        }
      return [
        '#theme'    => 'block--customtestblock3',
        '#cur_page' => $this->t('landing_page'),
        '#test_var' => $this->t('Test Value'),
        '#data_obj' => $data
      ];
    }
  }