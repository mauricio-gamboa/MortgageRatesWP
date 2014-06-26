<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div>
    <?php the_title( '<h2>', '</h2>' ); ?>
    <div class="meta">
      By <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?>
      <?php comments_popup_link('<span class="glyphicon icon-bubbles-2"></span>No comments', '<span class="glyphicon icon-bubbles-2"></span>1 comment', '<span class="glyphicon icon-bubbles-2"></span>% comments', 'link-green', '<span class="glyphicon icon-bubbles-2"></span>Comments are off for this post'); ?>
    </div>
    <div class="post-content">
      <?php if (has_post_thumbnail()) : the_post_thumbnail('', array('class' => 'post-thumbnail')); endif; ?>
      <?php the_content(); ?>
    </div>
  </div>
</article>

<?php get_sidebar('include-share'); ?>

<?php $author_posts = get_related_author_posts(); ?>

<?php if ($author_posts and get_the_author_meta('description')): ?>
<div class="author-info">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#bio" data-toggle="tab"><span class="glyphicon glyphicon-user"></span>Bio</a></li>
    <li><a href="#latest" data-toggle="tab"><span class="glyphicon glyphicon-list-alt"></span> Latest Posts</a></li>
  </ul>

  <div class="tab-content">
    <div class="tab-pane active" id="bio">
      <div class="bio-wrapper"><?php the_author_meta('description')?></div>
    </div>
    <div class="tab-pane" id="latest">
      <div id="carousel-example-generic" class="carousel clearfix slide" data-ride="carousel">
        <div class="carousel-inner">
          <?php foreach ( $author_posts as $key=>$post ) : setup_postdata( $post );
          if ($key == 0): ?>
          <div class="item active">
          <?php else: ?>
          <div class="item">
          <?php endif; ?>
            <article class="post">
              <?php if (has_post_thumbnail()) : the_post_thumbnail(); endif; ?>
              <div>
                <p><span class="date"><?php the_time('F j, Y'); ?></span></p>
                <?php the_title( '<p>', '</p>' ); ?>
                <a href="<?php the_permalink(); ?>" class="arrow-1 link-green">Read More</a>
              </div>
            </article>
          </div>
          <?php endforeach; wp_reset_postdata();?>
        </div>

        <ol class="carousel-indicators">
          <?php foreach ( $author_posts as $key=>$post ) : setup_postdata( $post );
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
  </div>
</div>
<?php endif; ?>

<?php if (comments_open() || get_comments_number()) { comments_template(); } ?>