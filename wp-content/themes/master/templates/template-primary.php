<?php /* Template Name: Primary Template */ ?>

<?php  get_header(); ?>

	<main role="main" class='main'>

		<section>

			<h1><?php the_title(); ?></h1>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php the_content(); ?>

					<br class="clear">

					<?php edit_post_link(); ?>

				</article>

			<?php endwhile; endif; ?>

		</section>

	</main>

<?php get_footer(); ?>