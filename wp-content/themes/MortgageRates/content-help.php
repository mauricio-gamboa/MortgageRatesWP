<?php $firstTime = get_my_page('first-time-home-buyer'); ?>
<?php $calculators = get_my_page('calculators-online'); ?>
<?php $closing_costs = get_my_page('closing-costs-tax-credits') ;?>
<?php $down_payment = get_my_page('down-payment-cmhc-insurante') ;?>
<?php $mortgage_process = get_my_page('mortgage-process') ;?>

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

<!-- Mortgage Process -->
<?php if($mortgage_process): ?>
<?php foreach ( $mortgage_process as $key=>$post ) : setup_postdata( $post ); ?>
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
        <div id="mortgage_process-gallery-<?php echo $key; ?>" class="tab-pane active fade in gallery-wrapper">
        <?php else: ?>
        <div id="mortgage_process-gallery-<?php echo $key; ?>" class="tab-pane fade gallery-wrapper">
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
            <a href="#mortgage_process-gallery-<?php echo $key; ?>" role="tab" data-toggle="tab"><?php the_title(); ?></a>
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
<!-- Mortgage Process -->

<!-- Down Payment -->
<?php if($down_payment): ?>
<?php foreach ( $down_payment as $key=>$post ) : setup_postdata( $post ); ?>
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
        <div id="down_payment-gallery-<?php echo $key; ?>" class="tab-pane active fade in gallery-wrapper">
        <?php else: ?>
        <div id="down_payment-gallery-<?php echo $key; ?>" class="tab-pane fade gallery-wrapper">
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
            <a href="#down_payment-gallery-<?php echo $key; ?>" role="tab" data-toggle="tab"><?php the_title(); ?></a>
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
<!-- End Of Down Payment -->

<!-- Closing Costs Children -->
<?php if($closing_costs): ?>
<?php foreach ( $closing_costs as $key=>$post ) : setup_postdata( $post ); ?>
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
        <div id="closing-costs-gallery-<?php echo $key; ?>" class="tab-pane active fade in gallery-wrapper">
        <?php else: ?>
        <div id="closing-costs-gallery-<?php echo $key; ?>" class="tab-pane fade gallery-wrapper">
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
            <a href="#closing-costs-gallery-<?php echo $key; ?>" role="tab" data-toggle="tab"><?php the_title(); ?></a>
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
<!-- End of Closing Costs Children -->

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
<!-- End of Calculators Children -->