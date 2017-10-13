<?php /* Template Name: Projects Template */ get_header(); ?>

  <main role="main" class='main'>
    <!-- section -->
    <section class='projects'>

      <h1><?php the_title(); ?></h1>

      <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <!-- article -->
      <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php 

          the_content(); 

          $projects = get_posts( 'post_type=project' );

          if ( $projects ): ?>
            <ul class='projects-list'>
              <?php foreach( $projects as $project) : 
                $post = $project;
                setup_postdata( $post );
                $featured_image = get_field('project_featured_image');
                $description = get_field('project_description');
              ?>
                  <li>
                    <h2>
                      <a href="<?php the_permalink(); ?>" title="Go to <?php the_title(); ?>"> <?php the_title(); ?></a>
                    </h2>
                    <img class='featured-image' src="<?php echo $featured_image['url']; ?>" />
                    <span><?php the_field('project_description'); ?></span>
                  </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>

        <br class="clear">

        <?php edit_post_link(); ?>

      </article>
      <!-- /article -->

    <?php endwhile; endif; ?>

    </section>
    <!-- /section -->
  </main>


<?php get_footer(); ?>
