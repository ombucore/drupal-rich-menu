<?php

/**
 *
 * @file
 * Default theme implementation to display a rich menu.
 *
 * Available variables:
 * - $items: Rich menu items
 *
 */
?>

<div data-type="region-container" data-name="rich-menu">
  <div class="container">
    <div class="row">
      <a tabindex="-1" data-type="toggle" data-name="toggle-mobile" class="toggle-mobile-menu menu-open" href="#mobile-menu"><span><?php print t('Menu') ?></span></a>
      <div role="navigation" data-type="region" data-name="dropdown-menu">
        <ul class="rich-menu">
          <?php foreach ($items as $item): ?>
            <li
            <?php if (!empty($item['item']['link']['options']['rich_menu']['disable_rich_menu'])): ?>
              <?php print " class='disable-rich-menu'"; ?>
            <?php endif; ?>
            >
              <a
              class="panel-link <?php print drupal_html_class($item['item']['link']['link_title']); ?>"
              data-path="<?php print drupal_html_class($item['item']['link']['link_title'])?>"
              ><?php print t($item['item']['link']['link_title']);?></a>
              <?php print render($item['layout']); ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</div>
