<?php
/**
 * Kids Learning Toys functions and definitions
 *
 * @package Kids Learning Toys
 */

if ( ! function_exists( 'kids_learning_toys_setup' ) ) :
function kids_learning_toys_setup() {
	
	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

    load_theme_textdomain( 'kids-learning-toys', get_template_directory() . '/languages' );

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	
	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );
			
	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Enqueue editor styles.
	add_editor_style( array( 'assets/css/editor-style.css' ) );
}
endif; // kids_learning_toys_setup
add_action( 'after_setup_theme', 'kids_learning_toys_setup' );

function kids_learning_toys_scripts() {
	wp_enqueue_style( 'kids-learning-toys-basic-style', get_stylesheet_uri() );

	wp_enqueue_script( 'wow-js', get_theme_file_uri( '/assets/js/wow.js' ), array( 'jquery' ), true );

	wp_enqueue_style( 'animate-css', get_template_directory_uri().'/assets/css/animate.css' );

	//font-awesome
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/all.css', array(), '5.15.3' );
}
add_action( 'wp_enqueue_scripts', 'kids_learning_toys_scripts' );



// Block Patterns.
require get_template_directory() . '/block-patterns.php';

require get_template_directory() .'/inc/TGM/tgm.php';