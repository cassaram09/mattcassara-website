<?php get_header(); ?>

  <main role="main" class='main-col'>
    <!-- section -->
    <section class='single-project'>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <!-- article -->
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <!-- post thumbnail -->
        <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_post_thumbnail(); // Fullsize image for the single post ?>
          </a>
        <?php endif; ?>

        <?php 
          $featured_image = get_field('project_featured_image');
          $gallery = get_field('project_image_gallery');
          $size = 'full'; // (thumbnail, medium, large, full or custom size)
        ?>
        <div class='featured-image'>
          <img src="<?php echo $featured_image['url']; ?>" alt="<?php echo $featured_image['alt']; ?>" />
        </div>

        <!-- post title -->
        <div class='title'>
          <h1>
            <a href="<?php the_permalink(); ?>" title="<?php the_field('project_title'); ?>"><?php the_field('project_title'); ?></a>
          </h1>
        </div>

        <div class='date'>
          <p>
            <?php the_field('project_date'); ?>
          <p>
        </div>

        <div class='project-links'>
          <div class='button'>
            <a href='<?php echo the_field('project_github_link')?>'>View on Github</a>
          </div>

          <?php if ( get_field('project_read_more') ) : ?>
            <div class='button'>
              <a href='<?php the_field('project_read_more')?>'>Read More</a>
            </div>
          <?php endif; ?>
        </div>

        <div class='bar'></div>

        <div class='description'>
          <p>
            <?php echo the_field('project_description')?>
          </p>
        </div>

        <div class='edit-post-link'>
          <?php edit_post_link(); ?>
        </div>


      </article>

    <?php endwhile; endif;?>

    </section>

  </main>

<?php get_footer(); ?>
