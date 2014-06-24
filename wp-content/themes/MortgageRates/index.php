<?php get_header(); ?>
<div id="page-title-wrapper">
  <div class="container">
    <div class="page-title">
      <h1>Blog Page</h1>
       <?php get_search_form(); ?>
    </div>
  </div>
</div>
<div class="general-padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        <div class="page blog-page">
          <?php if ( have_posts() ) :
          while ( have_posts() ) : the_post();
          get_template_part('content', get_post_format());
          endwhile;
          else :
            get_template_part('content', 'none');
          endif;
          ?>
          <article class="post"><?php if(function_exists('wp_simple_pagination')) { wp_simple_pagination(); } ?></article>
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