<?php get_header(); ?>

<?php get_template_part('content', 'button'); ?>

 <div class="container">
    <div class="row">
      <div class="col-sm-8 blog-main">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="blog-post">


          <h2 class="blog-post-title" id="blog-post-1"><?php the_title(); ?></h2>
          <p class="blog-post-meta">by <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?></p>

            <?php if( get_the_post_thumbnail() ): ?>
              <div class="img-container">
            <?php the_post_thumbnail('large'); ?>
              </div>
            <?php endif; ?>

            <?php the_content(); ?>
            <?php comments_template(); ?>

          <p>

            <h5><?php previous_post_link(); ?> -- 
            <a href="<?php bloginfo('url'); ?>/blog/">Back to Blog</a> --
            <?php next_post_link(); ?> </h5> 

          </p>

          <?php endwhile; else : ?>
  
            <p><?php _e( 'Sorry, no pages found.', 'jh-career-coaching' ); ?></p>


          <?php endif; ?>   
        </div><!-- /.blog-post -->

      </div><!-- /.blog-main -->

          <?php get_sidebar(); ?>    

    </div><!-- /.row -->
  </div><!-- /.container -->




<?php get_footer(); ?>