<?php

/**
 * @file
 * template.php
 */

function socrates_menu_tree__main_menu($variables) {
  return '<ul class="menu nav navbar-nav">' . $variables['tree'] . '</ul>';
}

function socrates_menu_tree__user_menu($variables) {
  return '<ul class="menu nav navbar-nav">' . $variables['tree'] . '</ul>';
}

/**
 * Implements hook_preprocess_HOOK().
 */
function socrates_preprocess_panels_pane(&$variables) {
  if (!empty($variables['pane']->configuration['title_class'])) {
    $class = explode(' ', $variables['pane']->configuration['title_class']);
    $variables['title_attributes_array']['class'] = array_merge($variables['title_attributes_array']['class'], $class);
  }
}
