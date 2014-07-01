<?php $firstTime = get_my_page('first-time-home-buyer'); ?>
<?php $calculators = get_my_page('calculators-online'); ?>

<?php if (has_post_thumbnail()) :?>
  <div class="banner shadow">
    <?php the_post_thumbnail(); ?>
  </div>
<?php endif; ?>

<!-- First Time Home Buyer Children -->
<?php if($firstTime): ?>
<?php foreach ( $firstTime as $key=>$post ) : setup_postdata( $post ); ?>
<div class="shadow gallery">
  <div class="title">
    <?php the_title('<h5>', '</h5>'); ?>
    <?php the_excerpt(); ?>
  </div>

  <?php $kids = get_childrenByID(get_the_ID()); ?>
  <?php if($kids): ?>
  <div class="row">
    
    <div class="col-sm-8 col-md-8 col-lg-8">
      <div class="tab-content">
        <?php foreach ( $kids as $key=>$post ) : setup_postdata( $post ); ?>
        <?php if($key == 0): ?>
        <div id="firstTime-gallery-<?php echo $key; ?>" class="tab-pane active fade in gallery-wrapper">
        <?php else: ?>
        <div id="firstTime-gallery-<?php echo $key; ?>" class="tab-pane fade gallery-wrapper">
        <?php endif; ?>
          <?php if (has_post_thumbnail()) : the_post_thumbnail(); endif; ?>
          <div>
            <?php the_title('<h6>', '</h6>'); ?>
            <?php the_excerpt(); ?>
            <a class="arrow-1 link-green" href="<?php the_permalink(); ?>">Read More</a>
          </div>
        </div>
        <?php endforeach; wp_reset_postdata(); ?>
      </div>
    </div>

    <div class="col-sm-4 col-md-4 col-lg-4">
      <div class="gallery-controller">
        <ul class="list-unstyled" role="tablist">
          <?php foreach ( $kids as $key=>$post ) : setup_postdata( $post ); ?>
          <?php if($key == 0): ?>
          <li class="active">
          <?php else: ?>
          <li>
          <?php endif; ?>
            <a href="#firstTime-gallery-<?php echo $key; ?>" role="tab" data-toggle="tab"><?php the_title(); ?></a>
          </li>
          <?php endforeach; wp_reset_postdata(); ?>
        </ul>
      </div>
    </div>
  
  </div>
  <?php endif; ?>
</div>
<?php endforeach; wp_reset_postdata(); ?>
<?php endif; ?>
<!-- End of First Time Home Buyer Children -->

<!-- Calculators Children -->
<?php if($calculators): ?>
<?php foreach ( $calculators as $key=>$post ) : setup_postdata( $post ); ?>
<div class="shadow gallery">
  <div class="title">
    <?php the_title('<h5>', '</h5>'); ?>
    <?php the_excerpt(); ?>
  </div>

  <?php $kids = get_childrenByID(get_the_ID()); ?>
  <?php if($kids): ?>
  <div class="row">
    
    <div class="col-sm-8 col-md-8 col-lg-8">
      <div class="tab-content">
        <?php foreach ( $kids as $key=>$post ) : setup_postdata( $post ); ?>
        <?php if($key == 0): ?>
        <div id="calculator-gallery-<?php echo $key; ?>" class="tab-pane active fade in gallery-wrapper">
        <?php else: ?>
        <div id="calculator-gallery-<?php echo $key; ?>" class="tab-pane fade gallery-wrapper">
        <?php endif; ?>
          <?php if (has_post_thumbnail()) : the_post_thumbnail(); endif; ?>
          <div>
            <?php the_title('<h6>', '</h6>'); ?>
            <?php the_excerpt(); ?>
            <a class="arrow-1 link-green" href="<?php the_permalink(); ?>">Read More</a>
          </div>
        </div>
        <?php endforeach; wp_reset_postdata(); ?>
      </div>
    </div>

    <div class="col-sm-4 col-md-4 col-lg-4">
      <div class="gallery-controller">
        <ul class="list-unstyled" role="tablist">
          <?php foreach ( $kids as $key=>$post ) : setup_postdata( $post ); ?>
          <?php if($key == 0): ?>
          <li class="active">
          <?php else: ?>
          <li>
          <?php endif; ?>
            <a href="#calculator-gallery-<?php echo $key; ?>" role="tab" data-toggle="tab"><?php the_title(); ?></a>
          </li>
          <?php endforeach; wp_reset_postdata(); ?>
        </ul>
      </div>
    </div>
  
  </div>
  <?php endif; ?>
</div>
<?php endforeach; wp_reset_postdata(); ?>
<?php endif; ?>
<!-- Calculators Children -->