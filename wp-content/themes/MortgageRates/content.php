<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if (has_post_thumbnail()) : the_post_thumbnail(); endif; ?>
  <div>
    <?php the_title( '<h2>', '</h2>' ); ?>
    <p>By <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?> </p>
    <?php the_excerpt(); ?>
    <div class="meta clearfix">
      <a href="<?php the_permalink(); ?>" class="btn green-gradient">Read Full Article</a>
      <?php comments_popup_link('<span class="glyphicon icon-bubbles-2"></span>No comments', '<span class="glyphicon icon-bubbles-2"></span>1 comment', '<span class="glyphicon icon-bubbles-2"></span>% comments', 'link-green', '<span class="glyphicon icon-bubbles-2"></span>Comments are off for this post'); ?>
    </div>
  </div>
</article>