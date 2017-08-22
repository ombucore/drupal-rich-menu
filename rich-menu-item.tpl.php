<?php

/**
 *
 * @file
 * Default theme implementation to display a rich menu item.
 *
 * Available variables:
 * - $element: Title of section
 * - $tiles: render array of available tiles.
 *
 */
?>
<?php
if (!empty($section_title) && $title_visible) {
  $classes .= ' has-title';
}
if (!empty($col)) {
  if ($col == 1) {
    $classes .= ' new-rich-menu-option-column-1';
  }
  if ($col == 2) {
    $classes .= ' new-rich-menu-option-column-2';
  }
  if ($col == 3) {
    $classes .= ' new-rich-menu-option-column-3';
  }
}
else {
  $classes .= ' new-rich-menu-option-column-3';
}
?>
<div data-type="region" data-name="rich_menu" class="<?php print $classes ?>" id="<?php print $id ?>"<?php print $attributes ?>>
  <div class="container header">
    <div class="row">
      <div class="header block col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <?php if (!empty($section_title) && $title_visible): ?>
          <h2><?php print $section_title ?></h2>
        <?php endif; ?>
        <?php print render($title_suffix) ?>
      </div>
    </div>
  </div>
  <div class="container content" data-name="content" data-type="rich_menu" data-tiles-selector="<?php print $selector ?>">
    <?php print render($tiles); ?>
  </div>
  <div class="container footer">
    <div class="row">
      <div class="block col-xs-12 col-sm-12 col-md-12 col-lg-12">
      </div>
    </div>
  </div>
</div>
