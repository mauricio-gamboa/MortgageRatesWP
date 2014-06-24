<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
<?php elseif ( is_search() ) : ?>
  <section><p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p></section>
<?php else : ?>
<?php endif; ?>