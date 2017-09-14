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

	</head>

	<body <?php body_class(); ?>>

    <div class='menu-overlay'>

        <?php html5blank_nav(); ?>
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
				</nav>

        

			</header>
