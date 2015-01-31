

<?php get_header(); ?>




<!--main part of blog page -->
  <div id="home-schedule"><a href="<?php bloginfo('url'); ?>"><button type="button" class="btn btn-default btn-lg">
        free consultation</button></a>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-8 blog-main">
        <div class="blog-post">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <h2 class="blog-post-title" id="blog-post-1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p class="blog-post-meta">by <a href="#"><?php the_author_posts_link(); ?></a> on <?php the_time('F j, Y'); ?></p>

          <p><?php echo strip_tags (get_the_excerpt() ); ?></p>

          <ul class="pager">
            <li><?php next_posts_link( 'Older posts' ); ?></li>
            <li><?php previous_posts_link( 'Newer posts' ); ?></li>
          </ul>

          <?php endwhile; else : ?>
  
            <p><?php _e( 'Sorry, no pages found.' ); ?></p>


          <?php endif; ?>   
        </div><!-- /.blog-post -->

      </div><!-- /.blog-main -->

      <?php get_sidebar(); ?>    

    </div><!-- /.row -->
  </div><!-- /.container -->

<?php get_footer(); ?>