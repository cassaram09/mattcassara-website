        <header id='header' class="header" role="banner">

          <a class='logo' href='<?php echo get_site_url(); ?>'>
            <span>MWC</span>
          </a>

          <h2 class='subtitle'>Full Stack Developer</h2>

          <!-- mobile nav / shows only on small screens-->
          <nav id='mobile-nav' class="mobile-nav" role="navigation">
            <div id='toggleNav'>
              <span class='menu-line' id='topLine'></span>
              <span class='menu-line' id='middleLine'></span>
              <span class='menu-line' id='bottomLine'></span>
            </div>
          </nav>

          <!-- dekstop nav -->
          <nav class="nav" role="navigation">
            <?php html5blank_nav(); ?>

            <div class='social-links'>

              <a href='<?php echo the_field('github_url', 'option'); ?>'>
                <svg class='svg-icon' id="si-dev-github_badge">
                  <use xlink:href="#si-dev-github_badge"></use>
                </svg>
              </a>

              <a href="mailto:<?php echo the_field('email_url', 'option'); ?>">
                <svg class='svg-icon' id="si-evil-envelope">
                  <use xlink:href="#si-evil-envelope"></use>
                </svg>
              </a>

              <a href='<?php echo the_field('linkedin_url', 'option'); ?>'>
                <svg class='svg-icon' id="si-evil-sc-linkedin">
                  <use xlink:href="#si-evil-sc-linkedin"></use>
                </svg>
              </a>
            </div>

          </nav>
          
        </header>