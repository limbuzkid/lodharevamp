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
   *   id = "home-iconic-project",
   *   admin_label = @Translation("Home Iconic Project Block"),
   * )
   */

  class CustomIconicProjectBlock extends BlockBase {
    /**
     * {@inheritdoc}
     */
    public function build() {
      
      $base_path =  \Drupal::config('assets_path')->get('url');
		
			$output = '';

			$query = \Drupal::entityQuery('node');
			$query->condition('status', NODE_PUBLISHED)
            ->condition('type', 'projects')
            ->condition('field_iconic_project', 1)
						->sort('nid', 'DESC');
			$nids 	= $query->execute();

      $nodes 	= entity_load_multiple('node', $nids);
      foreach($nodes as $node) {
				$date_time = $node->field_datetime?strtotime($node->field_datetime->value):'';
				$date = $date_time?date('d.m.Y', $date_time):'';
        $shortdesc = $node->field_iconic_project_desc?(preg_replace('/\s+?(\S+)?$/', '', substr($node->field_iconic_project_desc->value, 0, 250)) . '...'):'';
        $link_text = $node->field_link_->value;
        $link_url = isset($node->field_link_url->value)?$node->field_link_url->value:\Drupal::service('path.alias_manager')->getAliasByPath('/node/'.$node->nid->value);
        $path = \Drupal::service('path.alias_manager')->getAliasByPath('/node/'.$node->nid->value);
        $imagePath = $base_path.$node->field_iconic_project_image_->value;

				$data[] = array(
					'title' => $node->title->value,
          'body' => $shortdesc,
          'linkText' => $link_text,
          'linkUrl' => $link_url,
          'imagePath' => $imagePath,
					'alias' => $path,
				);
			}
      
      

      return [
        '#theme'    => 'block--homeiconicprojectblock',
        '#data_obj' => $data,
      ];
    }
  }