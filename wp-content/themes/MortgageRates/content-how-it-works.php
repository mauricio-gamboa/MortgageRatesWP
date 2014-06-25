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

<div class="page">
  <div class="news-box form">
    <div class="title">Compare Mortgage Rates</div>
    <div>
      <form>
        <div class="row">
          <div class="col-sm-4 col-md-4 col-lg-4">
            <label>Select a Province</label>
            <select class="form-control">
              <option>Select a Province</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
          <div class="col-sm-4 col-md-4 col-lg-4">
            <label>Select a city</label>
            <select class="form-control">
              <option>Select a City</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
          <div class="col-sm-4 col-md-4 col-lg-4">
            <label>&nbsp;</label>
            <button class="btn green-gradient">Show Results</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<div>
  <div class="news-box">
    <div class="title"><span class="icon icon-1"></span>Mortgage Help</div>
    <h4 class="clearfix hide-xs">Frequenly Asked Questions <a class="arrow-1 link-green pull-right" href="">View All FAQ's</a></h4>
    <h4 class="clearfix show-xs">FAQ's <a class="arrow-1 link-green pull-right" href="">View All FAQ's</a></h4>
  </div>
  <div class="results">
    <ul class="list-unstyled clearfix">
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
<div>
  <div class="news-box">
    <div class="title"><span class="icon icon-10"></span>Recent Questions &amp; Answers</div>
  </div>
  <div class="faqs clearfix">
    <div class="faq">
      <img src="<?php echo THEME_DIR?>/images/ask-1.png">
      <div>
        If I already have a card, can I still take advantage of a 0% interest balance transfer
        <p>asked 2 days ago by anonymous</p>
      </div>
      <div class="meta">
        <div>
          <div class="circle-1">10</div>
          <span>Views</span>
        </div>                  
        <div>
          <div class="circle-2">3</div>
          <span>Answers</span>
        </div>
      </div>
    </div>
    <div class="faq">
      <img src="<?php echo THEME_DIR?>/images/ask-1.png">
      <div>
        If I already have a card, can I still take advantage of a 0% interest balance transfer
        <p>asked 2 days ago by anonymous</p>
      </div>
      <div class="meta">
        <div>
          <div class="circle-1">10</div>
          <span>Views</span>
        </div>                  
        <div>
          <div class="circle-2">3</div>
          <span>Answers</span>
        </div>
      </div>
    </div>
    <div class="faq">
      <img src="<?php echo THEME_DIR?>/images/ask-1.png">
      <div>
        If I already have a card, can I still take advantage of a 0% interest balance transfer
        <p>asked 2 days ago by anonymous</p>
      </div>
      <div class="meta">
        <div>
          <div class="circle-1">10</div>
          <span>Views</span>
        </div>                  
        <div>
          <div class="circle-2">3</div>
          <span>Answers</span>
        </div>
      </div>
    </div>
    <a class="arrow-1 link-green pull-right" href="">View More Questions &amp; Answers</a>
  </div>
</div>