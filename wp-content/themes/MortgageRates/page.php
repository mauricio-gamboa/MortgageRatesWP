<?php get_header(); ?>
<div id="page-title-wrapper">
  <div class="container">
    <div class="page-title clearfix">
      <h1>Mortgage Rates</h1>
      <?php get_search_form(); ?>
    </div>
  </div>
</div>
<div class="general-padding">
  <div class="container">
    <div class="row">
      <?php get_sidebar(); ?>
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        <div class="page sub-page">
          <?php while ( have_posts() ) : the_post();
          get_template_part( 'content', 'page' );
          endwhile; ?>
        </div>
        
        <?php get_sidebar('include-find-rate'); ?>
        <?php get_sidebar('include-share'); ?>
      </div>
      <?php get_sidebar('xs'); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>