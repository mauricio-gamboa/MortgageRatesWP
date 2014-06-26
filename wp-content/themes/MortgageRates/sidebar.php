<?php $testimonials = get_testimonials(1); ?>

<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 hide-xs">
  <aside>
    <div class="widget">
      <h3><span class="glyphicon glyphicon-tag"></span>Compare</h3>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="">Buying a Home</a></li>
        <li class="active"><a href="">Buying a Home</a></li>
        <li><a href="">Buying a Home</a></li>
        <li><a href="">Buying a Home</a></li>
        <li><a href="">Buying a Home</a></li>
        <li><a href="">Buying a Home</a></li>
      </ul>
    </div>
    <div class="widget faq">
      <h3><span class="glyphicon glyphicon-list"></span>Resources</h3>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</a></li>
        <li class="active"><a href="">Etiam vulputate nec sem non fermentum?</a></li>
        <li><a href="">Etiam vulputate nec sem non fermentum?</a></li>
        <li><a href="">Etiam vulputate nec sem non fermentum?</a></li>
        <li><a href="">Etiam vulputate nec sem non fermentum?</a></li>
        <li><a href="">Etiam vulputate nec sem non fermentum?</a></li>
      </ul>
    </div>
    <div class="widget faq">
      <h3><span class="glyphicon glyphicon-question-sign"></span>Mortage Help</h3>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</a></li>
        <li class="active"><a href="">Etiam vulputate nec sem non fermentum?</a></li>
        <li><a href="">Etiam vulputate nec sem non fermentum?</a></li>
        <li><a href="">Etiam vulputate nec sem non fermentum?</a></li>
        <li><a href="">Etiam vulputate nec sem non fermentum?</a></li>
        <li><a href="">Etiam vulputate nec sem non fermentum?</a></li>
      </ul>
    </div>

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