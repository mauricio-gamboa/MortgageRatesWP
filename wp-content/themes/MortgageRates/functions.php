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

  require_once('wp_bootstrap_navwalker.php');
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
    }

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus( array('primary'   => __( 'Top primary menu')));

    add_post_type_support('page', 'excerpt');
  }
endif; // morgageRates_setup
add_action('after_setup_theme', 'morgageRates_setup');

function get_related_author_posts() {
  global $authordata, $post;
  $authors_posts = get_posts( array( 'author' => $authordata->ID, 'post__not_in' => array( $post->ID ), 'posts_per_page' => 4 ) );
  return $authors_posts;
}

function get_features() {
  global $post;
  $features = get_posts(array('post_type'=> 'features', 'posts_per_page' => 6));
  return $features;
}

function get_steps() {
  global $post;
  $steps = get_posts(array('post_type'=> 'steps', 'posts_per_page' => 3));
  return $steps;
}

function get_team_members() {
  global $post;
  $team_members = get_posts(array('post_type'=> 'team_members', 'posts_per_page' => -1));
  return $team_members;
}

function get_my_page($pageName) {
  global $post;
  $page = get_posts(array('post_type'=> 'page', 'name' => $pageName, 'posts_per_page' => 1));
  return $page;
}

function get_works_items() {
  global $post;
  $works_items = get_posts(array('post_type'=> 'works_items', 'posts_per_page' => 5));
  return $works_items;
}

function get_testimonials($number) {
  global $post;
  $testimonials = get_posts(array('post_type'=> 'testimonials', 'posts_per_page' => $number));
  return $testimonials;
}

function get_calculators() {
  global $post;
  $calculators = get_posts(array('post_type'=> 'page', 'post_parent' => $post->ID, 'posts_per_page' => 4));
  return $calculators;
}

function get_my_posts($number) {
  global $post;
  $my_posts = get_posts(array('posts_per_page' => $number));
  return $my_posts;
}

function get_home_logos() {
  global $post;
  $home_logos = get_posts(array('post_type'=> 'home_logos', 'posts_per_page' => 8));
  return $home_logos;
}

function get_posts_by_category($categoryName, $number) {
  global $post;
  $posts_by_category = get_posts(array('category_name'=> $categoryName, 'posts_per_page' => $number));
  return $posts_by_category;
}

function get_accordion() {
  global $post;
  $accordion = get_posts(array('post_type'=> 'accordion', 'posts_per_page' => -1));
  return $accordion;
}

function get_faqs() {
  global $post;
  $faqs = get_posts(array('post_type'=> 'faqs', 'posts_per_page' => -1));
  return $faqs;
}