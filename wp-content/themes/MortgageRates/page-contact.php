<?php get_header(); ?>
<div id="page-title-wrapper">
  <div class="container">
    <div class="page-title clearfix">
      <?php the_title('<h1>','</h1>') ?>
      <?php get_search_form(); ?>
    </div>
  </div>
</div>
<div class="general-padding">
  <div class="contact-page">
    <div class="container">
      <div class="row">
        <?php while ( have_posts() ) : the_post();
        get_template_part( 'content', 'contact' );
        endwhile; ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>