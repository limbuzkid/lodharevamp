<?php
  namespace Drupal\custom_blocks\Plugin\Block;
  
  use Drupal\Core\Block\BlockBase;
  use Drupal\Component\Annotation\Plugin;
  use Drupal\Core\Annotation\Translation;
  use Drupal\Core\Url;
  use Drupal\Core\Link;
  use Drupal\image\Entity\ImageStyle;

  /**
   * Provides a 'Custom' Block
   *
   * @Block(
   *   id = "homeblog",
   *   admin_label = @Translation("Home Blog"),
   * )
   */

  class CustomBlog extends BlockBase {
    /**
     * {@inheritdoc}
     */
    public function build() {
			$output = '';

			$query = \Drupal::entityQuery('node');
			$query->condition('status', NODE_PUBLISHED)
						->condition('type', 'blog_post')
						->sort('nid', 'DESC');
			$nids 	= $query->execute();

			$nodes 	= entity_load_multiple('node', $nids);
			foreach($nodes as $node) {
				$date_time = strtotime($node->field_datetime->value);
				$date = date('d.m.Y', $date_time); 

				$data[] = array(
					'title' => $node->title->value,
					'body' => $node->body->value,
					'date'  => $date,
					// 'alias' => $node_url,
				);
			}

			return [
				'#theme'    => 'block--homeblog',
				'#cur_page' => $this->t('landing_page'),
				'#test_var' => $this->t('Test Value'),
				'#data_obj' => $data,
			];
	}
}