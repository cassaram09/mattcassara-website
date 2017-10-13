<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

	<head>

    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
  
		<meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">

		<?php wp_head(); ?>
   
	</head>

	<body <?php body_class(); ?>>

    <?php include '_inc/mobile-nav.php' ?>

		<div class='wrapper'>

      <?php include '_inc/navigation.php' ?>
