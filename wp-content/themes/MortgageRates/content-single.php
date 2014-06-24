<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div>
    <?php the_title( '<h2>', '</h2>' ); ?>
    <div class="meta">
      By <?php the_author_link(); ?> on <?php the_time('F j, Y'); ?>
      <?php comments_popup_link('<span class="glyphicon icon-bubbles-2"></span>No comments', '<span class="glyphicon icon-bubbles-2"></span>1 comment', '<span class="glyphicon icon-bubbles-2"></span>% comments', 'link-green', '<span class="glyphicon icon-bubbles-2"></span>Comments are off for this post'); ?>
    </div>
    <div class="post-content">
      <?php if (has_post_thumbnail()) : the_post_thumbnail('', array('class' => 'post-thumbnail')); endif; ?>
      <?php the_content(); ?>
    </div>
  </div>
</article>

<div class="post-share">
  Share Article
  <img src="<?php echo THEME_DIR?>/images/share-1.png">
</div>

<div class="author-info">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li><a href="#bio" data-toggle="tab"><span class="glyphicon glyphicon-user"></span>Bio</a></li>
    <li class="active"><a href="#latest" data-toggle="tab"><span class="glyphicon glyphicon-list-alt"></span> Latest Posts</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane" id="bio">Bio Here</div>
    <div class="tab-pane active" id="latest">
      <div id="carousel-example-generic" class="carousel clearfix slide" data-ride="carousel">                    
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <article class="post">
              <img src="<?php echo THEME_DIR?>/images/author-1.png" alt="">
              <div>
                <p><span class="date">July 17, 2013</span></p>
                <p>Three Tips to Spruce Up Your Credit Rating Before Applying for a Mortgage</p>
                <a href="" class="arrow-1 link-green">Read More</a>
              </div>
            </article>
          </div>
          <div class="item">
            <article class="post">
              <img src="<?php echo THEME_DIR?>/images/author-1.png" alt="">
              <div>
                <p><span class="date">July 17, 2013</span></p>
                <p>Three Tips to Spruce Up Your Credit Rating Before Applying for a Mortgage</p>
                <a href="" class="arrow-1 link-green">Read More</a>
              </div>
            </article>
          </div>
          <div class="item">
            <article class="post">
              <img src="<?php echo THEME_DIR?>/images/author-1.png" alt="">
              <div>
                <p><span class="date">July 17, 2013</span></p>
                <p>Three Tips to Spruce Up Your Credit Rating Before Applying for a Mortgage</p>
                <a href="" class="arrow-1 link-green">Read More</a>
              </div>
            </article>
          </div>
          <div class="item">
            <article class="post">
              <img src="<?php echo THEME_DIR?>/images/author-1.png" alt="">
              <div>
                <p><span class="date">July 17, 2013</span></p>
                <p>Three Tips to Spruce Up Your Credit Rating Before Applying for a Mortgage</p>
                <a href="" class="arrow-1 link-green">Read More</a>
              </div>
            </article>
          </div>
        </div>

        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>

      </div>
    </div>
  </div>
</div>

<?php if (comments_open() || get_comments_number()) { comments_template(); } ?>