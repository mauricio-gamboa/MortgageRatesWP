<?php
/*
Template Name: Calculators Page
*/

get_header(); ?>
<div id="page-title-wrapper">
  <div class="container">
    <div class="page-title clearfix">
      <h1>Mortgage Help</h1>
      <?php get_search_form(); ?>
    </div>
  </div>
</div>
<div class="general-padding calculators-page">
  <div class="container">
    <div class="row">
      <?php get_sidebar(); ?>
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        
        <?php while ( have_posts() ) : the_post();
        get_template_part( 'content', 'calculators' );
        endwhile; ?>

        <?php get_sidebar('include-mortgage-help'); ?>
        <?php get_sidebar('include-recent-qa'); ?>
        <?php get_sidebar('include-share'); ?>
      </div>
      <?php get_sidebar('xs'); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>