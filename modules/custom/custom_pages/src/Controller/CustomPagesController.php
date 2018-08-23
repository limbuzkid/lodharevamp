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
	use Drupal\taxonomy\Entity\Term;
	use Drupal\paragraphs\Entity\Paragraph; 
  
  
  class CustomPagesController extends ControllerBase {

    public function search() {

      $base_path =  \Drupal::config('assets_path')->get('url');
			
			$nids = \Drupal::entityQuery('node')
						->condition('status', NODE_PUBLISHED)
						->condition('type', 'projects')
						->sort('created', 'DESC')
						->execute();
			$nodes = Node::loadMultiple($nids);
			
			$data = array();
			
			//echo '<pre>';
			foreach($nodes as $node) {
				/*$paragraph = Paragraph::load(254);
				print_r($paragraph);
				exit;*/
				
				$nid = $node->nid->value;
				$tid = $node->get('field_project_category')->target_id;
				
				$ppqry = \Drupal::database()->select('node__field_project', 'nfp');
				$ppqry->addField('nfp', 'entity_id');
				$ppqry->condition('nfp.field_project_target_id', $nid);
				$ppqry->range(0, 1);
				
				$price_plans_nid = $ppqry->execute()->fetchField();
				
				$price_plans_node = Node::load($price_plans_nid);
				
				$image_array = array();
				
				if(!empty($node->field_minimized_images_)) {
					foreach($node->field_minimized_images_ as $image) {
						$referenced_image = $image->entity;
						$image_array[] = $base_path .'/'. $referenced_image->field_image_url->value;
					}
				}
				
				$typology = array();
				
				
				if($price_plans_node->field_unit_plan) {
					$unit_price =array();
					$paras = $price_plans_node->field_unit_plan->referencedEntities();
					foreach($paras as $para) {
						$unit_plan_id = $para->id->value;
						$query = \Drupal::database()->select('paragraph__field_plans', 'pfp');
						$query->leftJoin('paragraph__field_room_image_plan_details', 'fripd', 'fripd.entity_id = pfp.field_plans_target_id');
						$query->leftJoin('paragraph__field_unit_price', 'pfup', 'pfup.entity_id = fripd.field_room_image_plan_details_target_id');
						$query->fields('pfup', ['field_unit_price_value']);
						$query->condition('pfp.entity_id', $unit_plan_id);

						$prices = $query->execute();
						foreach($prices as $price) {
							$unit_price[] = round($price->field_unit_price_value/1000000, 1);
						}
						
						
						

						
						
						

						
						
						
						
						$para_term_id = $para->field_typology->target_id;
						$para_qry = \Drupal::database()->select('taxonomy_term_field_data', 't');
						$para_qry->addField('t', 'name');
						$para_qry->condition('t.tid', $para_term_id);
						$para_qry->orderBy('t.name', 'ASC');
						
						$typology[] = $para_qry->execute()->fetchField();
						
						sort($typology);
					}
					
					
					
					
					
				}
				
				
				$project_price 	= '';
						

						if(!empty($unit_price)) {
							$max_price = max($unit_price);
							$min_price = min($unit_price);
						
							if($max_price == $min_price) {
								$project_price = $max_price .' Cr';
							} else {
								$project_price = $min_price .' - '. $max_price .' Cr';
							}
						}
				

				$first = $first_BHK = true;
				$typo_str1 = $typo_str2 = '';
				
				if(!empty($typology)) {
					foreach($typology as $typo) {
						if (strpos($typo, 'BHK') !== false) {
							$temp = explode(' ', $typo);
							if($first_BHK) {
								$typo_str1 .= $temp[0];
								$first_BHK = false;
							} else {
								$typo_str1 .= ','. $temp[0];
							}
							
						} else {
							if($first) {
								$typo_str2 = $typo;
								$first = false;
							} else {
								$typo_str2 = ' ,'. $typo;
							}
						}
					}
				}
				
				//echo $typo_str1;
				
				$typo_logy = '';
				
				if($typo_str1 != '' && $typo_str2 != '') {
					$typo_logy = $typo_str1 . ' BHK, '. $typo_str2;
				} elseif($typo_str1 != '' && $typo_str2 == '') {
					$typo_logy = $typo_str1 . ' BHK';
				} elseif($typo_str1 == '' && $typo_str2 != '') {
					$typo_logy = $typo_str2;
				}


				$data[] = array(
					'nid'							=> $node->nid->value,
					'project_name' 		=> $node->title->value,
					'category'				=> \Drupal\taxonomy\Entity\Term::load($tid)->get('name')->value,
					'scheme_title'		=> $node->field_scheme_title->value,
					'scheme_details'	=> trim($node->field_scheme_details->value),
					'location'				=> $node->field_specific_location->value,
					'possession_date' => date('M Y', strtotime($node->field_tentative_possession_date->value)),
					'link_url'				=> \Drupal::service('path.alias_manager')->getAliasByPath('/node/'.$nid),
					'typology'				=> $typo_logy,
					'images'					=> $image_array,
					'unit_price'			=> $project_price,
				);
			}
			
			

			//echo '<pre>';  print_r($data); exit;

			return [
				'#theme' => 'page__all_projects',
				'#blank' => $this->t(''),
				'#data_obj' => $data
			];
    }
}