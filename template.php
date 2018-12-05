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
