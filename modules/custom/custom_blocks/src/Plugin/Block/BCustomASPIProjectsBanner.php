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
 *   id = "b-aspi-projects-banner",
 *   admin_label = @Translation("ASPI Projects Banner"),
 * )
 */

class BCustomASPIProjectsBanner extends BlockBase {
    /**
     * {@inheritdoc}
     */
    public function build() {
        $uri = \Drupal::request()->getRequestUri();
        $urlArray = explode('/', $uri);
        $page = $urlArray[count($urlArray)-1]; //todo: the url could be /abc/xyz
//

        $projectLinkPath = 'PALAVA HIGHCITY';
        $projectTitle = 'PALAVA HIGHCITY';

        $current_path = \Drupal::service('path.current')->getPath(); // Gets internal path - for eg /node/29.
        explode('/', $current_path);

        $query = \Drupal::entityQuery('node')
            ->condition('status', 1)
            ->condition('type', 'Projects')
            ->condition('title', $projectTitle);

        $nids = $query->execute();
        foreach($nids as $nid) {
            $projectNid = $nid;
//        $node = Node::load($nid);
//
        }
/*
        $query = \Drupal::entityQuery('node')
            ->condition('status', 1)
            ->condition('type', 'Projects')
            ->condition('field_project', $projectNid);

        $nids = $query->execute();*/
        $output = [];
        foreach($nids as $nid) {
            $am_node = Node::load($nid);
            $imageOrVideos = $am_node->field_image_or_video->referencedEntities();
            $imgVideo=[];
            foreach ($imageOrVideos as $img){
                $imgVideo = array(
                    "field_common_alternate_text"=> $img->field_common_alternate_text->value,
                    "field_combine_caption"=>$img->field_combine_caption->value,
                    "field_image_url_text"=>$img->field_image_url_text->value,
                    "field_youtubeid"=>$img->field_youtubid->value
                );
            }
            $output['banner_image']=$imgVideo;
        }
        return [
            '#theme'    => 'block--b-aspi-projects-banner',
            '#cur_page' => $this->t('landing_page'),
            '#test_var' => $this->t('Test Value'),
            '#data_obj' => $output,
        ];
    }
}