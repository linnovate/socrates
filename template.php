<?php

/**
 * @file
 * template.php
 */

/**
 * Implements hook_theme().
 */
function socrates_theme() {
  $items = array();

  $items['user_login'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'socrates') . '/templates',
    'template' => 'user-login',
    'preprocess functions' => array(
      'socrates_preprocess_user_login'
    ),
  );

  $items['user_register_form'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'socrates') . '/templates',
    'template' => 'user-register-form',
    'preprocess functions' => array(
      'socrates_preprocess_user_register_form'
    ),
  );
  $items['user_pass'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'socrates') . '/templates',
    'template' => 'user-pass',
    'preprocess functions' => array(
      'socrates_preprocess_user_pass'
    ),
  );

  return $items;
}

/**
 * Implements hook_preprocess_user_login().
 */
function socrates_preprocess_user_login(&$variables) {
  global $language;
  $prefix = (count(language_list()) == '1') ? '' : '/' . $language->language;
  $variables['intro_text'] = t('Welcome to the ')
    . variable_get('site_name', 'Default');
  $variables['user_pass_url'] = $prefix . '/user/password';
  $variables['user_create_url'] = $prefix . '/user/register';
}

/**
 * Implements hook_preprocess_user_register_form().
 */
function socrates_preprocess_user_register_form(&$variables) {
  global $language;
  $prefix = (count(language_list()) == '1') ? '' : '/' . $language->language;
  $variables['intro_text'] = t('Welcome to the ')
    . variable_get('site_name', 'Default');
  $variables['user_pass_url'] = $prefix . '/user/password';
  $variables['user_login_url'] = $prefix . '/user/login';
}

/**
 * Implements hook_preprocess_user_pass().
 */
function socrates_preprocess_user_pass(&$variables) {
  $variables['intro_text'] = t('Welcome to the ')
    . variable_get('site_name', 'Default');
}