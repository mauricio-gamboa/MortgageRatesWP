<?php 
  $features = get_features();
  $steps = get_steps();
  $team_members = get_team_members();
?>

<div class="row">
  <div class="col-sm-12 col-md-4 col-lg-4">
    <div class="about-top">
      <img src="<?php echo THEME_DIR?>/images/house-1.png">
      <?php the_content(); ?>
    </div>
  </div>
  <?php if($features): ?>
  <div class="col-sm-12 col-md-8 col-lg-8">
    <div class="about-tips">
      <?php foreach ( $features as $key=>$post ) : setup_postdata( $post ); ?>
      <article class="home-tip home-tip-<?php echo $key; ?>">
        <?php if (has_post_thumbnail()) : the_post_thumbnail(); endif; ?>
        <div>
          <?php the_title('<h4>','</h4>')?>
          <?php the_content(); ?>
        </div>
      </article>
      <?php endforeach; wp_reset_postdata(); ?>
    </div>
  </div>
  <?php endif; ?>
</div>

<?php if($steps): ?>
<h3 class="hide-xs">How MortageRates.ca Works</h3>
<div class="about-steps">
  <h3 class="show-xs">How MortageRates.ca Works</h3>
  <div class="row">
    <?php foreach ( $steps as $key=>$post ) : setup_postdata( $post ); ?>
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
      <div class="about-step">
        <?php if (has_post_thumbnail()) : the_post_thumbnail(); endif; ?>
        <?php the_title('<h5>','</h5>')?>
        <?php the_content(); ?>
      </div>
    </div>
    <?php endforeach; wp_reset_postdata(); ?>
  </div>
</div>
<?php endif; ?>

<?php if($team_members): ?>
<div class="people hide-xs">
  <?php foreach ( $team_members as $key=>$post ) : setup_postdata( $post ); ?>
  <?php $position = get_post_meta(get_the_ID(), 'position', true); $linkedin = get_post_meta(get_the_ID(), 'linkedin', true); $twitter = get_post_meta(get_the_ID(), 'twitter', true); ?>
  <div class="person">
    <div class="row">
      <div class="col-sm-3 col-md-3 col-lg-3">
        <?php if (has_post_thumbnail()) : the_post_thumbnail(); endif; ?>
      </div>
      <div class="col-sm-9 col-md-9 col-lg-9">
        <div class="social">
          <?if ($twitter): ?><a href="<?php echo $twitter; ?>" class="twitter"></a><?php endif; ?>
          <?if ($linkedin): ?><a href="<?php echo $linkedin; ?>" class="linkedin"></a><?php endif; ?>
        </div>
        <?php the_title('<h4>','</h4>')?>
        <?if ($position): ?><h5><?php echo $position; ?></h5><?php endif; ?>
        <?php the_content(); ?>
      </div>
    </div>
  </div>
  <?php endforeach; wp_reset_postdata(); ?>
</div>

<div class="people show-xs">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      
      <?php foreach ( $team_members as $key=>$post ) : setup_postdata( $post ); ?>
      <?php $position = get_post_meta(get_the_ID(), 'position', true); $linkedin = get_post_meta(get_the_ID(), 'linkedin', true); $twitter = get_post_meta(get_the_ID(), 'twitter', true); ?>
      <?php if ($key == 0): ?>
      <div class="item active">
      <?php else: ?>
      <div class="item">
      <?php endif; ?>
        <div class="person">
          <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3">
              <?php if (has_post_thumbnail()) : the_post_thumbnail(); endif; ?>
            </div>
            <div class="col-sm-9 col-md-9 col-lg-9">
              <div class="social">
                <?if ($twitter): ?><a href="<?php echo $twitter; ?>" class="twitter"></a><?php endif; ?>
                <?if ($linkedin): ?><a href="<?php echo $linkedin; ?>" class="linkedin"></a><?php endif; ?>
              </div>
              <?php the_title('<h4>','</h4>')?>
              <?if ($position): ?><h5><?php echo $position; ?></h5><?php endif; ?>
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; wp_reset_postdata(); ?>
    </div>
    <ol class="carousel-indicators">
      <?php foreach ( $team_members as $key=>$post ) : setup_postdata( $post );
      if ($key == 0): ?>
      <li data-target="#carousel-example-generic" data-slide-to="<?php echo $key; ?>" class="active"></li>
      <?php else: ?>
      <li data-target="#carousel-example-generic" data-slide-to="<?php echo $key; ?>"></li>
      <?php endif; 
      endforeach; 
      wp_reset_postdata();?>
    </ol>
  </div>
</div>
<?php endif; ?>