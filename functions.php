<?php

add_theme_support( 'menus' ); 

function register_theme_menus() {

	register_nav_menus( 
		array(
			'primary-menu'	=> __( 'Primary Menu' )
		)
	);

}
add_action( 'init',  'register_theme_menus' );

function wpt_theme_styles() {
	wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css' );	
	wp_enqueue_style( 'fontawesome_css', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' );	
	wp_enqueue_style( 'googlefont_css', 'http://fonts.googleapis.com/css?family=Montserrat|Lato|Open+Sans|Droid+Sans|Libre+Baskerville:400,400italic' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'wpt_theme_styles');

function wpt_theme_js() {
	// wp_enqueue_script( 'foundation_js', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'coaching_js', get_template_directory_uri() . '/js/coaching.js', array('jquery'), '', true );
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', array('jquery', 'foundation_js'), '', true );
}
add_action( 'wp_enqueue_scripts', 'wpt_theme_js')

?>