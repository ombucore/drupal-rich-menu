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
?>
<div data-type="region" data-name="section" class="<?php print $classes ?>" id="<?php print $id ?>"<?php print $attributes ?>>
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
  <div class="container content" data-name="content" data-type="section" data-tiles-selector="<?php print $selector ?>">
    <?php print render($tiles); ?>
  </div>
  <div class="container footer">
    <div class="row">
      <div class="block col-xs-12 col-sm-12 col-md-12 col-lg-12">
      </div>
    </div>
  </div>
</div>
