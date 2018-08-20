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
 *   id = "b-gallery-amenity-tabs",
 *   admin_label = @Translation("Gallery Amenities - Tabs"),
 * )
 */

class BGalleryAmenitiesTabs extends BlockBase {
    /**
     * {@inheritdoc}
     */


    public function build() {


        // Getting the request URL
        $uri = \Drupal::request()->getRequestUri();
        $urlArray = explode('/', $uri);
        $page = $urlArray[count($urlArray)-1]; //todo: the url could be /abc/xyz
//      var_dump('URI : ',$uri);

        $projectLinkPath = 'palava-city';
        $projectTitle = 'Palava City';


        $current_path = \Drupal::service('path.current')->getPath(); // Gets internal path - for eg /node/29.
        explode('/', $current_path);
//      echo 'current path is';
//      var_dump($current_path);

//      $path_alias = \Drupal::service('path.alias_manager')->getAliasByPath($current_path, $langcode);
//      echo 'Path alias:';
//      var_dump($path_alias);


        $query = \Drupal::entityQuery('node')
            ->condition('status', 1)
            ->condition('type', 'projects')
            ->condition('title', $projectTitle);
//        ->sort('field_sequence','asc');

        $nids = $query->execute();
        foreach($nids as $nid) {
            $projectNid = $nid;
//        $node = Node::load($nid);
//        var_dump('node', $node);
        }


        $query = \Drupal::entityQuery('node')
            ->condition('status', 1)
            ->condition('type', 'gallery')
            ->condition('field_project', $projectNid);

        $nids = $query->execute();
        $output = [];

        foreach($nids as $nid) {
            $am_node = Node::load($nid);
            $output['title'] =$am_node->title->value;
            $output['features'] =$am_node->body->value;
            $gallery =$am_node->field_gallery_ima->referencedEntities();

            foreach ($gallery as $gall){
                $output = array("image_url"=>$gall->field_image_url,"image_caption"=>$gall->field_image_caption);
            }
        }


        return [
            '#theme'    => 'block--b-gallery-amenity-tabs',
            '#cur_page' => $this->t('landing_page'),
            '#test_var' => $this->t('Test Value'),
            '#data_obj' => $output,
        ];
    }
}