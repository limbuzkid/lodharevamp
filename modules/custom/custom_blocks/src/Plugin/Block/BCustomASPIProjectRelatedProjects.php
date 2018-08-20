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
 *   id = "b-aspi-project-related-projects",
 *   admin_label = @Translation("ASPI Project Related Projects"),
 * )
 */

class BCustomASPIProjectRelatedProjects extends BlockBase {
    /**
     * {@inheritdoc}
     */
    public function build() {
        // Getting the request URL
        $uri = \Drupal::request()->getRequestUri();
        $urlArray = explode('/', $uri);
        $page = $urlArray[count($urlArray)-1]; //todo: the url could be /abc/xyz
    //      var_dump('URI : ',$uri);




        $current_path = \Drupal::service('path.current')->getPath(); // Gets internal path - for eg /node/29.
        $urlArray = explode('/', $uri);
        $page = $urlArray[count($urlArray)-1]; //todo: the url could be /abc/xyz
    //      echo 'current path is';
    //      var_dump($current_path);

    //      $path_alias = \Drupal::service('path.alias_manager')->getAliasByPath($current_path, $langcode);
    //      echo 'Path alias:';
    //      var_dump($path_alias);


        $projectLinkPath = 'palava-city';
        $projectTitle = 'Palava City';

        $query = \Drupal::entityQuery('node')
          ->condition('status', 1)
          ->condition('type', 'projects')
          ->condition('title', $projectTitle);
        $nids = $query->execute();

        $relatedProjects=[];
        foreach($nids as $nid) {
            $projectNode = Node::load($nid);
            $projCategory = $projectNode->field_project_category->referencedEntities();
            $relatedProjects1=$projectNode->field_related_projects->referencedEntities();

            foreach($relatedProjects1 as $relProj){
              $relatedProjects[] = array(
                'title'=>$relProj->title->value,
                'location'=>$relProj->field_location->value,
                'image_path'=>$relProj->field_image_path->value,
                  'field_tentative_possession_date'=>$relProj->field_tentative_possession_date->value,
                  'projCategory'=>$projCategory->value,
                  'field_scheme_title'=>$relProj->field_scheme_title->value

              );
            }
        }
        return [
            '#theme'    => 'block--b-aspi-project-related-projects',
            '#cur_page' => $this->t('landing_page'),
            '#test_var' => $this->t('Test Value'),
            '#data_obj' => $relatedProjects,
        ];
    }
}
