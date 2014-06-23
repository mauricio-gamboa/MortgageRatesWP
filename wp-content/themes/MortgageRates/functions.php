<?php

define("THEME_DIR", get_template_directory_uri());

/*--- REMOVE GENERATOR META TAG ---*/
remove_action('wp_head', 'wp_generator');

// ENQUEUE STYLES

function enqueue_styles() {

  wp_enqueue_style( 'mortgageRates-style', get_stylesheet_uri(), array(), '1', 'all' );
 
  /** REGISTER css/bootstrap.min.css **/
  wp_register_style( 'bootstrapcss', THEME_DIR . '/css/bootstrap.min.css', array(), '1', 'all' );
  wp_enqueue_style( 'bootstrapcss' );
  
}

add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

// ENQUEUE SCRIPTS

function enqueue_scripts() {
 
  /** REGISTER js/bootstrap.min.js **/
  wp_register_script( 'bootstrapjs', THEME_DIR . '/js/bootstrap.min.js', array( 'jquery' ), '1', false );
  wp_enqueue_script( 'bootstrapjs' );
  
}

add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );