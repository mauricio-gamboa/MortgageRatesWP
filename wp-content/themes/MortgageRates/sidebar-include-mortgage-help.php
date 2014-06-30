<?php $faqs = get_faqs(); ?>

<?php if($faqs): ?>
<div>
  <div class="news-box">
    <div class="title"><span class="icon icon-1"></span>Mortgage Help</div>
    <h4 class="clearfix hide-xs">Frequenly Asked Questions <a href="<?php echo get_post_type_archive_link('faqs'); ?>" class="arrow-1 link-green pull-right">View All FAQ's</a></h4>
    <h4 class="clearfix show-xs">FAQ's <a href="<?php echo get_post_type_archive_link('faqs'); ?>" class="arrow-1 link-green pull-right">View All FAQ's</a></h4>
  </div>
  <div class="results">
    <ul class="list-unstyled clearfix">
      <?php foreach ( $faqs as $key=>$post ) : setup_postdata( $post ); ?>
      <li><a href="<?php the_permalink(); ?>"><span class="sprite-1"></span><?php the_title(); ?></a></li>
      <?php endforeach; wp_reset_postdata(); ?>
    </ul>
  </div>
</div>
<?php endif; ?>