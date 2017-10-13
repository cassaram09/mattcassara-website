<?php get_header(); ?>

	<main role="main" class='main'>

		<section class='blog'>

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('_inc/loop'); ?>

			<?php get_template_part('_inc/pagination'); ?>

		</section>

	</main>

<?php get_footer(); ?>
