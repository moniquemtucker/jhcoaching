<?php get_header(); ?>

<?php get_template_part('content', 'button'); ?>

<section class="row">
  <div class="small-12 columns text-center">
    <div class="leader">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>       
    
    <?php endwhile; else : ?>
	
	  <p><?php _e( 'Sorry, no pages found.' ); ?></p>
	
	<?php endif; ?>   
    
    </div>
  </div>
</section>



<?php get_footer(); ?>