<?php get_header(); ?>
<div id="page-title-wrapper">
  <div class="container">
    <div class="page-title clearfix">
      <h1>Mortgage Help</h1>
      <?php get_search_form(); ?>
    </div>
  </div>
</div>
<div class="general-padding first-time">
  <div class="container">
    <div class="row">
      <?php get_sidebar(); ?>
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        <?php while ( have_posts() ) : the_post();
        get_template_part( 'content', 'help' );
        endwhile; ?>
        <?php get_sidebar('include-compare'); ?>
        <?php get_sidebar('include-blog'); ?>
        <?php get_sidebar('include-blog'); ?>
        <?php get_sidebar('include-recent-qa'); ?>
        <?php get_sidebar('include-share'); ?>
      </div>
      <?php get_sidebar('xs'); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>