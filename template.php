<?php

/**
 * Adds CSS classes based on user roles
 * Implements template_preprocess_html().
 *
 */
function foundation_access_preprocess_html(&$variables) {
  foreach($variables['user']->roles as $role){
    $variables['classes_array'][] = 'role-' . drupal_html_class($role);
  }
}

/**
 * Implements template_preprocess_page.
 */
function foundation_access_preprocess_page(&$variables) {
}

/**
 * Implements template_preprocess_node.
 */
function foundation_access_preprocess_node(&$variables) {
}

// Active Book Outline (Sidebar)

/**
 * Implements menu_tree__cis_service_connection_active_outline().
 */
function foundation_access_menu_tree__cis_service_connection_active_outline($variables) {
  return $variables['tree'];
}

/**
 * Implements menu_link__cis_service_connection_active_outline().
 */
function foundation_access_menu_link__cis_service_connection_active_outline($variables) {
  $element = $variables['element'];
  $sub_menu = '';
  $id = 'zfa-menu-panel-' . $element['#original_link']['mlid'];
  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  // account for no link'ed items
  if ($element['#href'] == '<nolink>') {
    $output = '<a href="#">' . $output . '</a>';
  }
  // account for sub menu things being rendered differently
  if (empty($sub_menu)) {
    if ($element['#original_link']['p3'] == 0) {
      $options = $element['#localized_options'];
      $options['attributes']['class'][] = 'accordion-btn';
      $options['attributes']['class'][] = 'button';
      $return = '<li>' . l($element['#title'], $element['#href'], $options) . '</li>';
    }
    else if ($element['#original_link']['p5'] == 0 && $element['#original_link']['p4'] != 0 && $element['#href'] != '<nolink>') {
      $options = $element['#localized_options'];
      $options['attributes']['class'][] = 'outline-sub-link';
      $options['attributes']['class'][] = 'small';
      $options['attributes']['class'][] = 'button';
      $options['attributes']['class'][] = 'fi-info';
      $return = l($element['#title'], $element['#href'], $options);
    }
    else {
      $return = '<li' . drupal_attributes($element['#attributes']) . '>' . $output . "</li>\n";
    }
  }
  else {
    if ($element['#original_link']['p3'] == 0) {
      $return = '
      <li><a href=\'#' . $id . '\' class="accordion-btn button">' . $element['#title'] .'</a>
      <dl class="accordion" data-accordion="myAccordionGroup">
      <dd class="accordion-navigation">' . $sub_menu .'</dd></dl></li>';
    }
    else if ($element['#original_link']['p4'] == 0) {
      $return = '<h3>' . $element['#title'] . '</h3>' . "\n" . $sub_menu;
    }
    else if ($element['#original_link']['p5'] == 0) {
      $return = '<a href="#panel' . $id . '" class="outline-sub-link expand fi-page-multiple">' . $element['#title'] .'</a>
        <div id="panel' . $id . '" class="content">' . $sub_menu .'</div>';
    }
    else {
      $return = '
      <dd class="accordion-navigation">
        <a href="#' . $id . '">' .
          $element['#title'] .
        '</a>' .
        '<div id="' . $id . '" class="content">' . $sub_menu .
        '</div>
      </dd>';
    }
  }
  return $return;
}
