<?php $testimonials = get_testimonials(1); ?>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 show-xs">
  <aside class="accordion xs">
    <?php dynamic_sidebar('subpages-sidebar'); ?>
    
    <?php if($testimonials): ?>
    <?php foreach ( $testimonials as $key=>$post ) : setup_postdata( $post ); ?>
    <?php $person = get_post_meta(get_the_ID(), 'person', true); $place = get_post_meta(get_the_ID(), 'place', true); ?>
    <div class="widget testimonial">
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
  </aside>
</div>