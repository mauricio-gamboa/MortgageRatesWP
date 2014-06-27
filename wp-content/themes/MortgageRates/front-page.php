<?php $testimonials = get_testimonials(3); ?>

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
<div id="banks-logos" class="general-padding">
  <div class="container">
    <h4>Compare Mortgage Rates from 100+ Banks and Brokers, including:</h4>
    <div class="row">
      <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3"><img src="<?php echo THEME_DIR?>/images/brands-1.png" alt=""></div>
      <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3"><img src="<?php echo THEME_DIR?>/images/brands-2.png" alt=""></div>
      <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3"><img src="<?php echo THEME_DIR?>/images/brands-3.png" alt=""></div>
      <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3"><img src="<?php echo THEME_DIR?>/images/brands-4.png" alt=""></div>
    </div>
    <div class="row">
      <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3"><img src="<?php echo THEME_DIR?>/images/brands-5.png" alt=""></div>
      <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3"><img src="<?php echo THEME_DIR?>/images/brands-6.png" alt=""></div>
      <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3"><img src="<?php echo THEME_DIR?>/images/brands-7.png" alt=""></div>
      <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3"><img src="<?php echo THEME_DIR?>/images/brands-8.png" alt=""></div>
    </div>
  </div>
</div>
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
<div class="more-info-box general-padding">
  <div class="container">
    <h2>MortgageRates.ca &bull; Canada's Best Mortgage Rates</h2>
    <p>MortgageRates.ca is your source for the best mortgage rates in Canada. We make it easy to find the? We make it easy to find the most competitive mortgage rates from Canadian banks and mortgage brokers. You can quickly compare fixed and variatickly compare </p>
    <a href="" class="link-green">Read more <b class="caret"></b></a>
  </div>
</div>
<div id="home-tips" class="general-padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <article class="home-tip home-tip-1">
          <img src="<?php echo THEME_DIR?>/images/tip-1.png" >
          <div>
            <h4>Unbiased Advise</h4>
            <p>We are not a broker or a lender. We simply provide a platform for you to compare providers.</p>
          </div>
        </article>
        <article class="home-tip home-tip-2">
          <img src="<?php echo THEME_DIR?>/images/tip-2.png" >
          <div>
            <h4>Save up to $250 / month</h4>
            <p>Save thousands on your mortgage by shopping around for the best rate.</p>
          </div>
        </article>
        <article class="home-tip home-tip-3">
          <img src="<?php echo THEME_DIR?>/images/tip-3.png" >
          <div>
            <h4>Undersand your Mortgage</h4>
            <p>Transparent, easy-to-understand, and complete mortgage information.</p>
          </div>
        </article>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
        <article class="home-tip home-tip-4">
          <img src="<?php echo THEME_DIR?>/images/tip-4.png" >
          <div>
            <h4>Mortgage Calculators</h4>
            <p>Evaluate how much you can afford and calculate the total cost of home ownership.</p>
          </div>
        </article>
        <article class="home-tip home-tip-5">
          <img src="<?php echo THEME_DIR?>/images/tip-5.png" >
          <div>
            <h4>Lowest rates. Period.</h4>
            <p>Only  the most competitive banks and mortgage brokes make the cut.</p>
          </div>
        </article>
        <article class="home-tip home-tip-6">
          <img src="<?php echo THEME_DIR?>/images/tip-6.png" >
          <div>
            <h4>Free, No obligation Service</h4>
            <p>We provide this all at no cost to you. That's right, it's free!</p>
          </div>
        </article>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div id="how-it-works">
          <h5>How It Works</h5>
          <ul class="list-unstyled">
            <li>
              <span>1</span>
              <div><strong>Find Rates.</strong> Search and compare the best mortgage rates in Canada.</div>
            </li>
            <li>
              <span>2</span>
              <div><strong>Apply Online.</strong> Apply for a mortgage rate from the comfort of your own home.</div>
            </li>
            <li>
              <span>3</span>
              <div><strong>Get your Free Quote.</strong> Receive a personalized mortgage quote in as fast as 1 hour!</div>
            </li>
            <li><a class="btn green-gradient">Get Started Now!</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="home-articles" class="general-padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <h5><span class="ctm-icon icon-1"></span>Mortgage Help</h5>
        <article class="home-article home-article-1">
          <img src="<?php echo THEME_DIR?>/images/article-1.png" >
          <div>
            <h4>Fixed vs. Variable Mortgage Rates</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt eget dolor vel tristique. Curabitur bibendum arcu non arcu porta, eget dictum...</p>
            <a href="" class="arrow-1 link-green">Read More</a>
          </div>
        </article>
        <article class="home-article home-article-2">
          <img src="<?php echo THEME_DIR?>/images/article-2.png" >
          <div>
            <h4>Fixed vs. Variable Mortgage Rates</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt eget dolor vel tristique. Curabitur bibendum arcu non arcu porta, eget dictum...</p>
            <a href="" class="arrow-1 link-green">Read More</a>
          </div>
        </article>
        <article class="home-article home-article-3">
          <img src="<?php echo THEME_DIR?>/images/article-3.png" >
          <div>
            <h4>Fixed vs. Variable Mortgage Rates</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt eget dolor vel tristique. Curabitur bibendum arcu non arcu porta, eget dictum...</p>
            <a href="" class="arrow-1 link-green">Read More</a>
          </div>
        </article>
        <a href="" class="arrow-1 link-green">View More Articles</a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <h5><span class="ctm-icon icon-2"></span>Latest News</h5>
        <article class="home-article home-article-6">
          <img src="<?php echo THEME_DIR?>/images/article-4.png" >
          <div>
            <h4>Three Tips to Spruce Up Credit</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt eget dolor vel tristique. Curabitur bibendum arcu non arcu porta, eget dictum...</p>
            <a href="" class="arrow-1 link-green">Read More</a>
          </div>
        </article>
        <article class="home-article home-article-6">
          <img src="<?php echo THEME_DIR?>/images/article-5.png" >
          <div>
            <h4>Three Tips to Spruce Up Credit</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt eget dolor vel tristique. Curabitur bibendum arcu non arcu porta, eget dictum...</p>
            <a href="" class="arrow-1 link-green">Read More</a>
          </div>
        </article>
        <article class="home-article home-article-6">
          <img src="<?php echo THEME_DIR?>/images/article-6.png" >
          <div>
            <h4>Three Tips to Spruce Up Credit</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt eget dolor vel tristique. Curabitur bibendum arcu non arcu porta, eget dictum...</p>
            <a href="" class="arrow-1 link-green">Read More</a>
          </div>
        </article>
        <a href="" class="arrow-1 link-green">View More Articles</a>
      </div>
    </div>
  </div>
</div>
<div id="testimonials" class="general-padding">
  <div class="container hide-xs">
    <h5>Join the 3 Million Canadians who saved by comparing the Market</h5>
    <div class="row">
      <?php if($testimonials): ?>
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
      <?php endif; ?>
    </div>
  </div>

  <?php if($testimonials): ?>
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
  <?php endif; ?>
</div>
<?php get_footer(); ?>