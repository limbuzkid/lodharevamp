<?php

  namespace Drupal\canto\Plugin\Field\FieldWidget;
  
  use Drupal;
  use Drupal\Core\Field\FieldItemListInterface;
  use Drupal\Core\Field\WidgetBase;
  use Drupal\Core\Form\FormStateInterface;
  
  /**
   * Plugin implementation of the 'CantoWidget' widget.
   *
   * @FieldWidget(
   *   id = "CantoWidget",
   *   label = @Translation("Media select"),
   *   field_types = {
   *     "Media"
   *   }
   * )
   */
  class CantoWidget extends WidgetBase {
  
    /**
     * Define the form for the field type.
     * 
     * Inside this method we can define the form used to edit the field type.
     * 
     * Here there is a list of allowed element types: https://goo.gl/XVd4tA
     */
    public function formElement(
      FieldItemListInterface $items,
      $delta, 
      Array $element, 
      Array &$form, 
      FormStateInterface $formState
    ) {
  
      // Street
  
      $element['canto'] = [
        '#type' => 'button',
        '#title' => t('Canto Media'),
  
        // Set here the current value for this field, or a default value (or 
        // null) if there is no a value
        '#default_value' => isset($items[$delta]->canto) ? $items[$delta]->canto : null,
        '#empty_value' => '',
        '#placeholder' => t('Image'),
      ];
  
  
      return $element;
    }
  
  } // class