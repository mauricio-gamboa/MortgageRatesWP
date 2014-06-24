<?php if ( post_password_required() ) { return; } ?>

<div id="comments" class="comments-wrapper">
  <div class="title clearfix">
    <?php comments_number('No Comments', '1 Comment', '% Comments'); ?>
    <?php comments_popup_link('Leave Comment', 'Leave Comment', 'Leave Comment', 'btn green-gradient pull-right', 'Comments are off for this post'); ?>
  </div>
  <?php if ( have_comments() ) : ?>
  <div class="comments">
    <?php wp_list_comments(array('style' => 'div', 'avatar_size' => 0)); ?>
  </div>
<?php endif; ?>
</div>

<div class="comments-form">
  <?php 
  $comments_args = array(
    'label_submit'=>'Send Comment',
    'title_reply'=>'Leave a Comment',
    'comment_notes_after' => '',
    'comment_notes_before' => '',
    'comment_field' => '<div class="form-group"><textarea id="comment" class="form-control" name="comment" aria-required="true" rows="4"></textarea></div>',
    'fields' => array(
      'author' => 
      '<div class="form-group">' .
      '<label for="author">Your Name</label> ' .
      ( $req ? '<span class="required">*</span>' : '' ) .
      '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . ' /></div>',

      'email' =>
      '<div class="form-group">' .
      '<label for="email">Your E-mail</label> ' .
      ( $req ? '<span class="required">*</span>' : '' ) .
      '<input class="form-control" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" ' . $aria_req . ' /></div>',

      'url' =>
      '<div class="form-group">' .
      '<label for="url">Website</label> ' .
      '<input class="form-control" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" /></div>'
      )
    );

comment_form($comments_args); 

?>
</div>