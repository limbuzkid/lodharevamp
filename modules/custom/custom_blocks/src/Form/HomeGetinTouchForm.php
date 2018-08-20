<?php
  /**
    * @file
    * Contains \Drupal\custom_blocks\Form\HomeGetinTouchForm.
    */
  namespace Drupal\custom_blocks\Form;
  
  use Drupal\Core\Ajax\AjaxResponse;
  use Drupal\Core\Ajax\ChangedCommand;
  use Drupal\Core\Ajax\CssCommand;
  use Drupal\Core\Ajax\HtmlCommand;
  use Drupal\Core\Ajax\InvokeCommand;
  use Drupal\Core\Form\FormBase;
  use Drupal\Core\Form\FormStateInterface;
  
  
  class HomeGetinTouchForm extends FormBase {
    /**
    * {@inheritdoc}
    */
    public function getFormId() {
      return 'home_get_in_touch';
    }
    
    /**
    * {@inheritdoc}
    */
    public function buildForm(array $form, FormStateInterface $form_state) {
      /*$is_home_page = \Drupal::service('path.matcher')->isFrontPage();
      if($is_home_page) {
        $class = 'dnone';
      } else {
        $class = '';
      }*/
      $form['name'] = array(
        '#type' => 'textfield',
        '#prefix' => '<div class="fieldRow"><div class="clm-3">',
        '#suffix' => '<span class="placeholder">Name</span><span id="nameErr" class="error">This field is required.</span></div>',
        //'#placeholder' => t('Name'),
        '#attributes' => array(
              'id' => 'name',
              'data-label' => "true",
              //'data-validation' => "required,minLength3,alphaOnly" 
        ),
      );
      
      $form['email'] = array(
        '#type' => 'textfield',
        '#prefix' => '<div class="clm-3">',
        '#suffix' => '<span class="placeholder">Email - id</span><span id="mailErr" class="error">This field is required.</span></div>',
        //'#placeholder' => t('Email'),
        '#attributes' => array(
              'id' => 'email',
              'data-label' => "true",
             // 'data-validation' => "required,email" 
        ),
      );
      
      $form['mobile'] = array(
        '#type' => 'textfield',
        '#prefix' => '<div class="clm-3">',
        '#suffix' => '<span class="placeholder">Mobile No.</span><span id="mobErr" class="error">This field is required.</span></div></div>',
        //'#placeholder' => t('Mobile'),
        '#maxlength'  => '15',
        '#attributes' => array(
              'id' => 'mobile',
              'data-label' => "true",
              
              //'data-validation' => "required" 
        ),
      );
      
      $form['submit'] = array(
        '#type' => 'button',
        '#value' => 'Submit',
        '#prefix' => '<div class="buttonWrap">',
        '#suffix' => '</div>',
        '#attributes' => array(
              'class' => array('btn'),
        ),
        '#ajax' => array(
          //'callback' => '::getinTouchCallback',
          //'callback' => 'Drupal\custom_blocks\Form\AskTheXpertForm::ajaxCallback',
          'effect' => 'fade',
          'event' => 'click',
          'progress' => array(
            'type' => 'throbber',
            'message' => 'Please wait',
          ),
        ),
        //'#id' => 'askFormSubmit',

      );
      
      return $form;
    }
    
    public function getinTouchCallback(array &$form, FormStateInterface $form_state) {
      $is_home_page = \Drupal::service('path.matcher')->isFrontPage();
      $error    = false;
      $name_err = false;
      $mob_err  = false;
      $mail_err = false;
      $query_err = false;
      $ajax_response = new AjaxResponse();
      
      if(trim($form_state->getValue('name')) == '') {
        $err_txt = 'Name is required';
        $name_err = true;
        $error = true;
      } else {
        if(!preg_match("/^([a-zA-Z.\']+\s?)*$/", $form_state->getValue('name'))) {
          $err_txt = 'Invalid Name';
          $name_err = true;
          $error = true;
        } 
      }
      if($name_err) {
        $css = ['opacity' => '1'];
        $ajax_response->addCommand(new CssCommand('.nameField .error', $css));
        $ajax_response->addCommand(new HtmlCommand('#nameErr', $err_txt));
      } else {
        $ajax_response->addCommand(new HtmlCommand('#nameErr', ''));
      }
      
      if(trim($form_state->getValue('mobile')) == '') {
        $err_txt = 'Mobile Number is required';
        $mob_err = true;
        $error = true;
      } else {
        $mob = (int)$form_state->getValue('mobile');
        if(!preg_match("/^[0-9]+$/", $form_state->getValue('mobile'))) {
          $err_txt = 'Invalid Mobile Number';
          $mob_err = true;
          $error = true;
        }
        if($mob < 1000000000 || $mob > 999999999999999) {
          $err_txt = 'Invalid Mobile Number';
          $mob_err = true;
          $error = true;
        }
      }
      
      if($mob_err) {
        $css = ['opacity' => '1'];
        $ajax_response->addCommand(new CssCommand('.mobField .error', $css));
        $ajax_response->addCommand(new HtmlCommand('#mobErr', $err_txt));
      } else {
        $ajax_response->addCommand(new HtmlCommand('#mobErr', ''));
      }
      
      if(trim($form_state->getValue('email')) == '') {
        $err_txt = 'Email is required';
        $mail_err = true;
        $error = true;
      } else {
        //if (!\Drupal::service('email.validator')->isValid(trim($form_state->getValue('email')))) {
        if (filter_var($form_state->getValue('email'), FILTER_VALIDATE_EMAIL) === false) {  
          $err_txt = 'Invalid Email';
          $mail_err = true;
          $error = true;
        }
      }
      
      if($mail_err) {
        $css = ['opacity' => '1'];
        $ajax_response->addCommand(new CssCommand('.emailField .error', $css));
        $ajax_response->addCommand(new HtmlCommand('#mailErr', $err_txt));
      } else {
        $ajax_response->addCommand(new HtmlCommand('#mailErr', ''));
      }
          
      if(!$error) {
        $name   = $form_state->getValue('name');
        $mobile = $form_state->getValue('mobile');
        $mail   = $form_state->getValue('email');
                
        $request_time = \Drupal::time()->getRequestTime();
        
        /*$query = \Drupal::database()->insert('table_name');
        $query->fields(['name','email','mobile', 'created']);
        $query->values([$name, $mail, $mobile, $request_time]);
        $query->execute();*/
        
        $msg = '<div class="mssage">Thank you <span>for the query. We will get back to you soon</span></div>';
        
        $ajax_response->addCommand(new HtmlCommand('.recipes-form', $msg));
        
      }
      
      return $ajax_response;
    }
    
    public function ajaxCallback(array &$form, FormStateInterface $form_state) {
      return $form;
    }
    
    public function submitForm(array &$form, FormStateInterface $form_state) {
      /*$name = $form_state->getValue('name');
      $description = $form_state->getValue('description');
      $email = $form_state->getValue('email');*/
      
      //$message = t('Your information has been successfully submitted.') ;
      //drupal_set_message($msg);
    }
    

  
  }
    
  