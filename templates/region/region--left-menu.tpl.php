<?php
/**
 * @file
 * Default theme implementation to display a region.
 *
 * Available variables:
 * - $content: The content for this region, typically blocks.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the following:
 *   - region: The current template type, i.e., "theming hook".
 *   - region-[name]: The name of the region with underscores replaced with
 *     dashes. For example, the page_top region would have a region-page-top class.
 * - $region: The name of the region variable as defined in the theme's .info file.
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $is_admin: Flags true when the current user is an administrator.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 *
 * @see template_preprocess()
 * @see template_preprocess_region()
 * @see template_process()
 */
?>
<aside class="left-off-canvas-menu">
  <a role="button" class="left-off-canvas-toggle close"><div class="icon-close-white outline-nav-icon" data-grunticon-embed></div></a>
  <div class"in-place-scroll">
    <ul class="tabs outline-nav-tabs" data-tab role="tablist">
      <li class="tab-title active" role="presentational"><a href="#unit1-panel" role="tab" tabindex="0" aria-selected="true" controls="unit1-panel">Unit 1</a></li>
      <li class="tab-title" role="presentational"><a href="#unit-2-panel" role="tab" tabindex="1" aria-selected="true" controls="unit-2-panel">Unit 2</a></li>
      <li class="tab-title" role="presentational"><a href="#unit-3-panel" role="tab" tabindex="2" aria-selected="true" controls="unit-3-panel">Unit 3</a></li>
      <li class="tab-title" role="presentational"><a href="#unit-4-panel" role="tab" tabindex="3" aria-selected="true" controls="unit-4-panel">Unit 4</a></li>
      <li class="tab-title" role="presentational"><a href="#unit-5-panel" role="tab" tabindex="4" aria-selected="true" controls="unit-5-panel">Unit 5</a></li>
    </ul>
    <div class="tabs-content">
    <?php if ($content): ?>
      <?php print $content; ?>
    <?php endif; ?>
    </div>
  </div> <!-- End In-place scroll -------------------------------------- -->
</aside>
