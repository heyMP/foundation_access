<?php
  /**
   * CIS LMS-less template file
   *
   * @todo Add course slogan to button's link div.
   */
?>
<!-- Ecosystem Top Nav ---------------------------------------- -->
<div id="etb-course-nav" class="row full collapse">
  <div class="columns small-6 medium-4">
    <nav class="top-bar etb-nav etb-nav--center--parent" data-options="is_hover: false" data-topbar role="navigation">
     <section>
        <!-- Left Nav Section -->
        <ul class="left kill-margin">
          <li class="left">
            <a href="#" class="etb-nav_item_service_btn etb-icon apps-icon" data-reveal-id="apps-nav-modal">
              <div class="icon-apps-black etb-icons"></div>
              <span class="visible-for-large-up">Course</span>
            </a>
          </li>
          <li class="left">
            <a href="#" class="etb-nav_item_service_btn etb-icon user-icon" data-reveal-id="user-nav-modal">
              <div class="icon-user-black etb-icons"></div>
              <span class="visible-for-large-up">Account</span>
            </a>
          </li>
          <li class="left">
            <a href="#" class="etb-nav_item_service_btn etb-icon info-icon" data-reveal-id="info-nav-modal">
              <div class="icon-info-black etb-icons"></div>
              <span class="visible-for-large-up">Info</span>
            </a>
          </li>
          <li class="left">
            <a href="#" class="etb-nav_item_service_btn etb-icon help-icon" data-reveal-id="help-nav-modal">
              <div class="icon-help-black etb-icons"></div>
              <span class="visible-for-large-up">Help</span>
            </a>
          </li>
        </ul>
        <!-- Eco Nav Modals ---------------------------------------- -->
        <div id="apps-nav-modal" class="reveal-modal etb-nav-modal" data-reveal>
            <h1>Course</h1>
              <hr></hr>
              <h2>Services</h1>
              <a href="#" class=" etb-modal-icon content-outline-icon row">
                <div class="icon-content-outline-black etb-modal-icons round"></div>
                <span>Content Outline</span>
              </a>
              <?php foreach ($services as $service) : ?>
              <a href="<?php print $service['url']; ?>" class=" etb-modal-icon cis-icon row">
                <div class="icon-cis-black etb-modal-icons round"></div>
                <span><?php print $service['title']; ?></span>
              </a>
              <?php endforeach ?>
              <a href="#" class="etb-modal-icon calendar-icon row">
                <div class="icon-calendar-black etb-modal-icons round"></div>
                <span class="round">Calendar</span>
              </a>
              <a href="#" class="etb-modal-icon assignments-icon row">
                <div class="icon-assignments-black etb-modal-icons round"></div>
                <span class="round">Assignments</span>
              </a>
              <a href="#" class="etb-modal-icon grades-icon row">
                <div class="icon-grades-black etb-modal-icons round"></div>
                <span class="round">Grades</span>
              </a>
              <a href="#" class="etb-modal-icon people-icon row">
                <div class="icon-people-black etb-modal-icons round"></div>
                <span class="round">People</span>
              </a>
              <a href="#" class="etb-modal-icon bookmark-outline-icon row">
                <div class="icon-bookmark-outline-black etb-modal-icons round"></div>
                <span class="round">Bookmarks</span>
              </a>
              <hr></hr>
              <h2>Communicate</h2>
              <a href="#" class=" etb-modal-icon mail-icon row">
                <div class="icon-mail-black etb-modal-icons"></div>
                <span>Inbox</span>
              </a>
              <a href="#" class=" etb-modal-icon discussions-icon row">
                <div class="icon-discussions-black etb-modal-icons"></div>
                <span>Discussions</span>
              </a>
              <a href="#" class=" etb-modal-icon blog-icon row">
                <div class="icon-blog-black etb-modal-icons"></div>
                <span>Blog</span>
              </a>
              <hr></hr>
              <h2>Environments</h2>
              <a href="#" class=" etb-modal-icon studio-icon row">
                <div class="icon-studio-black etb-modal-icons"></div>
                <span>Studio</span>
              </a>
              <a href="#" class=" etb-modal-icon labs-icon row">
                <div class="icon-labs-black etb-modal-icons"></div>
                <span>Labs</span>
              </a>
              <a href="#" class=" etb-modal-icon collaboration-icon row">
                <div class="icon-collaboration-black etb-modal-icons"></div>
                <span>Peer Collaboration</span>
              </a>
            <a class="close-reveal-modal">&#215;</a>
         </div>
         <div id="user-nav-modal" class="reveal-modal etb-nav-modal" data-reveal>
          <!-- Center Search Section -->

            <h1>Account</h1>
              <hr class="pad-1"></hr>
              <a class="account-logout text-center" href="#">log out</a>
              <hr class="pad-1"></hr>
              <a href="#" class="modal-img-link row">
                <div class="left">
                  <img alt="placeholder image" src="http://placehold.it/100x100">
                </div>
                <span class="left">Michael Collins</span>
              </a>
              <hr></hr>
              <h2>Settings</h2>
              <a href="#" class="etb-modal-icon access-icon row">
                <div class="icon-access-black etb-modal-icons"></div>
                <span>Accessibility</span>
              </a>
            <a class="close-reveal-modal">&#215;</a>
         </div>
         <div id="info-nav-modal" class="reveal-modal etb-nav-modal" data-reveal>
          <!-- Center Search Section -->
            
            <h1>Info</h1>
              <hr></hr>
              <h2>Instructor</h2>
              <a href="#" class="modal-img-link row">
                <div class="left">
                  <img alt="placeholder image" src="http://placehold.it/100x100">
                </div>
                <span class="left">Professor Snape</span>
              </a>
              <hr></hr>
              <h2>Syllabus</h2>
                <ul>
                  <li><a href="#">Welcome</a></li>
                  <li><a href="#">Introduction</a></li>
                  <li><a href="#">Orientation</a></li>
                  <li><a href="#">Resources</a></li>
                  <li><a href="#">Legal/Privacy</a></li>
                </ul>
            <a class="close-reveal-modal">&#215;</a>
         </div>
         <div id="help-nav-modal" class="reveal-modal etb-nav-modal" data-reveal>
          <!-- Center Search Section -->
            
            <h1>Help</h1>
              <hr></hr>
              <h2 class"etb-nav-section-label">Contact</h2>
              <a href="#" class="etb-modal-icon support-icon row">
                <div class="icon-support-black etb-modal-icons"></div>
                <span>Technical support</span>
              </a>
              <a href="#" class="etb-modal-icon teacher-icon row">
                <div class="icon-teacher-black etb-modal-icons"></div>
                <span>Instructor</span>
              </a>
              <hr></hr>
              <h2 class"etb-nav-section-label">Using ELMS Learning Network</h2>
              <a href="#" class="etb-modal-icon tour-icon row">
                <div class="icon-tour-black etb-modal-icons"></div>
                <span>Take a tour</span>
              </a>
            <a class="close-reveal-modal">&#215;</a>
         </div>
        </section>
      </nav>
    </div>
    <div class="hide-for-small-only medium-4 columns">
      <nav class="has-form top-bar etb-nav" data-options="is_hover: false" data-topbar role="navigation">
       <section>
          <!-- Center Search Section -->
          <form class="etb-nav_item_search">
            <input class="etb-nav_item_search_input" type="search" placeholder="Search..."/>
            <!-- <button class="etb-nav_item_search_btn" type="submit">Search</button> -->
          </form>
        </section>
      </nav>
    </div>
    <div class="etb-title hide-for-small-only medium-4 columns">
      <nav class="top-bar etb-nav" data-options="is_hover: false" data-topbar role="navigation">
       <section class="top-bar-section">
          <ul class="right">
            <li class="has-dropdown">
              <a href="#"><span class="course-title"><?php print $slogan; ?></span><span class="course-abrv"><?php print $site_name; ?></span></a>
              <ul class="dropdown">
                <li><a href="#">Course program information</a></li>
                <li class="active"><a href="#">Course program information</a></li>
              </ul>
            </li>
          </ul>
        </section>
      </nav>
    </div>
  </div>
