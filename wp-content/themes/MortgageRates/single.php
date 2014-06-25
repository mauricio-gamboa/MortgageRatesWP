<?php get_header(); ?>
<div id="page-title-wrapper">
  <div class="container">
    <div class="page-title clearfix">
      <h1>Blog</h1>
      <?php get_search_form(); ?>
    </div>
  </div>
</div>
<div class="general-padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        <div class="page detail-page">
          <?php 
          while (have_posts()) : the_post();
          get_template_part('content', 'single');
          endwhile;
          ?>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <?php get_sidebar('blog'); ?>
        <?php get_sidebar('blog-xs'); ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>