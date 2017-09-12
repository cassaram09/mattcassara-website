<?php /* Template Name: Work Template */ get_header(); ?>

  <main role="main" class='main-col'>
    <!-- section -->
    <section>

      <h1><?php the_title(); ?></h1>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <!-- article -->
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php the_content(); ?>

        <br class="clear">

        <?php edit_post_link(); ?>

      </article>
      <!-- /article -->

    <?php endwhile; endif; ?>

    </section>
    <!-- /section -->
  </main>


<?php get_footer(); ?>
