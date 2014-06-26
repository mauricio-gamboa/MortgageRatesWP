<?php 
$steps = get_steps(); 
$works_items = get_works_items();
$subtitle = get_post_meta(get_the_ID(), 'subtitle', true);
?>

<div class="page sub-page works">
  <?php the_title('<h2>', '</h2>'); ?>
  
  <?php if($steps): ?>
  <div class="row">
    <?php foreach ( $steps as $key=>$post ) : setup_postdata( $post ); ?>
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="works-step">
        <span class="my-icon icon-1<?php echo $key + 1; ?> circle-1 hide-xs"></span>
        <div>
          <span>STEP <?php echo $key + 1; ?></span>
          <p><?php the_title(); ?></p>
        </div>
      </div>
    </div>
    <?php endforeach; wp_reset_postdata(); ?>
  </div>
  <?php endif; ?>

  <div id="works-video">
    <?if ($subtitle): ?><h5><?php echo $subtitle; ?></h5></p><?php endif; ?>
    <div class="row">
      <div class="col-sm-7 col-md-7 col-lg-7">
        <?php the_content(); ?>
      </div>
      <div class="col-sm-5 col-md-5 col-lg-5">
        <div class="video">
          <!-- THIS HAS TO BE DYNAMIC -->
          <img src="<?php echo THEME_DIR?>/images/video-1.png">
        </div>
      </div>
    </div>
  </div>
</div>

<?php if($works_items): ?>
<div class="page works-big-steps">
  <?php foreach ( $works_items as $key=>$post ) : setup_postdata( $post ); ?>
  <div class="big-step clearfix">
    <div>
      <?php the_title('<h4>', '</h4>'); ?>
      <?php the_content(); ?>
    </div>
  </div>
  <?php endforeach; wp_reset_postdata(); ?>
</div>
<?php endif; ?>

<?php get_sidebar('include-compare'); ?>
<?php get_sidebar('include-mortgage-help'); ?>
<?php get_sidebar('include-recent-qa'); ?>
<?php get_sidebar('include-share'); ?>