<?php

  namespace Drupal\custom_pages\Controller;
  
  use Drupal\Core\Controller\ControllerBase;
  
  use Drupal\Core\Annotation\Translation;
  use Drupal\Core\Url;
  use Drupal\Core\Link;
  use Drupal\image\Entity\ImageStyle;
  use Drupal\node\Entity\Node;
  use Drupal\user\Entity\User;
  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\HttpFoundation\RedirectResponse;
  use Drupal\Core\Password\PhpassHashedPassword;
  
  
  class CustomPagesController extends ControllerBase {

    public function search() {

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
      $query->leftJoin('node__field_specific_location', 'fs', 'fs.entity_id = n.nid');
      $query->leftJoin('node__field_project_category', 'fpc', 'fpc.entity_id = n.nid');
      $query->leftJoin('node__field_scheme_title', 'fst', 'fst.entity_id = n.nid');
      $query->leftJoin('node__field_tentative_possession_date', 'ftp', 'ftp.entity_id = n.nid');
      $query->leftJoin('node__field_project', 'fpro', 'fpro.field_project_target_id = n.nid');
      $query->leftJoin('node__field_unit_plan', 'fup', 'fup.entity_id = fpro.entity_id');
      $query->leftJoin('paragraph__field_typology', 'ft', 'ft.entity_id = fup.field_unit_plan_target_id');
      // paragraph__field_typology
      

      $query->leftJoin('taxonomy_term_field_data', 'fp', 'fp.tid = fq.field_quotes_and_world_target_id');
      $query->leftJoin('taxonomy_term_field_data', 'tpc', 'tpc.tid = fpc.field_project_category_target_id');
      $query->leftJoin('taxonomy_term_field_data', 'ttp', 'ttp.tid = ft.field_typology_target_id');
      $query->fields('nf', ['title', 'nid']);
      $query->fields('nd', ['field_home_commercial_project_de_value']);
      $query->fields('ni', ['field_home_commercial_project_im_value']);
      $query->fields('nlt', ['field_home_commercial_project_li_value']);
      $query->fields('nlu', ['field_home_commercial_proj_url_value']);
      $query->fields('fp', ['name']);
      $query->fields('fs', ['field_specific_location_value']);
      $query->fields('tpc', ['name']);
      $query->fields('fst', ['field_scheme_title_value']);
      $query->fields('ftp', ['field_tentative_possession_date_value']);
      $query->fields('ttp', ['name']);
      
      
     
			$query->condition('nf.status', NODE_PUBLISHED)
            ->condition('nf.type', 'projects')
						->orderBy('fp.name', 'ASC');
			$nodes 	= $query->execute();

      $tabs = array();
      
      $node_id = 0;
      // foreach($nodes as $node) {
      //  echo '<pre>'; print_r($node);
      // }
      // die();
      foreach($nodes as $node) {
        
        if($node_id == 0 ){

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
        

            $data[] = array(
              'nid'       => $node->nid,
              'title'     => $node->title,
              'body'      => $node->field_home_commercial_project_de_value,
              'linkText'  => $node->field_home_commercial_project_li_value,
              'linkUrl'   => $path,
              'imagePath' => $image_path,
              'type'      => $node->name,
              'location' => $node->field_specific_location_value,
              'project_category' => $node->name,
              'scheme_offers' => $node->field_scheme_title_value
            );

            // $data['typology'][] = $node->ttp_name;
            // $data[]['price'] => $node->ttp_name;

            $node_id = $node->nid;

        } else{

          if($node_id == $node->nid){

            // $data['typology'][] = $node->ttp_name;
            // $data[]['price'] => $node->ttp_name;

          }else{

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
        

            $data[] = array(
              'nid'       => $node->nid,
              'title'     => $node->title,
              'body'      => $node->field_home_commercial_project_de_value,
              'linkText'  => $node->field_home_commercial_project_li_value,
              'linkUrl'   => $path,
              'imagePath' => $image_path,
              'type'      => $node->name,
              'location' => $node->field_specific_location_value,
              'project_category' => $node->name,
              'scheme_offers' => $node->field_scheme_title_value
            );

            // $data['typology'][] = $node->ttp_name;
            // $data[]['price'] => $node->ttp_name;

            $node_id = $node->nid;

          }

        }
			
      }
      
      return [
        '#theme'    => 'page--search-property',
        '#data_tab' => $tabs,
        '#data_obj' => $data,
      ];
      
		

    }
     
}