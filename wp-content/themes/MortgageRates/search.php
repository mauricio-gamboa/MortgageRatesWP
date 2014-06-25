<?php
  $allsearch = &new WP_Query("s=$s&showposts=-1");
  $count = $allsearch->post_count;
  wp_reset_query();

  /* Number of posts per page and page number */
  $num_of_posts = get_option( 'posts_per_page' );
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
    $resultsText = '<span class="hide-xs">Showing '.$n.'-'.$m.' of '.$count.' Results</span>';
  } else {
    $resultsText = 'No Results';
  }
?>

<?php get_header(); ?>
<div id="page-title-wrapper">
  <div class="container">
    <div class="page-title clearfix">
      <h1>Search</h1>
      <?php get_search_form(); ?>
    </div>
  </div>
</div>
<div class="general-padding">
  <div class="container">
    <div class="row">
      <?php get_sidebar(); ?>
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        <div class="page search-page">
          <h2>Search Results for "<?php the_search_query(); ?>"</h2>

          <?php if ($resultsText != 'No Results'): ?>
          <div class="navigation-wrapper">
            <?php echo $resultsText; ?>
            <?php if(function_exists('wp_simple_pagination')) { wp_simple_pagination(); } ?>
          </div>
          <?php endif; ?>
          
          <?php if ( have_posts() ) :
            while ( have_posts() ) : the_post();
              get_template_part('content', 'search');
            endwhile;
          else :
            get_template_part('content', 'none');
          endif; ?>
          
          <?php if ($resultsText != 'No Results'): ?>
          <div class="navigation-wrapper">
            <?php echo $resultsText; ?>
            <?php if(function_exists('wp_simple_pagination')) { wp_simple_pagination(); } ?>
          </div>
          <?php endif; ?>
          
        </div>
      </div>
      <?php get_sidebar('xs'); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>