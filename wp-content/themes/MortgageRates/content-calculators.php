<?php $calculators = get_calculators(); ?>

<?php if($calculators): ?>
<?php foreach ( $calculators as $key=>$post ) : setup_postdata( $post ); ?>
<div class="single-calculator single-calculator-<?php echo $key+1; ?> shadow clearfix">
  <div class="row">
    <div class="col-sm-5 col-md-3 col-lg-3 hide-xs">
      <?php if (has_post_thumbnail()) : the_post_thumbnail(); endif; ?>
    </div>
    <div class="col-sm-7 col-md-9 col-lg-9">
      <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-8">
          <?php the_title('<h3><span class="year">icon</span>','</h3>'); ?>
          <?php the_content(); ?>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 hide-xs">
          <a class="btn green-gradient" href="<?php the_permalink(); ?>">Start Now!</a>
        </div>
      </div>
    </div>
    <div class="col-xs-12  show-xs">
      <div class="row">
        <div class="col-xs-6">
          <?php if (has_post_thumbnail()) : the_post_thumbnail(); endif; ?>
        </div>
        <div class="col-xs-6">
          <a class="btn green-gradient" href="<?php the_permalink(); ?>">Start Now!</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endforeach; wp_reset_postdata(); ?>
<? endif; ?>