<?php

/**
 * Define layouts from code.
 *
 * @return $layouts
 *   A collection of layouts.
 */
function ds_stacked_2col() {
  $path = drupal_get_path('theme', 'e3_zen');

  return array(
    'label' => t('Two Column Collapsable (Custom)'),
    'path' => $path . '/ds_layouts/stacked_2col',
    'regions' => array(
      'header' => t('Header'),
      'main' => t('Main Column'),
      'aside' => t('Aside Column'),
      'footer' => t('Footer'),
    ),
  );
}