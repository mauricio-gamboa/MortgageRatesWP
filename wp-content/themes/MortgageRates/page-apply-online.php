<?php 
$testimonials = get_testimonials(1); 

$bottom_title = get_post_meta(get_the_ID(), 'bottom-title', true); 
$bottom_content = get_post_meta(get_the_ID(), 'bottom-content', true);
?>

<?php get_header('apply'); ?>
<div id="top" class="home apply-online">
  <div class="nav-container hide-xs">
    <div class="container">
      <?php wp_nav_menu(array( 'menu' => 'header','container' => 'nav','menu_class' => 'clearfix')); ?>
    </div>
  </div>
  <div class="home-top">
    <div class="container">
      <div class="row">
        <div class="apply-title hide-xs">
          <img src="<?php echo THEME_DIR?>/images/apply-title.png">
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
          <?php while ( have_posts() ) : the_post();
          get_template_part( 'content', 'apply' );
          endwhile; ?>
        </div>
        <div class="col-sm-8 col-md-8 col-lg-8">
          <div class="rates-details-form">
            <h3>Get in Touch with a Mortgage Expert in your area for FREE!</h3>
            <div class="row">
              <form class="form-horizontal" role="form">
                <div class="title clearfix">
                  <div class="pull-left">
                    <span class="number">1</span>
                    Mortgage Details
                  </div>
                </div>
                <fieldset>
                  <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <label class="col-sm-12 col-md-3 col-lg-3 control-label">Mortgage Amount</label>
                        <div class="col-sm-12 col-md-9 col-lg-9">
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <label class="col-sm-12 col-md-3 col-lg-3 control-label">Rate Type</label>
                        <div class="col-sm-12 col-md-9 col-lg-9">
                          <select class="form-control">
                            <option>Fixed</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <label class="col-sm-12 col-md-3 col-lg-3 control-label">Mortgage Type</label>
                        <div class="col-sm-12 col-md-9 col-lg-9">
                          <select class="form-control">
                            <option>Pre-Approval</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <label class="col-sm-12 col-md-3 col-lg-3 control-label">Rate Term</label>
                        <div class="col-sm-12 col-md-9 col-lg-9">
                          <select class="form-control">
                            <option>6 months</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </fieldset>
                <div class="title clearfix">
                  <div class="pull-left">
                    <span class="number">2</span>
                    Contact Details
                  </div>
                </div>
                <fieldset>
                  <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <label class="col-sm-12 col-md-3 col-lg-3 control-label">First Name</label>
                        <div class="col-sm-12 col-md-9 col-lg-9">
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <label class="col-sm-12 col-md-3 col-lg-3 control-label">Last Name</label>
                        <div class="col-sm-12 col-md-9 col-lg-9">
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <label class="col-sm-12 col-md-3 col-lg-3 control-label">City</label>
                        <div class="col-sm-12 col-md-9 col-lg-9">
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <label class="col-sm-12 col-md-3 col-lg-3 control-label">Province</label>
                        <div class="col-sm-12 col-md-9 col-lg-9">
                          <select class="form-control">
                            <option>Province</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <label class="col-sm-12 col-md-3 col-lg-3 control-label">Home Phone</label>
                        <div class="col-sm-12 col-md-9 col-lg-9">
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <label class="col-sm-12 col-md-3 col-lg-3 control-label">Evening Home</label>
                        <div class="col-sm-12 col-md-9 col-lg-9">
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <label class="col-sm-12 col-md-3 col-lg-3 control-label">Best Time to Call</label>
                        <div class="col-sm-12 col-md-9 col-lg-9">
                          <select class="form-control">
                            <option>Call Anytime</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <label class="col-sm-12 col-md-3 col-lg-3 control-label">E-mail</label>
                        <div class="col-sm-12 col-md-9 col-lg-9">
                          <input type="email" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
                </fieldset>
                <fieldset>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" value="">
                      Email me Money Saving Tips and Special Offers from MortgagesRates.ca
                    </label>
                  </div>
                  <button class="btn green-gradient">Request a Call-Back</button>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="apply-content general-padding">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-md-4 col-lg-4">
        
        <?php if($testimonials): ?>
        <?php foreach ( $testimonials as $key=>$post ) : setup_postdata( $post ); ?>
        <?php $person = get_post_meta(get_the_ID(), 'person', true); $place = get_post_meta(get_the_ID(), 'place', true); ?>
        <div class="testimonial">
          <blockquote><?php the_content(); ?></blockquote>
          <cite>
            <?php if($person): ?>
            <strong><?php echo $person; ?></strong>, 
            <?php endif; ?>
            <?php if($place) { echo $place; }?>
          </cite>
        </div>
        <?php endforeach; wp_reset_postdata(); ?>
        <?php endif; ?>

      </div>
      <div class="col-sm-8 col-md-8 col-lg-8">
        <?php if($bottom_title): ?>
        <h4 class="site-title"><?php echo $bottom_title; ?></h4>
        <?php endif; ?>
        
        <?php if($bottom_content): ?>
        <?php echo $bottom_content; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>