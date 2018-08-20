<?php
	/**
	 * @file
	 * Contains \Drupal\custom_blocks\Plugin\Block\CustomGetinTouchBlock.
	 */
	
	namespace Drupal\custom_blocks\Plugin\Block;
	
	use Drupal\Core\Block\BlockBase;
	use Drupal\Core\Form\FormInterface;
	
	/**
	 * Provides a 'Custom' block.
	 *
	 * @Block(
	 *   id = "home_get_in_touch",
	 *   admin_label = @Translation("Home Get in Touch"),
	 * )
	 */
	class CustomGetinTouchBlock extends BlockBase {
	
		/**
		 * {@inheritdoc}
		 */
		public function build() {
			$form = \Drupal::formBuilder()->getForm('Drupal\custom_blocks\Form\HomeGetinTouchForm');
			return $form;
		}
	}