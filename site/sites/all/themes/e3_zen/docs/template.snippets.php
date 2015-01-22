<?php

/**
 * @file
 *   Test code snippets for things that could 
 *   be usefull in the future.
 */

/**
 * Example preprocess function. For more details
 * see http://drupal.org/node/223430. This specific
 * example overrides the html.tpl.php template.
 */
function e3_zen_preprocess_html(&$variables) {
  // Example of adding an external CSS file.
  // Note the use of https://. This will make fonts available
  // for sites using SSL Certificates.
  drupal_add_css('https://fonts.googleapis.com/css?family=Great+Vibes', array(
    'type' => 'external',
    'group' => CSS_THEME,
  ));

  // Example of adding a theme specific javascript file.
  drupal_add_js(drupa_get_path('theme', 'e3_zen') . '/js/myscript.js', array(
    'group' => JS_THEME,
  ));
}

/**
 * Implements hook_css_alter().
 */
function e3_zen_css_alter(&$css) {
  foreach ($css as $file => $data) {
    $path = explode('/', $file);

    // If the file points to a DS layout folder, we remove it.
    if (in_array('ds', $path) && in_array('layouts', $path)) {
      unset($css[$file]);
    }
  }
}

/**
 * Implements hook_js_alter()
 */
function e3_zen_js_alter(&$js) {
  // Set some JS to remain in the header
  $header_files = array();

  // Move all the site javascripts to the footer, except
  // for those in the $header_files array.
  foreach ($js as $file => &$data) {
    if ($data['scope'] == 'header' && !in_array($file, $header_files)) {
      $data['scope'] = 'footer';
    }
  }
}

/**
 * Overrides theme_ds_field_minimal().
 *
 * This is an example of overrideing a DS field.
 * In this case this would override all DS fields
 * that use the Minimal layout.
 *
 * You can override specific fields with the convention
 * theme_field__minimal_your_field_name($variables).
 *
 * Changes this functions makes is:
 * - Readds default Drupal classes to wrapper which
 *   also allows for preprocessing classes again.
 * - Allows for the field wrapper element to be 
 *   preprocessed if desired. If not it defaults
 *   to <div>. This gives some of the benefits 
 *   of the Expert layout mode, without all the
 *   complexity and overhead.
 */
function e3_zen_field__minimal($variables) {
  $output = '';

  $config = $variables['ds-config'];
  $wrapper = isset($variables['wrapper']) ? $variables['wrapper'] : 'div';

  // Add a simple wrapper.
  $output .= '<' . $wrapper .' class="' . $variables['classes'] . '">';

  // Render the label.
  if (!$variables['label_hidden']) {
    $output .= '<div' . $variables['title_attributes'] . '>' . $variables['label'];
    if (!isset($config['lb-col'])) {
      $output .= ':&nbsp;';
    }
    $output .= '</div>';
  }

  // Render the items.
  foreach ($variables['items'] as $delta => $item) {
    $output .= drupal_render($item);
  }
  $output .= '</' . $wrapper . '>';

  return $output;
}