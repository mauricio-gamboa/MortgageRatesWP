<?php get_header(); ?>
<div id="page-title-wrapper">
  <div class="container">
    <div class="page-title">
      <h1>Mortgage Rates</h1>
      <?php get_search_form(); ?>
    </div>
  </div>
</div>
<div class="general-padding">
  <div class="container">
    <div class="row">
      <?php get_sidebar(); ?>
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        <div class="page sub-page">
          <?php while ( have_posts() ) : the_post();
          get_template_part( 'content', 'page' );
          endwhile; ?>
        </div>

        <!-- Static Element related to RatesHub -->
        <div class="page find-rate">
          <div class="title">
            Find Your Customized Rate
          </div>
          <div class="rates-nav">
            <ul class="nav nav-pills">
              <li><a href="#">Province</a></li>
              <li><a href="#">Fixed</a></li>
              <li class="active"><a href="#">Variable</a></li>
              <li><a href="#">Bank</a></li>
              <li><a href="#">Broker</a></li>
              <li><a href="#">HELOC</a></li>
              <li><a href="#">Cash Back</a></li>
              <li><a href="#">All-in-one</a></li>
            </ul>
          </div>
          <form class="form-inline" role="form">
            <div class="form-group">
              <label>Select a Province</label>
              <select class="form-control">
                <option>Select a Province</option>
                <option>Select a Province</option>
                <option>Select a Province</option>
                <option>Select a Province</option>
              </select>
            </div>
            <div class="form-group">
              <label>Select a City</label>
              <select class="form-control">
                <option>Select a City</option>
                <option>Select a City</option>
                <option>Select a City</option>
                <option>Select a City</option>
              </select>
            </div>
            <button type="submit" class="btn green-gradient">Show Results</button>
          </form>
          <div class="results">
            <ul class="list-unstyled">
              <li><a href=""><span class="sprite-1"></span>Alberta Debt Settlement</a></li>
              <li><a href=""><span class="sprite-1"></span>Alberta Debt Settlement</a></li>
              <li><a href=""><span class="sprite-1"></span>Alberta Debt Settlement</a></li>
              <li><a href=""><span class="sprite-1"></span>Alberta Debt Settlement</a></li>
              <li><a href=""><span class="sprite-1"></span>Alberta Debt Settlement</a></li>
              <li><a href=""><span class="sprite-1"></span>Alberta Debt Settlement</a></li>
              <li><a href=""><span class="sprite-1"></span>Alberta Debt Settlement</a></li>
              <li><a href=""><span class="sprite-1"></span>Alberta Debt Settlement</a></li>
              <li class="active"><a href=""><span class="sprite-1"></span>Alberta Debt Settlement</a></li>
              <li><a href=""><span class="sprite-1"></span>Alberta Debt Settlement</a></li>
              <li><a href=""><span class="sprite-1"></span>Alberta Debt Settlement</a></li>
              <li><a href=""><span class="sprite-1"></span>Alberta Debt Settlement</a></li>
              <li><a href=""><span class="sprite-1"></span>Alberta Debt Settlement</a></li>
              <li><a href=""><span class="sprite-1"></span>Alberta Debt Settlement</a></li>
              <li><a href=""><span class="sprite-1"></span>Alberta Debt Settlement</a></li>
              <li><a href=""><span class="sprite-1"></span>Alberta Debt Settlement</a></li>
              <li><a href=""><span class="sprite-1"></span>Alberta Debt Settlement</a></li>
              <li><a href=""><span class="sprite-1"></span>Alberta Debt Settlement</a></li>
              <li><a href=""><span class="sprite-1"></span>Alberta Debt Settlement</a></li>
              <li><a href=""><span class="sprite-1"></span>Alberta Debt Settlement</a></li>
              <li><a href=""><span class="sprite-1"></span>Alberta Debt Settlement</a></li>
            </ul>
          </div>
        </div>
        <!-- Static Element related to RatesHub -->
        
        <div class="post-share">
          Share Article
          <img src="<?php echo THEME_DIR?>/images/share-1.png">
        </div>
      </div>
      <?php get_sidebar('xs'); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>