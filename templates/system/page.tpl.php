<?php
  krumo($variables);
?>
<!-- ---------------------------------------- -->
    <div id="etb-tool-nav" class="off-canvas-wrap" data-offcanvas>
      <div class="inner-wrap">
        <nav class="tab-bar etb-tool">
          <section class="left">
            <a class="left-off-canvas-toggle menu-icon" ><span>Outline</span></a>
          </section>

          <section class="middle tab-bar-section">
            <!-- <h1 class="title">Tools will go here soon</h1> -->
          </section>

          <section class="right-small">
            <a href="#" class="etb-nav_item_service_btn etb-modal-icon access-icon" data-dropdown="accessibility-drop" aria-controls="drop2" aria-expanded="false">
                <div class="icon-access-white etb-modal-icons"></div>
                <!-- <span>Accessibilty</span> -->
              </a>

            <div id="accessibility-drop" data-dropdown-content class="f-dropdown content" aria-hidden="true" tabindex="-1">
             <div class="switch small radius">
              <input id="exampleCheckboxSwitch" type="checkbox">
              <label for="exampleCheckboxSwitch"></label>
            </div>
            </div>

          </section>
        </nav>

        <aside class="left-off-canvas-menu">
          <a role="button" class="left-off-canvas-toggle close"><div class="icon-close-white outline-nav-icon" data-grunticon-embed></div></a>

<!-- ---------------------------------------- -->
          <div class"in-place-scroll">
          <ul class="tabs outline-nav-tabs" data-tab role="tablist">
            <li class="tab-title active" role="presentational"><a href="#unit1-panel" role="tab" tabindex="0" aria-selected="true" controls="unit1-panel">Unit 1</a></li>
            <li class="tab-title" role="presentational"><a href="#unit-2-panel" role="tab" tabindex="1" aria-selected="true" controls="unit-2-panel">Unit 2</a></li>
            <li class="tab-title" role="presentational"><a href="#unit-3-panel" role="tab" tabindex="2" aria-selected="true" controls="unit-3-panel">Unit 3</a></li>
            <li class="tab-title" role="presentational"><a href="#unit-4-panel" role="tab" tabindex="3" aria-selected="true" controls="unit-4-panel">Unit 4</a></li>
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
            <section role="tabpanel" aria-hidden="true" class="content" id="unit-4-panel">
              <ul class="off-canvas-list content-outline-navigation">
              <!-- <li><label>Foundation</label></li> -->
              <h2>Lesson 10</h2>
              <h3>A long time ago, in science</h3>
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
              <h2>Lesson 11</h2>
              <h3>Ready, set, science!</h3>
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
              <h2>Lesson 12</h2>
              <h3>A new science</h3>
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
        </aside>

        <section class="main-section etb-book">
          <?php if (!empty($messages)): ?>
            <div class="row">
              <?php print $messages; ?>
            </div>
          <?php endif; ?>

          <div class="row">
            <div class="content-element-region small-12 medium-12 large-12 columns">
              <div class="row">
                <div class="small-12 medium-12 large-push-1 large-10 columns" role="content">
                  <?php if (!empty($page['highlighted'])): ?>
                    <div class="highlight panel callout">
                      <?php print render($page['highlighted']); ?>
                    </div>
                  <?php endif; ?>

                  <a id="main-content"></a>

                  <?php if ($breadcrumb): print $breadcrumb; endif; ?>

                  <?php if ($title): ?>
                    <?php print render($title_prefix); ?>
                      <h1 id="page-title" class="title"><?php print $title; ?>
                        <br><small>This is my course. It's awesome.</small>
                      </h1>
                      <hr>
                    <?php print render($title_suffix); ?>
                  <?php endif; ?>

                  <?php if (!empty($tabs)): ?>
                    <?php print render($tabs); ?>
                    <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
                  <?php endif; ?>

                  <?php if ($action_links): ?>
                    <ul class="action-links">
                      <?php print render($action_links); ?>
                    </ul>
                  <?php endif; ?>

                  <?php print render($page['content']); ?>
                </div>
              </div>
            </div>
          </div>

          <footer class="row">
            <div class="large-12 columns">
              <hr/>
              <div class="row">
                <div class="large-6 columns">
                  <p>© Copyright no one at all. Go to town.</p>
                </div>
                <div class="large-6 columns">
                  <ul class="inline-list right">
                    <li><a href="#">Link 1</a></li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                    <li><a href="#">Link 4</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </footer>

        </section>

      <a class="exit-off-canvas"></a>

      </div>
    </div>
