<?php $my_posts = get_my_posts(3); ?>

<?php if($my_posts): ?>
<div>
  <div class="news-box">
    <div class="title"><span class="icon icon-22"></span>Mortgage Rates Blog</div>
  </div>
  <div class="faqs clearfix posts">
    <?php foreach ( $my_posts as $key=>$post ) : setup_postdata( $post ); ?>
    <div class="faq">
      <?php if (has_post_thumbnail()) : the_post_thumbnail(); endif; ?>
      <div>
        <?php the_title('<h3>', '</h3>'); ?>
        <p><?php the_time('F j, Y'); ?> | <?php comments_popup_link('No comments', '1 comment', '% comments'); ?></p>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" class="arrow-1 link-green">Read More</a>
      </div>
    </div>
    <?php endforeach; wp_reset_postdata(); ?>
    <a href=" <?php echo home_url(); ?> " class="arrow-1 link-green pull-right">View More Blog Posts</a>
  </div>
</div>
<?php endif; ?>