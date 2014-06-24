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
      add_theme_support( 'html5', array( 'search-form' ) );
    }
  }
endif; // morgageRates_setup
add_action('after_setup_theme', 'morgageRates_setup');

function get_related_author_posts() {
  global $authordata, $post;
  $authors_posts = get_posts( array( 'author' => $authordata->ID, 'post__not_in' => array( $post->ID ), 'posts_per_page' => 4 ) );
  return $authors_posts;
}

function get_search_results_counter() {
  /* Search Total Count */
  $allsearch = &new WP_Query("s=$s&showposts=-1");
  $count = $allsearch->post_count;
  wp_reset_query();

  /* Number of posts per page and page number */
  $num_of_posts = 2;
  $pageNumber = (get_query_var('paged')) ? get_query_var('paged') : 1;

  /* Showing the lower post value */
  $n = ($pageNumber-1) * $num_of_posts;
  $n = $n+1;

  /* Showing the higher/highest post value */
  $m = $pageNumber * $num_of_posts;
  
  if($m > $count){
    // if m is bigger than the count var, it sets the
    // highest value equal to the count, this is for the last page of results
    $m = $count;
  }

  if($count > 0){
    return '<span class="hide-xs">Showing '.$n.'-'.$m.' of '.$count.' Results</span>';
  } else {
    return '<span class="hide-xs">No Results</span>';
  }
}