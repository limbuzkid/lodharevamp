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
	 *   id = "home-testimonial",
	 *   admin_label = @Translation("Home Testimonial"),
	 * )
	 */
	class CustomTestimonialBlock extends BlockBase {
	
		/**
		 * {@inheritdoc}
		 */
		public function build() {
			$base_path =  \Drupal::config('assets_path')->get('url');
			$query = \Drupal::entityQuery('node')
							->condition('status', NODE_PUBLISHED)				
							->condition('type', "testimonials");
			$nids 	= $query->execute();
            $data = [];
					$nodes 	= entity_load_multiple('node', $nids);
					foreach($nodes as $node) { 
						$data[] = array(
							'title' => $node->title->value,
							'desc'  => $node->field_description->value,
							'imagePath' => $base_path.$node->field_image_path->value,
							'sequence' => $node->field_sequence->value,
							// 'alias' => $node_url,
						);
					}
					
					return [
						'#theme'    => 'block--hometestimonial',
						'#cur_page' => $this->t('landing_page'),
						'#test_var' => $this->t('Test Value'),
						'#data_obj' => $data,
					];
		}
	}