<div class="overlay">

  <!-- Overlay content -->
  <div class="overlay-content">
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
    
  </div>

</div>