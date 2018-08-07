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
   *   id = "home-world-tower-project",
   *   admin_label = @Translation("Home World Tower Project"),
   * )
   */

  class CustomWorldTowerBlock extends BlockBase {
    /**
     * {@inheritdoc}
     */
    public function build() {
      
      $base_path =  \Drupal::config('assets_path')->get('url');
		
			$output = '';

			$query = \Drupal::entityQuery('node');
			$query->condition('status', NODE_PUBLISHED)
            ->condition('type', 'projects')
						->sort('nid', 'DESC');
			$nids 	= $query->execute();

      $nodes 	= entity_load_multiple('node', $nids);
      foreach($nodes as $node) {
				$date_time = strtotime($node->field_datetime->value);
				$date = date('d.m.Y', $date_time); 
        $shortdesc = preg_replace('/\s+?(\S+)?$/', '', substr($node->field_iconic_project_desc->value, 0, 250)) . '...';
        $link_text = $node->field_link_->value;
        $link_url = isset($node->field_link_url->value)?$node->field_link_url->value:\Drupal::service('path.alias_manager')->getAliasByPath('/node/'.$node->nid->value);
        $path = \Drupal::service('path.alias_manager')->getAliasByPath('/node/'.$node->nid->value);
        $imagePath = $node->value->field_iconic_project_image_;

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
        '#theme'    => 'block--home-iconic-project',
        '#cur_page' => $this->t('landing_page'),
        '#test_var' => $this->t('Test Value'),
        '#data_obj' => $data,
      ];
    }
  }