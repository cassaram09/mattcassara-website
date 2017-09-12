<?php /* Template Name: Projects Template */ get_header(); ?>

  <main role="main" class='main-col'>
    <!-- section -->
    <section>

      <h1><?php the_title(); ?></h1>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <!-- article -->
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php 

          the_content(); 

          $projects = get_posts( 'post_type=project' );

          if( $projects ) :?>
              <ul>
              <?php foreach( $projects as $project) : 
                $post = $project;
                setup_postdata( $post );?>
                  <li><a href="<?php the_permalink(); ?>" title="Go to <?php the_title(); ?>"> <?php the_title(); ?></a></li>
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
