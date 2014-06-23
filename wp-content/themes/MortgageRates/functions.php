<?php

define('THEME_DIR', get_template_directory_uri());

/*--- REMOVE GENERATOR META TAG ---*/
remove_action('wp_head', 'wp_generator');

// ENQUEUE STYLES

function enqueue_styles() {

  /** REGISTER css/bootstrap.min.css **/
  wp_register_style('bootstrapcss', THEME_DIR . '/css/bootstrap.min.css', array(), '1', 'all');
  wp_enqueue_style('bootstrapcss');

  wp_enqueue_style('mortgageRates-style', get_stylesheet_uri(), array('bootstrapcss'), '1', 'all');
}

add_action('wp_enqueue_scripts', 'enqueue_styles');

// ENQUEUE SCRIPTS

function enqueue_scripts() {
  /** REGISTER js/bootstrap.min.js **/
  wp_register_script( 'bootstrapjs', THEME_DIR . '/js/bootstrap.min.js', array( 'jquery' ), '1', false );
  wp_enqueue_script( 'bootstrapjs' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

if (!function_exists('morgageRates_setup')) :
  function morgageRates_setup() {
    if ( function_exists('add_theme_support') ) {
      add_theme_support('post-thumbnails');
      set_post_thumbnail_size(150, 150);
      add_image_size('blog', 200, 200, true);
    }
  }
endif; // morgageRates_setup
add_action('after_setup_theme', 'morgageRates_setup');