<?php

  namespace Drupal\custom_blocks\Plugin\Block;

  use Drupal\Core\Block\BlockBase;
  use Drupal\node\Entity\Node;


  /**
   * Provides a 'Custom' Block
   *
   * @Block(
   *   id = "b-commercial-project-types",
   *   admin_label = @Translation("Commercial Project Types"),
   * )
   */
  class BCommercialProjectTypes extends BlockBase {

    function getTaxonomy() {
        return \Drupal::entityTypeManager()->getStorage('taxonomy_term');
    }

    function getFieldValue($term, $field){
      return $this->getTaxonomy()->load($term->tid)->$field->value;
    }

    /**
     * {@inheritdoc}
     */
    public function build() {
      $vid = 'commertial_project_type';
      $categoryData = [];
      $projects = [];
      $terms = $this->getTaxonomy()->loadTree($vid);

      foreach ($terms as $term) {
        $categoryData[]=array(
          'name' => $term->name,
          'field_menu_name' => $this->getFieldValue($term, 'field_menu_name'),
          'field_description' => $this->getFieldValue($term, 'field_description'),
          'field_banner_img' => $this->getFieldValue($term, 'field_banner_img'),
          'field_section_id' => $this->getFieldValue($term, 'field_section_id'),
          'field_page_section_id' => $this->getFieldValue($term, 'field_page_section_id'),
          'field_body_header' => $this->getFieldValue($term, 'field_body_header'),
          'field_know_more_link' => $this->getFieldValue($term, 'field_know_more_link'),
        );

        //todo: field_quotes_and_world = project category type
        $projects[$term->name] = [];
        $nodes = \Drupal::entityTypeManager()
          ->getStorage('node')
          ->loadByProperties([
            'field_quotes_and_world' => $term->tid,
          ]);

        foreach ($nodes as $node => $item) {
          $am_node = Node::load($node);
          $categories = $am_node->field_project_category->referencedEntities();
          $minimized_images_ = $am_node->field_minimized_images_->referencedEntities();
          $images = [];
          foreach ($minimized_images_ as $img) {
            $images[] = [
              "field_image_url" => $img->field_image_url->value,
              "field_image_alternate_text" => $img->field_image_alternate_text->value,
            ];
          }

          $projects[$term->name][] = [
            'title' => $am_node->title->value,
            'field_specific_location' => $am_node->field_specific_location->value,
            'field_tentative_possession_date' => $am_node->field_tentative_possession_date->value,
            'field_scheme_title' => $am_node->field_scheme_title->value,
            'field_project_category' => $categories[0]->name->value,
            'field_minimized_images_' => $images,
          ];
        }
      }

//      var_dump('$projects', $projects, '$categoryData',$categoryData);

      return [
        '#theme' => 'block--b-commercial-project-types',
        '#data_obj' => array(
          'projects' => $projects,
          'categoryData' => $categoryData,
        ),
      ];
    }
  }
