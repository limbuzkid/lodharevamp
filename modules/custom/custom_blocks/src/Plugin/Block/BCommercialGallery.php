<?php
namespace Drupal\custom_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Component\Annotation\Plugin;
use Drupal\Core\Annotation\Translation;
use Drupal\Core\Url;
use Drupal\Core\Link;
use Drupal\node\Entity\Node;


/**
 * Provides a 'Custom' Block
 *
 * @Block(
 *   id = "b-commercial-gallery",
 *   admin_label = @Translation("Commercial Gallery"),
 * )
 */

class BCommercialGallery extends BlockBase {
    /**
     * {@inheritdoc}
     */
    public function build() {

        $current_path = \Drupal::service('path.current')->getPath(); // Gets internal path - for eg /node/29.
        $last = explode('/', $current_path);


        $query = \Drupal::entityQuery('node')
            ->condition('status', 1)
            ->condition('type', 'new_gallery_')
            ->condition('field_project',$last[sizeof($last)-1]);

        $nids = $query->execute();

        $output = [];
        foreach($nids as $nid) {
            $am_node = Node::load($nid);
            $video360 = $am_node->field_gallery_360_group->referencedEntities();
            $images = $am_node->field_gallery_ima->referencedEntities();
            $videos = $am_node->field_gallery_videos_group->referencedEntities();
            $videos360=[];
            $all_images=[];
            $all_videos=[];
            foreach ($video360 as $img){
                $videos360[] = array(
                    "text"=> $img->field_gallery_360->value,
                    "thumbnail"=>$img->field_thumbnail->value,
                    "url"=>$img->field_url->value,
                );
            }
            foreach ($images as $img){
                $all_images[] = array(
                    "caption"=> $img->field_image_caption->value,
                    "text"=>$img->field_image_alternate_text->value,
                    "url"=>$img->field_image_url->value
                );
            }
            foreach ($videos as $img){
                $all_videos[] = array(
                    "caption"=> $img->field_caption->value,
                    "thumbnail"=>$img->field_thumbnail_url->value,
                    "youtube_id"=>$img->field_youtube_id->value,
                );
            }
            $output['panorama']=$videos360;
            $output['images']=$all_images;
            $output['videos']=$all_videos;
        }
        return [
            '#theme'    => 'block--b-aspi-projects-amenities',
            '#cur_page' => $this->t('landing_page'),
            '#test_var' => $this->t('Test Value'),
            '#data_obj' => $output,
        ];
    }
}