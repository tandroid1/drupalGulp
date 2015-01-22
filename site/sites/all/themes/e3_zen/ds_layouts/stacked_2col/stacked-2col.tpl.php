<<?php print $layout_wrapper; print $layout_attributes; ?> class="ds-stacked-2col <?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <?php if ($header): ?>
    <<?php print $header_wrapper ?> class="group-header<?php print $header_classes; ?>">
      <?php print $header; ?>
    </<?php print $header_wrapper ?>>
  <?php endif; ?>

  <?php if ($main): ?>
    <<?php print $main_wrapper ?> class="group-main<?php print $main_classes; ?>">
      <?php print $main; ?>
    </<?php print $main_wrapper ?>>
  <?php endif; ?>

  <?php if ($aside): ?>
    <<?php print $aside_wrapper ?> class="group-aside<?php print $aside_classes; ?>">
      <?php print $aside; ?>
    </<?php print $aside_wrapper ?>>
  <?php endif; ?>

  <?php if ($footer): ?>
    <<?php print $footer_wrapper ?> class="group-footer<?php print $footer_classes; ?>">
      <?php print $footer; ?>
    </<?php print $footer_wrapper ?>>
  <?php endif; ?>

</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>