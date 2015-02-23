<div class"in-place-scroll">
  <ul class="tabs outline-nav-tabs" data-tab role="tablist">
    <li class="tab-title active" role="presentational"><a href="#unit1-panel" role="tab" tabindex="0" aria-selected="true" controls="unit1-panel">Unit 1</a></li>
    <li class="tab-title" role="presentational"><a href="#unit-2-panel" role="tab" tabindex="1" aria-selected="true" controls="unit2-panel">Unit 2</a></li>
    <li class="tab-title" role="presentational"><a href="#unit-3-panel" role="tab" tabindex="2" aria-selected="true" controls="unit3-panel">Unit 3</a></li>
    <li class="tab-title" role="presentational"><a href="#unit-4-panel" role="tab" tabindex="3" aria-selected="true" controls="unit4-panel">Unit 4</a></li>
    <li class="tab-title" role="presentational"><a href="#unit-5-panel" role="tab" tabindex="4" aria-selected="true" controls="unit5-panel">Unit 5</a></li>
  </ul>
  <div class="tabs-content">
  <?php if ($content): ?>
    <?php print $content; ?>
  <?php endif; ?>
  </div>
</div> <!-- End In-place scroll -------------------------------------- -->
