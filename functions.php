<?php

add_theme_support( 'menus' ); 

function wpt_excerpt_length( $length ) {
	return 16;
}

add_filter( 'excerpt_length', 'wpt_excerpt_length', 999 );

function register_theme_menus() {

	register_nav_menus( 
		array(
			'primary-menu'	=> __( 'Primary Menu' )
		)
	);

}
add_action( 'init',  'register_theme_menus' );

function wpt_create_widget( $name, $id, $description ) {

	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="module-heading">',
		'after_title' => '</h2>'
	));

}

wpt_create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
wpt_create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );
function wpt_theme_styles() {
	wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css' );	
	wp_enqueue_style( 'fontawesome_css', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' );	
	wp_enqueue_style( 'googlefont_css', 'http://fonts.googleapis.com/css?family=Montserrat|Lato|Open+Sans|Droid+Sans|Libre+Baskerville:400,400italic' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'wpt_theme_styles');

function wpt_theme_js() {
	wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js', array('jquery'), '', true  );
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/coaching.js', array( 'jquery' ), '', true );

}
add_action( 'wp_enqueue_scripts', 'wpt_theme_js')

?>