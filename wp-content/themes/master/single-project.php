<?php get_header(); ?>

  <main role="main" class='main-col'>
  <!-- section -->
  <section>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <!-- article -->
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <!-- post thumbnail -->
      <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php the_post_thumbnail(); // Fullsize image for the single post ?>
        </a>
      <?php endif; ?>
      <!-- /post thumbnail -->

      <!-- post title -->
      <h1>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
      </h1>
      <!-- /post title -->

      <?php edit_post_link(); // Always handy to have Edit Post Links available ?>


    </article>
    <!-- /article -->

  <?php endwhile; endif;?>


  </section>
  <!-- /section -->
  </main>

<?php get_footer(); ?>
