<?php $testimonials = get_testimonials(3); ?>
<?php $home_logos = get_home_logos(); ?>
<?php $steps = get_steps(); ?>
<?php $feautures = get_features(); ?>
<?php $news_posts = get_posts_by_category('news', 3); ?>
<?php $mortgage_help_posts = get_posts_by_category('mortgage-help', 3); ?>

<?php get_header('home'); ?>
<div id="top" class="home">
  <div class="nav-container hide-xs">
    <div class="container">
      <?php wp_nav_menu(array( 'menu' => 'header','container' => 'nav','menu_class' => 'clearfix')); ?>
    </div>
  </div>
  <div class="home-top">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
          <h1>Insurance Shopping <br>Made Easy</h1>
          <p><strong>Save up to $450</strong> or more per year by comparing multiple offers from top rated companies</p>
          <p><strong>Insurance you're looking for</strong></p>

          <form class="home-form clearfix">
            <div class="form-group">
              <select class="form-control">
                <option>Saskatchewan</option>
                <option>Saskatchewan</option>
                <option>Saskatchewan</option>
                <option>Saskatchewan</option>
              </select>
            </div>
            <button type="submit" class="btn green-gradient">Go!</button>
          </form>

        </div>
        <div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-6 col-lg-offset-2 col-lg-6">
          <div id="video">
            <img src="<?php echo THEME_DIR?>/images/video.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Home Brokers and Banks Logos -->
<?php if($home_logos): ?>
<div id="banks-logos" class="general-padding">
  <div class="container">
    <h4>Compare Mortgage Rates from 100+ Banks and Brokers, including:</h4>
    <div class="row">
      <?php foreach ( $home_logos as $key=>$post ) : setup_postdata( $post ); ?>
      <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <?php if (has_post_thumbnail()) : the_post_thumbnail(); endif; ?>
      </div>
      <?php endforeach; wp_reset_postdata(); ?>
    </div>
  </div>
</div>
<?php endif; ?>
<!-- End of Home Brokers and Banks Logos -->

<!-- RatesHub API Content -->
<div id="news" class="general-padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <section class="news-box">
          <div class="title">
            Best <span>FIXED</span> Mortgage Rates
            <a href=""><span class="hide-xs">View All</span> <i class="glyphicon icon-plus"></i></a>
          </div>
          <ul class="list-unstyled">
            <li>
              <span class="year"><span>1</span> <br />Year</span>
              <img src="<?php echo THEME_DIR?>/images/news-1.png">
              <div class="rate-tip"><span>3.44%</span> <a class="btn green-gradient" href="">Get this Rate!</a></div>
            </li>
            <li>
              <span class="year"><span>1</span> <br />Year</span>
              <img src="<?php echo THEME_DIR?>/images/news-2.png">
              <div class="rate-tip"><span>3.44%</span> <a class="btn green-gradient" href="">Get this Rate!</a></div>
            </li>
            <li>
              <span class="year"><span>1</span> <br />Year</span>
              <img src="<?php echo THEME_DIR?>/images/news-3.png">
              <div class="rate-tip"><span>3.44%</span> <a class="btn green-gradient" href="">Get this Rate!</a></div>
            </li>
          </ul>
          <div class="info">
            <strong>Fixed Mortgage Rates</strong> provide you with the security of never going up over your term. The most popular fixed mortgage rate term is five years.
          </div>
        </section>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <section class="news-box">
          <div class="title">
            Best <span>VARIABLE</span> Mortgage Rates
            <a href=""><span class="hide-xs">View All</span> <i class="glyphicon icon-plus"></i></a>
          </div>
          <ul class="list-unstyled">
            <li>
              <span class="year"><span>1</span> <br />Year</span>
              <img src="<?php echo THEME_DIR?>/images/news-1.png">
              <div class="rate-tip"><span>3.44%</span> <a class="btn green-gradient" href="">Get this Rate!</a></div>
            </li>
            <li>
              <span class="year"><span>1</span> <br />Year</span>
              <img src="<?php echo THEME_DIR?>/images/news-2.png">
              <div class="rate-tip"><span>3.44%</span> <a class="btn green-gradient" href="">Get this Rate!</a></div>
            </li>
            <li>
              <span class="year"><span>1</span> <br />Year</span>
              <img src="<?php echo THEME_DIR?>/images/news-3.png">
              <div class="rate-tip"><span>3.44%</span> <a class="btn green-gradient" href="">Get this Rate!</a></div>
            </li>
          </ul>
          <div class="info">
            <strong>Variable Mortgage Rates</strong> go up and down with the current prime rate. As they carry a higher risk, they generally offer a lower rate.
          </div>
        </section>
      </div>
    </div>
  </div>
</div>
<!-- End of RatesHub API Content -->

<div class="more-info-box general-padding">
  <div class="container">
    <h2>MortgageRates.ca &bull; Canada's Best Mortgage Rates</h2>
    <p>MortgageRates.ca is your source for the best mortgage rates in Canada. We make it easy to find the? We make it easy to find the most competitive mortgage rates from Canadian banks and mortgage brokers. You can quickly compare fixed and variatickly compare </p>
    <a href="" class="link-green">Read more <b class="caret"></b></a>
  </div>
</div>

<!-- Steps and Features -->
<?php if($steps and $feautures): ?>
<div id="home-tips" class="general-padding">
  <div class="container">
    <div class="row">
      
      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
        <?php foreach ( $feautures as $key=>$post ) : setup_postdata( $post ); ?>
        <article class="home-tip home-tip-<?php echo $key; ?>">
          <?php if (has_post_thumbnail()) : the_post_thumbnail(); endif; ?>
          <div>
            <?php the_title('<h4>','</h4>'); ?>
            <?php the_content(); ?>
          </div>
        </article>
        <?php endforeach; wp_reset_postdata(); ?>
      </div>      
      
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div id="how-it-works">
          <h5>How It Works</h5>
          <ul class="list-unstyled">
            <?php foreach ( $steps as $key=>$post ) : setup_postdata( $post ); ?>
            <li>
              <span><?php echo $key + 1;?></span>
              <div><?php the_title('<strong>','.</strong>')?> <?php echo get_the_content(); ?></div>
            </li>
            <?php endforeach; wp_reset_postdata(); ?>
            <li><a class="btn green-gradient">Get Started Now!</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>
<!-- End of Steps and Features -->

<!-- Posts of the categories: Mortgage Help & News -->
<?php if($news_posts and $mortgage_help_posts):?>
<div id="home-articles" class="general-padding">
  <div class="container">
    <div class="row">
      
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <h5><span class="ctm-icon icon-1"></span>Mortgage Help</h5>
        <?php foreach ( $mortgage_help_posts as $key=>$post ) : setup_postdata( $post ); ?>
        <article class="home-article home-article-<?php echo $key+1; ?>">
          <?php if (has_post_thumbnail()) : the_post_thumbnail(); endif; ?>
          <div>
            <?php the_title('<h4>','</h4>'); ?>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="arrow-1 link-green">Read More</a>
          </div>
        </article>
        <?php endforeach; wp_reset_postdata(); ?>
        <a href="" class="arrow-1 link-green">View More Articles</a>
      </div>
      
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <h5><span class="ctm-icon icon-2"></span>Latest News</h5>
        <?php foreach ( $mortgage_help_posts as $key=>$post ) : setup_postdata( $post ); ?>
        <article class="home-article home-article-6">
          <?php if (has_post_thumbnail()) : the_post_thumbnail(); endif; ?>
          <div>
            <?php the_title('<h4>','</h4>'); ?>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="arrow-1 link-green">Read More</a>
          </div>
        </article>
        <?php endforeach; wp_reset_postdata(); ?>
        <a href="" class="arrow-1 link-green">View More Articles</a>
      </div>
    </div>

  </div>
</div>
<?php endif; ?>
<!-- end of Posts of the categories: Mortgage Help & News -->

<!-- Testimonials -->
<?php if($testimonials): ?>
<div id="testimonials" class="general-padding">
  <div class="container hide-xs">
    <h5>Join the 3 Million Canadians who saved by comparing the Market</h5>
    <div class="row">
      <?php foreach ( $testimonials as $key=>$post ) : setup_postdata( $post ); ?>
      <?php $person = get_post_meta(get_the_ID(), 'person', true); $place = get_post_meta(get_the_ID(), 'place', true); ?>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">      
        <div class="testimonial">
          <blockquote><?php the_content(); ?></blockquote>
          <cite>
            <?php if($person): ?>
            <strong><?php echo $person; ?></strong>, 
            <?php endif; ?>
            <?php if($place) { echo $place; }?>
          </cite>
        </div>
      </div>
      <?php endforeach; wp_reset_postdata(); ?>
    </div>
  </div>

  <div class="container show-xs">
    <h5>Join the 3 Million Canadians who saved by comparing the Market</h5>
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            
            <?php foreach ( $testimonials as $key=>$post ) : setup_postdata( $post ); ?>
            <?php $person = get_post_meta(get_the_ID(), 'person', true); $place = get_post_meta(get_the_ID(), 'place', true); ?>
            <?php if($key == 0): ?>
            <div class="item active">
            <?php else: ?>
            <div class="item">
            <?php endif; ?>
              <div class="testimonial">
                <blockquote><?php the_content(); ?></blockquote>
                <cite>
                  <?php if($person): ?>
                  <strong><?php echo $person; ?></strong>, 
                  <?php endif; ?>
                  <?php if($place) { echo $place; }?>
                </cite>
              </div>
            </div>
            <?php endforeach; wp_reset_postdata(); ?>
          </div>
          <ol class="carousel-indicators">
            <?php foreach ( $testimonials as $key=>$post ) : setup_postdata( $post ); ?>
            <?php if($key == 0): ?>
            <li data-target="#carousel-example-generic" data-slide-to="<?php echo $key; ?>" class="active"></li>
            <?php else: ?>
            <li data-target="#carousel-example-generic" data-slide-to="<?php echo $key; ?>"></li>
            <?php endif; ?>
            <?php endforeach; wp_reset_postdata(); ?>
          </ol>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>
<!-- End of Testimonials -->

<?php get_footer(); ?>