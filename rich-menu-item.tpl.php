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
<div data-type="region" data-name="rich_menu" class="<?php print $classes ?>" id="<?php print $id ?>"<?php print $attributes ?>>
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
