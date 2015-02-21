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
  $return = '';
  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $id = 'zfa-menu-panel-' . $element['#original_link']['mlid'];
  //$output = l($element['#title'], $element['#href'], $element['#localized_options']);
  $output = $element['#title'];
  // account for no link'ed items
  if ($element['#href'] == '<nolink>') {
    $output = '<a href="#">' . $output . '</a>';
  }
  // account for sub menu things being rendered differently
  if (empty($sub_menu)) {
    // ending elements
    $return .= '<li><a href="' . $element['#href'] . '"><div class="icon-assignment-white outline-nav-icon" data-grunticon-embed></div>' . $output . '</a></li>';
  }
  else {
    if ($element['#original_link']['p3'] == 0) {
      $short = preg_replace('/[^a-zA-Z0-9\s]/', '', strtolower($output));
      $return .= '<section role="tabpanel" aria-hidden="true" class="content" id="' . $short . '-panel">
      <ul class="off-canvas-list content-outline-navigation">
      <h2>' . $output . '</h2>
      <h3>A long time ago, in science</h3>' . $sub_menu . "</ul>\n</section>";
    }
    elseif ($element['#original_link']['p4'] == 0) {
      $return .= '<li class="has-submenu"><a href="#"><div class="icon-content-white outline-nav-icon" data-grunticon-embed></div><span class="outline-nav-text">' . $output . '</span></a>
        <ul class="left-submenu level-1-sub">
          <h2>' . $output . '</h2>
          <h3>Lets do Science!</h3>
          <li class="back">
          <a href="#">Back to all Lessons</a></li>' . $sub_menu .'</ul></li>';
    }
    elseif ($element['#original_link']['p5'] == 0) {
      $return .= '<li><label>' . $output . '</label></li>
        <li class="has-submenu"><a href="' . $element['#href'] .'">Link 2 w/ submenu</a>
            <ul class="left-submenu">
                <li class="back"><a href="#">Back</a></li>
                ' . $sub_menu . '
            </ul>
        </li>
        <li><a href="#">...</a></li>';
      }
  }
  return $return;
}
