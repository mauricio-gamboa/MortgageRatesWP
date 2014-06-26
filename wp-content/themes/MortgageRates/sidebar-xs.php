<?php $testimonials = get_testimonials(1); ?>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 show-xs">
  <aside class="accordion">
    <div class="panel-group accordion aside-accordion" id="accordion-aside">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion-aside" href="#collapse1-aside">
              <span class="glyphicon glyphicon-tag"></span>Compare <span class="arrow-4"></span>
            </a>
          </h4>
        </div>
        <div id="collapse1-aside" class="panel-collapse collapse">
          <div class="panel-body">
            <div class="widget faq">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</a></li>
                <li class="active"><a href="">Etiam vulputate nec sem non fermentum?</a></li>
                <li><a href="">Etiam vulputate nec sem non fermentum?</a></li>
                <li><a href="">Etiam vulputate nec sem non fermentum?</a></li>
                <li><a href="">Etiam vulputate nec sem non fermentum?</a></li>
                <li><a href="">Etiam vulputate nec sem non fermentum?</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion-aside" href="#collapse2-aside">
              <span class="glyphicon glyphicon-list"></span>Resources <span class="arrow-4"></span>
            </a>
          </h4>
        </div>
        <div id="collapse2-aside" class="panel-collapse collapse">
          <div class="panel-body">
            <div class="widget faq">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</a></li>
                <li class="active"><a href="">Etiam vulputate nec sem non fermentum?</a></li>
                <li><a href="">Etiam vulputate nec sem non fermentum?</a></li>
                <li><a href="">Etiam vulputate nec sem non fermentum?</a></li>
                <li><a href="">Etiam vulputate nec sem non fermentum?</a></li>
                <li><a href="">Etiam vulputate nec sem non fermentum?</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion-aside" href="#collapse3-aside">
              <span class="glyphicon glyphicon-question-sign"></span>Mortage Help<span class="arrow-4"></span>
            </a>
          </h4>
        </div>
        <div id="collapse3-aside" class="panel-collapse collapse">
          <div class="panel-body">
            <div class="widget faq">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</a></li>
                <li class="active"><a href="">Etiam vulputate nec sem non fermentum?</a></li>
                <li><a href="">Etiam vulputate nec sem non fermentum?</a></li>
                <li><a href="">Etiam vulputate nec sem non fermentum?</a></li>
                <li><a href="">Etiam vulputate nec sem non fermentum?</a></li>
                <li><a href="">Etiam vulputate nec sem non fermentum?</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
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