

<?php 
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header(); ?>

    <div class="container" role="main">

	    <div class="row">

	    	<div class="col-md-8">

			    <div class="page-header">	
			    	<h1><?php wp_title( '' ); ?></h1>
			    </div>

				<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'jh-coaching' ); ?></p>
				<?php get_search_form(); ?>

				</article>				

	    	</div>	    

	    </div>

    </div>

<?php get_footer(); ?>