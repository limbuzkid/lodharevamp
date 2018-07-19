<?php

  namespace Drupal\canto\Plugin\Field\FieldFormatter;
  
  use Drupal\Core\Field\FieldItemListInterface;
  use Drupal\Core\Field\FormatterBase;
  use Drupal;
  
  /**
   * Plugin implementation of the 'CantoFormatter' formatter.
   *
   * @FieldFormatter(
   *   id = "CantoFormatter",
   *   label = @Translation("Media"),
   *   field_types = {
   *     "Media"
   *   }
   * )
   */
  class CantoFormatter extends FormatterBase {
  
    /**
     * Define how the field type is showed.
     * 
     * Inside this method we can customize how the field is displayed inside 
     * pages.
     */
    public function viewElements(FieldItemListInterface $items, $langcode) {
  
      $elements = [];
      foreach ($items as $delta => $item) {
        $elements[$delta] = [
          '#type' => 'markup',
          '#markup' => $item->canto
        ];
      }
  
      return $elements;
    }
    
  } // class