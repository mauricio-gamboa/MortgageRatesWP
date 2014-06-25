<?php 
  $phone = get_post_meta(get_the_ID(), 'phone', true);
  $email = get_post_meta(get_the_ID(), 'email', true);
  $facebook = get_post_meta(get_the_ID(), 'facebook', true);
  $twitter = get_post_meta(get_the_ID(), 'twitter', true);
  $linkedin = get_post_meta(get_the_ID(), 'linkedin', true);
  $youtube = get_post_meta(get_the_ID(), 'youtube', true);
  $address = get_post_meta(get_the_ID(), 'address', true);
?>

<div class="col-sm-6 col-md-4 col-lg-4">
  <h2>Send Us a Message</h2>
  <form role="form">
    <div class="form-group">
      <label>Full Name</label>
      <input type="text" class="form-control" placeholder="Full Name">
    </div>
    <div class="form-group">
      <label>E-mail</label>
      <input type="email" class="form-control" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label>Comment</label>
      <textarea class="form-control" rows="3"></textarea>
    </div>
    <button type="submit" class="btn green-gradient">Send Message</button>
  </form>
</div>

<div class="col-sm-6 col-md-4 col-lg-4">
  <div>
    <h2>Contact Information</h2>
    <?if ($phone): ?><p><span class="icon icon-phone"><?php echo $phone; ?></span></p><?php endif; ?>
    <?if ($email): ?><p><span class="icon icon-email"><?php echo $email ?></span></p><?php endif; ?>
  </div>
  <div>
    <h2>Address</h2>
    <address>
      <?if ($address): echo $address; endif; ?>
    </address>
  </div>
  <div class="show-s">
    <h2>We Are Social!</h2>
    <?if ($facebook): ?><a href="<?php echo $facebook; ?>" class="social-icon social-fb" target="_blank">Facebook</a><?php endif; ?>
    <?if ($twitter): ?><a href="<?php echo $twitter; ?>" class="social-icon social-tw" target="_blank">Twwitter</a><?php endif; ?>
    <?if ($linkedin): ?><a href="<?php echo $linkedin; ?>" class="social-icon social-li" target="_blank">LinkedIn</a><?php endif; ?>
    <?if ($youtube): ?><a href="<?php echo $youtube; ?>" class="social-icon social-yt" target="_blank">YouTube</a><?php endif; ?>
  </div>
</div>

<div class="col-sm-4 col-md-4 col-lg-4 hide-s">
  <div>
    <h2>We Are Social!</h2>
    <?if ($facebook): ?><a href="<?php echo $facebook; ?>" class="social-icon social-fb" target="_blank">Facebook</a><?php endif; ?>
    <?if ($twitter): ?><a href="<?php echo $twitter; ?>" class="social-icon social-tw" target="_blank">Twwitter</a><?php endif; ?>
    <?if ($linkedin): ?><a href="<?php echo $linkedin; ?>" class="social-icon social-li" target="_blank">LinkedIn</a><?php endif; ?>
    <?if ($youtube): ?><a href="<?php echo $youtube; ?>" class="social-icon social-yt" target="_blank">YouTube</a><?php endif; ?>
  </div>
</div>