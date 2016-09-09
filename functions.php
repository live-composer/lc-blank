<?php

// Delcare Header/Footer compatibility
define( 'DS_LIVE_COMPOSER_HF', true );
define( 'DS_LIVE_COMPOSER_HF_AUTO', false );

// Content Width ( WP requires it and LC uses is to figure out the wrapper width )
if ( ! isset( $content_width ) )
	$content_width = 1180;

// Basic theme setup
if ( ! function_exists( 'lct_theme_setup' ) ) {

	function lct_theme_setup() {

		// Add default posts and comments RSS feed links to head
		add_theme_support( 'automatic-feed-links' );

		// Enable Post Thumbnails ( Featured Image )
		add_theme_support( 'post-thumbnails' );

		// Enable support for HTML5 markup.
		add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form' ) );

	}

} add_action( 'after_setup_theme', 'lct_theme_setup' );

// Load JS and CSS files
function lct_load_scripts() {

	wp_enqueue_style( 'lct-base-style', get_stylesheet_uri(), array(), '1.0' );
	wp_enqueue_script( 'jquery' );
	
} add_action( 'wp_enqueue_scripts', 'lct_load_scripts' );