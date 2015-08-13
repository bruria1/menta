<?php

/**
 * @file
 * template.php
 */
function menta_form_alter(&$form, $form_state, $form_id) {
  if(($form['#id'] == 'views-exposed-form-gas-stations-block') || ($form['#id'] == 'views-exposed-form-gas-stations-block-1') 
    ||($form['#id'] == 'views-exposed-form-gas-stations-block-2') ||($form['#id'] == 'views-exposed-form-gas-stations-block-3')
    ||($form['#id'] == 'views-exposed-form-gas-stations-block-4') ||($form['#id'] == 'views-exposed-form-gas-stations-page-1')
    ||($form['#id'] == 'views-exposed-form-gas-stations-block-5') ||($form['#id'] == 'views-exposed-form-gas-stations-block-6')){
    foreach ($form['dropdown_first']['#options'] as $key => &$option) {
      if ($key == 'All') {
        $option = 'אזור';
      } 
    }

    foreach ($form['dropdown_second']['#options'] as $key => &$option) {
      if ($key == 'All') {
        $option = 'עיר';
      } 
    }

  }

}


function menta_menu_link(array $vars) {
  $element = $vars['element'];
  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }

  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  // Adding a class depending on the TITLE of the link (not constant)
  $element['#attributes']['class'][] = drupal_html_id($element['#title']);
  // Adding a class depending on the ID of the link (constant)
  if (isset($element['#original_link']['mlid']) && !empty($element['#original_link']['mlid'])) {
    $element['#attributes']['class'][] = 'mid-' . $element['#original_link']['mlid'];
  }
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}