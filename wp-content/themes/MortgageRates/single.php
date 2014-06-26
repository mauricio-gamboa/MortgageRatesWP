<?php 
  $ttl = '';
  $klass = '';
  $postType = '';

  if (!is_singular('post')) {
    $ttl = 'Mortgage Help';
    $klass = 'sub-page';
    $postType = 'page';
  } else {
    $ttl = 'Blog';
    $klass = 'detail-page';
    $postType = 'single';
  }
?>

<?php get_header(); ?>
<div id="page-title-wrapper">
  <div class="container">
    <div class="page-title clearfix">
      <h1><?php echo $ttl; ?></h1>
      <?php get_search_form(); ?>
    </div>
  </div>
</div>
<div class="general-padding">
  <div class="container">
    <div class="row">
      
      <?php if($postType == 'page') { get_sidebar(); } ?>
      
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        <div class="page <?php echo $klass; ?>">
          <?php 
          while (have_posts()) : the_post();
          get_template_part('content', $postType);
          endwhile;
          ?>
        </div>

        <?php if($postType == 'page') { 
          get_sidebar('include-find-rate');
          get_sidebar('include-share');
        } ?>
      </div>
      
      <?php if($postType == 'page') { get_sidebar('xs'); } ?>
      
      <?php if ($postType == 'single'): ?>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <?php get_sidebar('blog'); ?>
        <?php get_sidebar('blog-xs'); ?>
      </div>
    <?php endif; ?>
    
    </div>
  </div>
</div>
<?php get_footer(); ?>