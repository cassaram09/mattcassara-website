<?php get_header(); ?>

	<main role="main" class='main'>

		<section>

		<?php if (have_posts()): ?>

			<?php while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(); // Fullsize image for the single post ?>
						</a>
					<?php endif; ?>

					<h1 class='post-title'>
						<a  href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h1>

					<span class="date"><?php the_time('F j, Y'); ?></span>

					<div class='border'></div>
					
					<?php the_content(); ?>

					<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>');  ?>

					<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); ?></p>

					<?php edit_post_link(); ?>

					<?php comments_template(); ?>

				</article>

			<?php endwhile; ?>

		<?php else: ?>

			<article>
				<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
			</article>

		<?php endif; ?>

		</section>

	</main>

<?php get_footer(); ?>
