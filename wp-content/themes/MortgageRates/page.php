<?php get_header(); ?>
<div id="page-title-wrapper">
  <div class="container">
    <div class="page-title">
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
        <div class="post-share">
          Share Article
          <img src="<?php echo THEME_DIR?>/images/share-1.png">
        </div>
      </div>
      <?php get_sidebar('xs'); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>