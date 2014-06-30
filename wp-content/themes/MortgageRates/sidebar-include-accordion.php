<?php $accordion = get_accordion(); ?>

<?php if($accordion): ?>
<div class="accordion accordion-page">
  <div class="panel-group" id="accordion">
    
    <?php foreach ( $accordion as $key=>$post ) : setup_postdata( $post ); ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $key; ?>">
            <?php the_title(); ?>
            <span class="arrow-4"></span>
          </a>
        </h4>
      </div>
      <div id="collapse-<?php echo $key; ?>" class="panel-collapse collapse <?php if($key == 0) { echo 'in'; }?>">
        <div class="panel-body">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
    <?php endforeach; wp_reset_postdata(); ?>
  </div>

</div>
<?php endif; ?>