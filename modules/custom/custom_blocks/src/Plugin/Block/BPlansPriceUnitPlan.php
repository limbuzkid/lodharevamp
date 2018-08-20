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
 *   id = "b-plans-and-prices-unit-plan",
 *   admin_label = @Translation("Plans and Price - Unit Plan"),
 * )
 */

class BPlansPriceUnitPlan extends BlockBase {
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

        $query = \Drupal::entityQuery('node')
            ->condition('status', 1)
            ->condition('type', 'projects')
            ->condition('title', $projectTitle);

        $nids = $query->execute();
        foreach($nids as $nid) {
            $projectNid = $nid;
//        $node = Node::load($nid);
//        var_dump('node', $node);
        }

        $query = \Drupal::entityQuery('node')
            ->condition('status', 1)
            ->condition('type', 'plans_prices')
            ->condition('field_project', $projectNid);

        $nids = $query->execute();
        $output = [];

        foreach($nids as $nid) {
            $am_node = Node::load($nid);
            $floor_plans=$am_node->field_floor_plan->referencedEntities();
            $unit_plans=$am_node->field_unit_plan->referencedEntities();
            $master_plans=$am_node->field_master_plan->referencedEntities();
            $floors=[];
            $units=[];
            $masters=[];
            foreach ($floor_plans as $floor){
                $floors = array("floor_desc"=>$floor->field_floor_description->value,
                        "floor_images"=>$floor->field_floor_plan_images->value,
                        "typology_no"=>$floor->field_typology_number->value
                    );
            }
            foreach ($unit_plans as $unit){
                $units = array("unit_desc"=>$unit->field_description->value,
                        "unit_images"=>$unit->field_plan_images->value,
                    );
            }
            foreach ($master_plans as $master){
                $masters = array("master_desc"=>$master->field_description->value,
                        "master_images"=>$master->field_plan_images->value,
                    );
            }
            $output['floors'] =$floors;
            $output['units'] =$units;
            $output['masters'] =$masters;
        }
        return [
            '#theme'    => 'block--b-plans-and-prices-unit-plan',
            '#cur_page' => $this->t('landing_page'),
            '#test_var' => $this->t('Test Value'),
            '#data_obj' => $output,
        ];
    }
}