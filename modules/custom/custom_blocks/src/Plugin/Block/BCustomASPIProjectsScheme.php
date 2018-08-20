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
 *   id = "b-aspi-projects-scheme",
 *   admin_label = @Translation("ASPI Projects - Scheme"),
 * )
 */

class BCustomASPIProjectsScheme extends BlockBase {
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
        }
        $output = [];
        foreach($nids as $nid) {
            $am_node = Node::load($nid);
            $output['field_scheme_details']=$am_node->field_scheme_details->value;
            $output['field_scheme_icon_url']=$am_node->field_scheme_icon_url->value;
            $output['field_scheme_title']=$am_node->field_scheme_title->value;
        }
        return [
            '#theme'    => 'block--b-aspi-projects-scheme',
            '#cur_page' => $this->t('landing_page'),
            '#test_var' => $this->t('Test Value'),
            '#data_obj' => $output,
        ];
    }
}