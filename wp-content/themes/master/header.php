<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

	<head>
  
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

		<script>
      // conditionizr.com
      // configure environment tests
      conditionizr.config({
          assets: '<?php echo get_template_directory_uri(); ?>',
          tests: {}
      });
    </script>

    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
      crossorigin="anonymous"></script>

       <?php include("img/dev-sprite.svg"); ?>
      <?php include_once("img/generic-sprite.svg"); ?>

	</head>

	<body <?php body_class(); ?>>

    <div class='menu-overlay'>
      <?php html5blank_nav(); ?>

      <a href='#'>
        <svg class='svg-icon' id="si-dev-github_badge">
          <use xlink:href="#si-dev-github_badge"></use>
        </svg>
      </a>

      <svg class='svg-icon' id="si-evil-envelope">
        <use xlink:href="#si-evil-envelope"></use>
      </svg>

      <svg class='svg-icon' id="si-evil-sc-linkedin">
        <use xlink:href="#si-evil-sc-linkedin"></use>
      </svg>
    </div>

    <nav id='mobile-nav' class="mobile-nav" role="navigation">
      <div id='toggleNav'>
        <span class='menu-line' id='topLine'></span>
        <span class='menu-line' id='middleLine'></span>
        <span class='menu-line' id='bottomLine'></span>
      </div>
    </nav>

		<!-- wrapper -->
		<div class='wrapper'>

			<!-- header -->
			<header id='header' class="navigation" role="banner">

        <h1 id='title'>Matt Cassara</h1>

        <h2 class='subtitle'>Full Stack Developer</h2>

				<!-- nav -->
				<nav class="nav" role="navigation">
					<?php html5blank_nav(); ?>

          <div class='social-links'>

            <a href='#'>
              <svg class='svg-icon' id="si-dev-github_badge">
                <use xlink:href="#si-dev-github_badge"></use>
              </svg>
            </a>

            <a href='#'>
              <svg class='svg-icon' id="si-evil-envelope">
                <use xlink:href="#si-evil-envelope"></use>
              </svg>
            </a>

            <a href='#'>
              <svg class='svg-icon' id="si-evil-sc-linkedin">
                <use xlink:href="#si-evil-sc-linkedin"></use>
              </svg>
            </a>
          </div>
          
				</nav>



        

			</header>
