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
      // $query->leftJoin('node__field_minimized_images_', 'fmi', 'fmi.entity_id = n.nid');
      
      $query->leftJoin('taxonomy_term_field_data', 'fp', 'fp.tid = fq.field_quotes_and_world_target_id');
      $query->leftJoin('taxonomy_term_field_data', 'tpc', 'tpc.tid = fpc.field_project_category_target_id');
      
      // $query->leftJoin('paragraph__field_image_url', 'fiu', 'fiu.entity_id = fmi.field_minimized_images__target_id');
      
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
      // $query->fields('fiu', ['field_image_url_value']);
      
      
			$query->condition('nf.status', NODE_PUBLISHED)
            ->condition('nf.type', 'projects')
						->orderBy('fp.name', 'ASC');
			$nodes 	= $query->execute();

      $tabs = array();
      
      $node_id = 0;
   
      $output = '';
      $nodeid = 0;
      foreach($nodes as $node) {
        // echo'<pre>';print_r($node);
        $typology = array();
        $query = \Drupal::database()->select('node', 'npp');
        $query->leftJoin('node_field_data', 'nf', 'nf.nid = npp.nid');
        $query->leftJoin('node__field_project', 'fpro', 'fpro.field_project_target_id = '.$node->nid);
        $query->leftJoin('node__field_unit_plan', 'fup', 'fup.entity_id = npp.nid');
        $query->leftJoin('paragraph__field_typology', 'ft', 'ft.entity_id = fup.field_unit_plan_target_id');
        $query->leftJoin('taxonomy_term_field_data', 'ttp', 'ttp.tid = ft.field_typology_target_id');
        $query->fields('ttp', ['name']);
        $query->fields('npp', ['nid']);
        $query->condition('nf.status', NODE_PUBLISHED)
              ->condition('nf.type', 'plans_prices');
        $prices 	= $query->execute();


        
        // $query = \Drupal::entityQuery('node');
       
        // $query->condition('status', NODE_PUBLISHED)
        //       ->condition('type', 'plans_prices')
        //       ->condition('field_project', $node->nid)
        //       ->sort('nid', 'DESC');
        // $nid 	= $query->execute();
        // print_r($nid);exit;

        
          
          foreach ($prices as $price) {
           
              $typology[] = $price->name ;

          echo '<pre>';  print_r($price->name);
          }
  
        
     echo '<pre>';print_r($typology);
      $date = date('M Y', strtotime($node->field_tentative_possession_date_value));
      $output .= '<div class="slides">
                    <span class="slider-tag grey">'.$node->tpc_name.'</span>
                    <div class="res-head flex-wrp">
                        <div class="head-txt">
                            <h3>'.$node->title.'</h3>
                            <p>'.$node->field_specific_location_value.'</p>
                        </div>
                        <div class="rating">
                            <a href="javascript:void(0);" class="viewIcon"></a>
                            <!-- <span class="sprite-star"></span> -->
                            <img src="/themes/basic/images/aspi/star.png" alt="star">
                        </div>
                    </div>
                    <div class="inner-wrp custCarou">
                        <div class="inner-slider">
                            <img src="'.$base_path.$node->field_image_url_value.'" alt="resident-image">
                        </div>
                        <span class="fav-icon">
                                        <img src="/themes/basic/images/aspi/fav-icon.png" alt="fav-icon">
                                    </span>
                    </div>
                    <div class="possession-wrp">
                        <p>Possession Date: <b>'.$date.'</b></p>
                        <p>Typology: <b>2, 3 BHK</b> | Price: <b>2.5 to 5 Cr</b></p>
                        <p><span>Offer : '.$node->field_scheme_title_value.'</span></p>
                    </div>
                    <div class="slide-footer">
                        <a href="javascript:;">View Details</a>
                    </div>
                </div>';
      }
      //die();
      // return [
      //   '#theme'    => 'page--all-projects',
      //   '#data_tab' => $tabs,
      //   '#data_obj' => $data,
      // ];
      
      $element = array(
        '#markup' => $output,
      );
      return $element;
		

    }
     
}