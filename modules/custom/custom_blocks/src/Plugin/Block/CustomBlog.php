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
						->condition('type', 'blog')
						->sort('nid', 'DESC');
			$nids 	= $query->execute();

			$nodes 	= entity_load_multiple('node', $nids);
			foreach($nodes as $node) {
				$date_time = strtotime($node->field_datetime->value);
				$date = date('d.m.Y', $date_time);   

				$output .= '<div class="blog">
							<p class="date">'.$date.'</p>
							<p class="title">'.$node->title->value.'</p>
							<p>'.$node->body->value.'</p>
							<a href="javascript:;" class="arrowLink">Read More</a>
							</div>';
			}


      return array(
		'#markup' => $this->t($output),
		/* If you want to bypass Drupal 8's default caching for this block then simply add this, otherwise remove the next three line */
		'#cache' => array(
			'max-age' => 0,
		),
	  );
	}
}