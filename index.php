<?php get_header(); ?>

<?php get_template_part('content', 'button'); ?>

 <div class="container">
    <div class="row">
      <div class="col-sm-8 blog-main">

        <div class="blog-post">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <h2 class="blog-post-title" id="blog-post-1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p class="blog-post-meta">by <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?></p>
          <p><a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></p>

          <p><?php echo strip_tags (get_the_excerpt() ); ?></p>

          <div id="read-btn-container">
              <a href="<?php the_permalink(); ?>" class="btn btn-default btn-lg" id="read-btn">READ MORE</a>
          </div>

          <?php endwhile; else : ?>
  
            <p><?php _e( 'Sorry, no pages found.' ); ?></p>


          <?php endif; ?>   
        </div><!-- /.blog-post -->

      </div><!-- /.blog-main -->

          <?php get_sidebar(); ?>    

    </div><!-- /.row -->
  </div><!-- /.container -->




<?php get_footer(); ?>