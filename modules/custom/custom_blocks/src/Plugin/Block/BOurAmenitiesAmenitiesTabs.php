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
 *   id = "b-our-amenities-amenities-tabs",
 *   admin_label = @Translation("Our Amenities - Amenities Tabs"),
 * )
 */

class BOurAmenitiesAmenitiesTabs extends BlockBase {
    /**
     * {@inheritdoc}
     */
    public function build() {

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
            ->condition('type', 'amenities')
            ->condition('field_project', $projectNid);

        $nids = $query->execute();
        $output = [];

        foreach($nids as $nid) {
            $am_node = Node::load($nid);
            $output['title'] =$am_node->title->value;
            $output['features'] =$am_node->body->value;
            $internalAmenities=$am_node->field_internal_amenities->referencedEntities();
            $externalAmenities=$am_node->field_external_amenities->referencedEntities();
            $internalAmenitiesOutput=[];
            $externalAmenitiesOutput=[];
            foreach ($internalAmenities as $internal){
                $internalAmenitiesOutput[] = array("image_path" => $internal->field_image_url->value,
                    "image_alt_text" => $internal->field_image_alternate_text->value->value,
                    "image_caption" => $internal->field_image_caption->value);

            }
            foreach ($externalAmenities as $external){
                $internalAmenitiesOutput[] = array("image_path" => $external->field_image_url->value,
                    "image_alt_text" => $external->field_image_alternate_text->value->value,
                    "image_caption" => $external->field_image_caption->value);
            }
            $output['internalAmenities'] =$internalAmenitiesOutput;
            $output['externalAmenities'] =$externalAmenitiesOutput;
        }
        /*PC::debug('$output',$output);*/
        return [
            '#theme'    => 'block--b-our-amenities-amenities-tabs',
            '#cur_page' => $this->t('landing_page'),
            '#test_var' => $this->t('Test Value'),
            '#data_obj' => $output,
        ];
    }
}