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
   *   id = "home-commercial-project",
   *   admin_label = @Translation("Home Commercial Project"),
   * )
   */

  class CustomCommercialProjectBlock extends BlockBase {
    /**
     * {@inheritdoc}
     */
    public function build() {
      
      $base_path =  \Drupal::config('assets_path')->get('url');
		
			$output = '';

      $query = \Drupal::database()->select('node', 'n');
      $query->leftJoin('node_field_data', 'nf', 'nf.nid = n.nid');
      $query->leftJoin('node__field_home_commercial_project_de', 'nd', 'nd.entity_id = n.nid');
      $query->leftJoin('node__field_home_commercial_project_im', 'ni', 'ni.entity_id = n.nid');
      $query->leftJoin('node__field_home_commercial_project_li', 'nlt', 'nlt.entity_id = n.nid');
      $query->leftJoin('node__field_home_commercial_proj_url', 'nlu', 'nlu.entity_id = n.nid');
      $query->leftJoin('node__field_project_category', 'nfc', 'nfc.entity_id = n.nid');
      $query->leftJoin('node__field_quotes_and_world', 'fq', 'fq.entity_id = n.nid');
      $query->leftJoin('taxonomy_term_field_data', 'fp', 'fp.tid = fq.field_quotes_and_world_target_id');
      $query->fields('nf', ['title', 'nid']);
      $query->fields('nd', ['field_home_commercial_project_de_value']);
      $query->fields('ni', ['field_home_commercial_project_im_value']);
      $query->fields('nlt', ['field_home_commercial_project_li_value']);
      $query->fields('nlu', ['field_home_commercial_proj_url_value']);
      $query->fields('fp', ['name']);
     
			$query->condition('nf.status', NODE_PUBLISHED)
            ->condition('nf.type', 'projects')
            ->condition('nfc.field_project_category_target_id', 3)
						->orderBy('fp.name', 'ASC');
			$nodes 	= $query->execute();

      $tabs = array();
      
      foreach($nodes as $node) {
				//echo '<pre>';print_r($node);die();
        //$shortdesc = $node->field_home_commercial_project_de?(preg_replace('/\s+?(\S+)?$/', '', substr($node->field_home_commercial_project_de->value, 0, 250)) . '...'):'';
        if($node->field_home_commercial_proj_url_value) {
          $path = $node->field_home_commercial_proj_url_value;
        } else {
          $path = \Drupal::service('path.alias_manager')->getAliasByPath('/node/'.$node->nid);
        }
        
        if($node->field_home_commercial_project_im_value) {
          $image_path = $base_path .'/'. $node->field_home_commercial_project_im_value;
        } else {
          $image_path = '';
        }
        
        if(!in_array($node->name, $tabs)) {
          array_push($tabs, $node->name);
        }

				$data[] = array(
          'nid'       => $node->nid,
					'title'     => $node->title,
          'body'      => $node->field_home_commercial_project_de_value,
          'linkText'  => $node->field_home_commercial_project_li_value,
          'linkUrl'   => $path,
          'imagePath' => $image_path,
          'type'      => $node->name
				);
			}

      return [
        '#theme'    => 'block--letsworkbetterheader',
        '#data_tab' => $tabs,
        '#data_obj' => $data,
      ];
      
		
		
    }
  }