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
 *   id = "b-commercial-amenities",
 *   admin_label = @Translation("Commercial Amenities"),
 * )
 */

class BCommercialAmenities extends BlockBase {
    /**
     * {@inheritdoc}
     */
    public function build() {

        $current_path = \Drupal::service('path.current')->getPath(); // Gets internal path - for eg /node/29.
        $last = explode('/', $current_path);

        $query = \Drupal::entityQuery('node')
            ->condition('status', 1)
            ->condition('type', 'amenities')
            ->condition('field_project', $last[sizeof($last)-1]);

        $nids = $query->execute();

        $output = [];
        foreach ($nids as $nid) {
            $am_node = Node::load($nid);
            $internalAmenities = $am_node->field_internal_amenities_group->referencedEntities();
            $externalAmenities = $am_node->field_external_amenities_group->referencedEntities();
            $internal_amenities = [];
            $external_amenities = [];
            foreach ($internalAmenities as $amenity) {
                $internal_amenities[] = array(
                    'url' => 'http://' . \Drupal::request()->getHttpHost() . '/' . $amenity->field_amenity_image_url->value,
                    'alternateText' => $amenity->field_amenity_image_al->value,
                    'caption' => $amenity->field_amenity_image_cap->value,
                );
            }
            foreach ($externalAmenities as $amenity) {
                $external_amenities[] = array(
                    'url' => 'http://' . \Drupal::request()->getHttpHost() . '/' . $amenity->field_amenity_image_url->value,
                    'alternateText' => $amenity->field_amenity_image_al->value,
                    'caption' => $amenity->field_amenity_image_cap->value,
                );
            }
            $output = array(
                'internal_amenities' =>$internal_amenities,
                'external_amenities' =>$external_amenities,
                'features' => $am_node->body->value,
                'notes' => $am_node->field_notes->value,
            );
        }
        return [
            '#theme'    => 'block--b-commercial-amenities',
            '#cur_page' => $this->t('landing_page'),
            '#test_var' => $this->t('Test Value'),
            '#data_obj' => $output,
        ];
    }
}