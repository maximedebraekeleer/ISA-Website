<?php

/**
 * @file
 * Lists available colors and color schemes for the AT Starterkit.
 * By default the color scheme relies almost entirely on color
 * shift, where the user changes the base color and all other
 * unspecified colors shift relative to the new base.
 */

use Drupal\at_core\Ext\ExtGet;
$ext_get = New ExtGet;
$theme_name = \Drupal::service('theme.manager')->getActiveTheme()->getName();
$file_path = drupal_get_path('theme', $theme_name) . '/styles/uikit/components/partials/_variables.scss';
$sass_variables = $ext_get->getSassVariables($file_path);

$info = array(
  // Available colors and color labels used in theme.
  'fields' => array(
    'base'        => t('Base'),
    'page'        => t('Page'),
    'text'        => t('Text'),
    'link'        => t('Links'),
    'highlight'   => t('Highlights'),
  ),
  // Pre-defined color schemes.
  'schemes' => array(
    'default' => array(
      'title' => t('Helius'),
      'colors' => array(
        'base'      => $sass_variables['base-color'],
        'page'      => $sass_variables['page-background-color'],
        'text'      => $sass_variables['text-color'],
        'link'      => $sass_variables['link-color'],
        'highlight' => $sass_variables['highlight'],
      ),
    ),
    'cold' => array(
      'title' => t('Aurai'),
      'colors' => array(
        'base'      => '#041014',
        'page'      => '#fafafa',
        'text'      => '#2b2b2c',
        'link'      => '#41b6d7',
        'highlight' => '#1f7993',
      ),
    ),
    'neutral' => array(
      'title' => t('Selene'),
      'colors' => array(
        'base'      => '#030303',
        'page'      => '#f7f7f7',
        'text'      => '#3b3b3b',
        'link'      => '#737373',
        'highlight' => '#424242',
      ),
    ),
  ),

  // CSS files (excluding @import) to rewrite with new color scheme.
  'css' => array(
    'styles/css/components/color.css',
    'styles/css/components/tabs.css',
  ),

  // Files to copy.
  'copy' => array(
    'logo.svg',
    'logo.png',
  ),

  // Gradient definitions.
  'gradients' => array(),
);

//        'base'      => '#292929',
//        'page'      => '#f8f8f8',
//        'text'      => '#2e2e2e',
//        'link'      => '#0286ca',
//        'highlight' => '#e25402',