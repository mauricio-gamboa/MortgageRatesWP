<?php $contact_page = get_contact_page(); ?>

<?php get_header(); ?>
<div id="page-title-wrapper">
  <div class="container">
    <div class="page-title">
      <?php the_title('<h1>','</h1>') ?>
      <?php get_search_form(); ?>
    </div>
  </div>
</div>
<div class="general-padding">
  <div class="container">
    <div class="row">
      <?php get_sidebar(); ?>
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        <div class="shadow about-page">
          <?php while ( have_posts() ) : the_post();
          get_template_part( 'content', 'about' );
          endwhile; ?>
        </div>

        <?php if($contact_page): ?>
        <div class="contact-about">
          <?php foreach ( $contact_page as $key=>$post ) : setup_postdata( $post ); ?>
          <?php $phone = get_post_meta(get_the_ID(), 'phone', true); $email = get_post_meta(get_the_ID(), 'email', true); $address = get_post_meta(get_the_ID(), 'address', true); ?>
          <div class="news-box">
            <div class="title"><span class="icon icon-19"></span>Need to get contact us?</div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                <div>
                  <h2>Contact Information</h2>
                  <?if ($phone): ?><p><span class="icon icon-phone"><?php echo $phone; ?></span></p><?php endif; ?>
                  <?if ($email): ?><p><span class="icon icon-email"><?php echo $email ?></span></p><?php endif; ?>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                <div>
                  <h2>Address</h2>
                  <address>
                    <?if ($address): echo $address; endif; ?>
                  </address>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div>
                  <h2>Send Us a Message</h2>
                  <a href="<?php the_permalink(); ?>" class="btn green-gradient">Send Us a Message</a>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; wp_reset_postdata(); ?>
        </div>
        <?php endif; ?>

        <div class="post-share">
          Share Article
          <img src="<?php echo THEME_DIR?>/images/share-1.png">
        </div>
      </div>
      <?php get_sidebar('xs'); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>