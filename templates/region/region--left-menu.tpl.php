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
    <li class="tab-title" role="presentational"><a href="#unit-5-panel" role="tab" tabindex="4" aria-selected="true" controls="unit-5-panel">Unit 5</a></li>
  </ul>

  <div class="tabs-content">
    <section role="tabpanel" aria-hidden="false" class="content active" id="unit1-panel">
      <ul class="off-canvas-list content-outline-navigation active">
      <!-- <li><label>Foundation</label></li> -->
      <h2>Lesson 1</h2>
      <h3>Let's do science!</h3>
      <li><a href="#"><div class="icon-about-white outline-nav-icon" data-grunticon-embed></div><span class="outline-nav-text">About</span></a></li>
      <li class="has-submenu"><a href="#"><div class="icon-content-white outline-nav-icon" data-grunticon-embed></div><span class="outline-nav-text">Content</span></a>
          <ul class="left-submenu level-1-sub">
              <h2>Lesson 4</h2>
              <h3>Let's do Science!</h3>
              <li class="back"><a href="#">Back to all Lessons</a></li>
              <li><label>Content</label></li>
              <li><a href="#">Link 1</a></li>
              <li class="has-submenu"><a href="#">Link 2 w/ submenu</a>
                  <ul class="left-submenu">
                      <li class="back"><a href="#">Back</a></li>
                      <li><label>Level 2</label></li>
                      <li><a href="#">...</a></li>
                  </ul>
              </li>
              <li><a href="#">...</a></li>
          </ul>
      </li>
      <li><a href="#"><div class="icon-assignment-white outline-nav-icon" data-grunticon-embed></div>Assignment 5</a></li>
      <li><a href="#"><div class="icon-quiz-white outline-nav-icon" data-grunticon-embed></div>Quiz 7</a></li>
      <li><a href="#"><div class="icon-discuss-white outline-nav-icon" data-grunticon-embed></div>Lesson Discussion</a></li>
    </ul>
    <ul class="off-canvas-list content-outline-navigation">
    <!-- <li><label>Foundation</label></li> -->
    <h2>Lesson 2</h2>
    <h3>What is science?</h3>
    <li><a href="#"><div class="icon-about-white outline-nav-icon" data-grunticon-embed></div><span class="outline-nav-text">About</span></a></li>
    <li class="has-submenu"><a href="#"><div class="icon-content-white outline-nav-icon" data-grunticon-embed></div><span class="outline-nav-text">Content</span></a>
        <ul class="left-submenu level-1-sub">
            <h2>Lesson 4</h2>
            <h3>Let's do Science!</h3>
            <li class="back"><a href="#">Back to all Lessons</a></li>
            <li><label>Content</label></li>
            <li><a href="#">Link 1</a></li>
            <li class="has-submenu"><a href="#">Link 2 w/ submenu</a>
                <ul class="left-submenu">
                    <li class="back"><a href="#">Back</a></li>
                    <li><label>Level 2</label></li>
                    <li><a href="#">...</a></li>
                </ul>
            </li>
            <li><a href="#">...</a></li>
        </ul>
    </li>
    <li><a href="#"><div class="icon-assignment-white outline-nav-icon" data-grunticon-embed></div>Assignment 5</a></li>
    <li><a href="#"><div class="icon-quiz-white outline-nav-icon" data-grunticon-embed></div>Quiz 7</a></li>
    <li><a href="#"><div class="icon-discuss-white outline-nav-icon" data-grunticon-embed></div>Lesson Discussion</a></li>
    </ul>
    <ul class="off-canvas-list content-outline-navigation">
      <!-- <li><label>Foundation</label></li> -->
      <h2>Lesson 3</h2>
      <h3>Where does science come from?</h3>
      <li><a href="#"><div class="icon-about-white outline-nav-icon" data-grunticon-embed></div><span class="outline-nav-text">About</span></a></li>
      <li class="has-submenu"><a href="#"><div class="icon-content-white outline-nav-icon" data-grunticon-embed></div><span class="outline-nav-text">Content</span></a>
          <ul class="left-submenu level-1-sub">
              <h2>Lesson 4</h2>
              <h3>Let's do Science!</h3>
              <li class="back"><a href="#">Back to all Lessons</a></li>
              <li><label>Content</label></li>
              <li><a href="#">Link 1</a></li>
              <li class="has-submenu"><a href="#">Link 2 w/ submenu</a>
                  <ul class="left-submenu">
                      <li class="back"><a href="#">Back</a></li>
                      <li><label>Level 2</label></li>
                      <li><a href="#">...</a></li>
                  </ul>
              </li>
              <li><a href="#">...</a></li>
          </ul>
      </li>
      <li><a href="#"><div class="icon-assignment-white outline-nav-icon" data-grunticon-embed></div>Assignment 5</a></li>
      <li><a href="#"><div class="icon-quiz-white outline-nav-icon" data-grunticon-embed></div>Quiz 7</a></li>
      <li><a href="#"><div class="icon-discuss-white outline-nav-icon" data-grunticon-embed></div>Lesson Discussion</a></li>
    </ul>

    </section>
    <!-- ---------------------------------------- -->
    <section role="tabpanel" aria-hidden="true" class="content" id="unit-2-panel">
      <ul class="off-canvas-list content-outline-navigation">
      <!-- <li><label>Foundation</label></li> -->
      <h2>Lesson 4</h2>
      <h3>Making sceince</h3>
      <li><a href="#"><div class="icon-about-white outline-nav-icon" data-grunticon-embed></div><span class="outline-nav-text">About</span></a></li>
      <li class="has-submenu"><a href="#"><div class="icon-content-white outline-nav-icon" data-grunticon-embed></div><span class="outline-nav-text">Content</span></a>
          <ul class="left-submenu level-1-sub">
              <h2>Lesson 4</h2>
              <h3>Let's do Science!</h3>
              <li class="back"><a href="#">Back to all Lessons</a></li>
              <li><label>Content</label></li>
              <li><a href="#">Link 1</a></li>
              <li class="has-submenu"><a href="#">Link 2 w/ submenu</a>
                  <ul class="left-submenu">
                      <li class="back"><a href="#">Back</a></li>
                      <li><label>Level 2</label></li>
                      <li><a href="#">...</a></li>
                  </ul>
              </li>
              <li><a href="#">...</a></li>
          </ul>
      </li>
      <li><a href="#"><div class="icon-assignment-white outline-nav-icon" data-grunticon-embed></div>Assignment 5</a></li>
      <li><a href="#"><div class="icon-quiz-white outline-nav-icon" data-grunticon-embed></div>Quiz 7</a></li>
      <li><a href="#"><div class="icon-discuss-white outline-nav-icon" data-grunticon-embed></div>Lesson Discussion</a></li>
    </ul>
    <ul class="off-canvas-list content-outline-navigation">
    <!-- <li><label>Foundation</label></li> -->
    <h2>Lesson 5</h2>
    <h3>Advanced science</h3>
    <li><a href="#"><div class="icon-about-white outline-nav-icon" data-grunticon-embed></div><span class="outline-nav-text">About</span></a></li>
    <li class="has-submenu"><a href="#"><div class="icon-content-white outline-nav-icon" data-grunticon-embed></div><span class="outline-nav-text">Content</span></a>
        <ul class="left-submenu level-1-sub">
            <h2>Lesson 5</h2>
            <h3>Let's do Science!</h3>
            <li class="back"><a href="#">Back to all Lessons</a></li>
            <li><label>Content</label></li>
            <li><a href="#">Link 1</a></li>
            <li class="has-submenu"><a href="#">Link 2 w/ submenu</a>
                <ul class="left-submenu">
                    <li class="back"><a href="#">Back</a></li>
                    <li><label>Level 2</label></li>
                    <li><a href="#">...</a></li>
                </ul>
            </li>
            <li><a href="#">...</a></li>
        </ul>
    </li>
    <li><a href="#"><div class="icon-assignment-white outline-nav-icon" data-grunticon-embed></div>Assignment 5</a></li>
    <li><a href="#"><div class="icon-quiz-white outline-nav-icon" data-grunticon-embed></div>Quiz 7</a></li>
    <li><a href="#"><div class="icon-discuss-white outline-nav-icon" data-grunticon-embed></div>Lesson Discussion</a></li>
    </ul>
    <ul class="off-canvas-list content-outline-navigation">
      <!-- <li><label>Foundation</label></li> -->
      <h2>Lesson 6</h2>
      <h3>Ultra, mega hard sceince</h3>
      <li><a href="#"><div class="icon-about-white outline-nav-icon" data-grunticon-embed></div><span class="outline-nav-text">About</span></a></li>
      <li class="has-submenu"><a href="#"><div class="icon-content-white outline-nav-icon" data-grunticon-embed></div><span class="outline-nav-text">Content</span></a>
          <ul class="left-submenu level-1-sub">
              <h2>Lesson 4</h2>
              <h3>Let's do Science!</h3>
              <li class="back"><a href="#">Back to all Lessons</a></li>
              <li><label>Content</label></li>
              <li><a href="#">Link 1</a></li>
              <li class="has-submenu"><a href="#">Link 2 w/ submenu</a>
                  <ul class="left-submenu">
                      <li class="back"><a href="#">Back</a></li>
                      <li><label>Level 2</label></li>
                      <li><a href="#">...</a></li>
                  </ul>
              </li>
              <li><a href="#">...</a></li>
          </ul>
      </li>
      <li><a href="#"><div class="icon-assignment-white outline-nav-icon" data-grunticon-embed></div>Assignment 5</a></li>
      <li><a href="#"><div class="icon-quiz-white outline-nav-icon" data-grunticon-embed></div>Quiz 7</a></li>
      <li><a href="#"><div class="icon-discuss-white outline-nav-icon" data-grunticon-embed></div>Lesson Discussion</a></li>
    </ul>
    </section>
    <!-- ---------------------------------------- -->
    <section role="tabpanel" aria-hidden="true" class="content" id="unit-3-panel">
      <ul class="off-canvas-list content-outline-navigation">
      <!-- <li><label>Foundation</label></li> -->
      <h2>Lesson 7</h2>
      <h3>Science on the other side of the planet</h3>
      <li><a href="#"><div class="icon-about-white outline-nav-icon" data-grunticon-embed></div><span class="outline-nav-text">About</span></a></li>
      <li class="has-submenu"><a href="#"><div class="icon-content-white outline-nav-icon" data-grunticon-embed></div><span class="outline-nav-text">Content</span></a>
          <ul class="left-submenu level-1-sub">
              <h2>Lesson 4</h2>
              <h3>Let's do Science!</h3>
              <li class="back"><a href="#">Back to all Lessons</a></li>
              <li><label>Content</label></li>
              <li><a href="#">Link 1</a></li>
              <li class="has-submenu"><a href="#">Link 2 w/ submenu</a>
                  <ul class="left-submenu">
                      <li class="back"><a href="#">Back</a></li>
                      <li><label>Level 2</label></li>
                      <li><a href="#">...</a></li>
                  </ul>
              </li>
              <li><a href="#">...</a></li>
          </ul>
      </li>
      <li><a href="#"><div class="icon-assignment-white outline-nav-icon" data-grunticon-embed></div>Assignment 5</a></li>
      <li><a href="#"><div class="icon-quiz-white outline-nav-icon" data-grunticon-embed></div>Quiz 7</a></li>
      <li><a href="#"><div class="icon-discuss-white outline-nav-icon" data-grunticon-embed></div>Lesson Discussion</a></li>
    </ul>
    <ul class="off-canvas-list content-outline-navigation">
      <!-- <li><label>Foundation</label></li> -->
      <h2>Lesson 8</h2>
      <h3>Science in the mist</h3>
      <li><a href="#"><div class="icon-about-white outline-nav-icon" data-grunticon-embed></div><span class="outline-nav-text">About</span></a></li>
      <li class="has-submenu"><a href="#"><div class="icon-content-white outline-nav-icon" data-grunticon-embed></div><span class="outline-nav-text">Content</span></a>
          <ul class="left-submenu level-1-sub">
              <h2>Lesson 4</h2>
              <h3>Let's do Science!</h3>
              <li class="back"><a href="#">Back to all Lessons</a></li>
              <li><label>Content</label></li>
              <li><a href="#">Link 1</a></li>
              <li class="has-submenu"><a href="#">Link 2 w/ submenu</a>
                  <ul class="left-submenu">
                      <li class="back"><a href="#">Back</a></li>
                      <li><label>Level 2</label></li>
                      <li><a href="#">...</a></li>
                  </ul>
              </li>
              <li><a href="#">...</a></li>
          </ul>
      </li>
      <li><a href="#"><div class="icon-assignment-white outline-nav-icon" data-grunticon-embed></div>Assignment 5</a></li>
      <li><a href="#"><div class="icon-quiz-white outline-nav-icon" data-grunticon-embed></div>Quiz 7</a></li>
      <li><a href="#"><div class="icon-discuss-white outline-nav-icon" data-grunticon-embed></div>Lesson Discussion</a></li>
    </ul>
    <ul class="off-canvas-list content-outline-navigation">
      <!-- <li><label>Foundation</label></li> -->
      <h2>Lesson 9</h2>
      <h3>Being one with science</h3>
      <li><a href="#"><div class="icon-about-white outline-nav-icon" data-grunticon-embed></div><span class="outline-nav-text">About</span></a></li>
      <li class="has-submenu"><a href="#"><div class="icon-content-white outline-nav-icon" data-grunticon-embed></div><span class="outline-nav-text">Content</span></a>
          <ul class="left-submenu level-1-sub">
              <h2>Lesson 4</h2>
              <h3>Let's do Science!</h3>
              <li class="back"><a href="#">Back to all Lessons</a></li>
              <li><label>Content</label></li>
              <li><a href="#">Link 1</a></li>
              <li class="has-submenu"><a href="#">Link 2 w/ submenu</a>
                  <ul class="left-submenu">
                      <li class="back"><a href="#">Back</a></li>
                      <li><label>Level 2</label></li>
                      <li><a href="#">...</a></li>
                  </ul>
              </li>
              <li><a href="#">...</a></li>
          </ul>
      </li>
      <li><a href="#"><div class="icon-assignment-white outline-nav-icon" data-grunticon-embed></div>Assignment 5</a></li>
      <li><a href="#"><div class="icon-quiz-white outline-nav-icon" data-grunticon-embed></div>Quiz 7</a></li>
      <li><a href="#"><div class="icon-discuss-white outline-nav-icon" data-grunticon-embed></div>Lesson Discussion</a></li>
    </ul>
    </section>
    <section role="tabpanel" aria-hidden="true" class="content" id="unit-5-panel">
      <ul class="off-canvas-list content-outline-navigation">
      <!-- <li><label>Foundation</label></li> -->
      <h2>Lesson 13</h2>
      <h3>Science and the environment</h3>
      <li><a href="#"><div class="icon-about-white outline-nav-icon" data-grunticon-embed></div><span class="outline-nav-text">About</span></a></li>
      <li class="has-submenu"><a href="#"><div class="icon-content-white outline-nav-icon" data-grunticon-embed></div><span class="outline-nav-text">Content</span></a>
          <ul class="left-submenu level-1-sub">
              <h2>Lesson 4</h2>
              <h3>Let's do Science!</h3>
              <li class="back"><a href="#">Back to all Lessons</a></li>
              <li><label>Content</label></li>
              <li><a href="#">Link 1</a></li>
              <li class="has-submenu"><a href="#">Link 2 w/ submenu</a>
                  <ul class="left-submenu">
                      <li class="back"><a href="#">Back</a></li>
                      <li><label>Level 2</label></li>
                      <li><a href="#">...</a></li>
                  </ul>
              </li>
              <li><a href="#">...</a></li>
          </ul>
      </li>
      <li><a href="#"><div class="icon-assignment-white outline-nav-icon" data-grunticon-embed></div>Assignment 5</a></li>
      <li><a href="#"><div class="icon-quiz-white outline-nav-icon" data-grunticon-embed></div>Quiz 7</a></li>
      <li><a href="#"><div class="icon-discuss-white outline-nav-icon" data-grunticon-embed></div>Lesson Discussion</a></li>
    </ul>
    <ul class="off-canvas-list content-outline-navigation">
      <!-- <li><label>Foundation</label></li> -->
      <h2>Lesson 14</h2>
      <h3>Fast science</h3>
      <li><a href="#"><div class="icon-about-white outline-nav-icon" data-grunticon-embed></div><span class="outline-nav-text">About</span></a></li>
      <li class="has-submenu"><a href="#"><div class="icon-content-white outline-nav-icon" data-grunticon-embed></div><span class="outline-nav-text">Content</span></a>
          <ul class="left-submenu level-1-sub">
              <h2>Lesson 4</h2>
              <h3>Let's do Science!</h3>
              <li class="back"><a href="#">Back to all Lessons</a></li>
              <li><label>Content</label></li>
              <li><a href="#">Link 1</a></li>
              <li class="has-submenu"><a href="#">Link 2 w/ submenu</a>
                  <ul class="left-submenu">
                      <li class="back"><a href="#">Back</a></li>
                      <li><label>Level 2</label></li>
                      <li><a href="#">...</a></li>
                  </ul>
              </li>
              <li><a href="#">...</a></li>
          </ul>
      </li>
      <li><a href="#"><div class="icon-assignment-white outline-nav-icon" data-grunticon-embed></div>Assignment 5</a></li>
      <li><a href="#"><div class="icon-quiz-white outline-nav-icon" data-grunticon-embed></div>Quiz 7</a></li>
      <li><a href="#"><div class="icon-discuss-white outline-nav-icon" data-grunticon-embed></div>Lesson Discussion</a></li>
    </ul>
    <ul class="off-canvas-list content-outline-navigation">
      <!-- <li><label>Foundation</label></li> -->
      <h2>Lesson 15</h2>
      <h3>12 things you never knew about sceince</h3>
      <li><a href="#"><div class="icon-about-white outline-nav-icon" data-grunticon-embed></div><span class="outline-nav-text">About</span></a></li>
      <li class="has-submenu"><a href="#"><div class="icon-content-white outline-nav-icon" data-grunticon-embed></div><span class="outline-nav-text">Content</span></a>
          <ul class="left-submenu level-1-sub">
              <h2>Lesson 4</h2>
              <h3>Let's do Science!</h3>
              <li class="back"><a href="#">Back to all Lessons</a></li>
              <li><label>Content</label></li>
              <li><a href="#">Link 1</a></li>
              <li class="has-submenu"><a href="#">Link 2 w/ submenu</a>
                  <ul class="left-submenu">
                      <li class="back"><a href="#">Back</a></li>
                      <li><label>Level 2</label></li>
                      <li><a href="#">...</a></li>
                  </ul>
              </li>
              <li><a href="#">...</a></li>
          </ul>
      </li>
      <li><a href="#"><div class="icon-assignment-white outline-nav-icon" data-grunticon-embed></div>Assignment 5</a></li>
      <li><a href="#"><div class="icon-quiz-white outline-nav-icon" data-grunticon-embed></div>Quiz 7</a></li>
      <li><a href="#"><div class="icon-discuss-white outline-nav-icon" data-grunticon-embed></div>Lesson Discussion</a></li>
    </ul>
    </section>
  </div>
  </div> <!-- End In-place scroll -------------------------------------- -->
  <?php if ($content): ?>
    <?php print $content; ?>
  <?php endif; ?>
</aside>
