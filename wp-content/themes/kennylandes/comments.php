<!-- Comments -->
<div id="comments">
	<?php if ( have_comments() ) : ?>
    <h4><?php comments_number('No comments', '1 Comment', '% Comments') ?></h4>
		<?php
		$comments = get_comments(array(
		    'order' => 'ASC',
		    'post_id' => $post->ID,
		    'status' => 'approve'
		));
		foreach ($comments as $comment): ?>
	    <ol class="comments-list">
	        <li class="comment">
	            <div>
					<?php echo get_avatar( $comment, 60 ); ?>
	                <div class="comment-meta">
	                    <h6 class="author">
	                    	<a href="#"><?php echo $comment->comment_author ?></a>
	                    	<span class="date"><?php comment_date('F j, Y', $comment->comment_ID) ?></span>
	                    	<!-- <a href="#" class="reply">Reply</a> -->
	                	</h6>
	                </div>
	                <div class="comment-text">
	                	<?php echo $comment->comment_content ?>
                		<?php if ($comment->comment_approved == '0') : ?>
					    	<p class="moderation">Your comment is awaiting moderation.</p>
					    <?php endif; ?>
                	</div>
	            </div>
            </li>
		<?php endforeach; ?>
	    </ol>
	<?php endif; ?>

    <!-- Comments Form -->
	<?php if (comments_open()): ?>
    <h4>Add a Comment</h4>
    <form method="post" id="comments-form" action="<?php echo site_url( '/wp-comments-post.php' ); ?>">
		<?php comment_id_fields($id); wp_comment_form_unfiltered_html_nonce(); ?>
		<?php if (!is_user_logged_in()): ?>
	        <div class="name">
                <input class="text" name="author" size="30" value="Name" onFocus="if(this.value == 'Name') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Name';}" />
            </div>
            <div class="email">
                <input class="text" name="email" size="30" value="Email" onFocus="if(this.value == 'Email') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Email';}" />
            </div>
            <div class="website">
                <input class="text last" name="website" size="30" value="Website" onFocus="if(this.value == 'Website') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Website';}" />
            </div>
		<?php endif; ?>
        <textarea cols="88" rows="12" name="comment" value="Comment" onFocus="if(this.value == 'Comment') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Comment';}"></textarea>
		<a href="#" class="btn-image" onclick="jQuery('#comments-form').submit(); return false;">Post this comment</a>
    </form>
	<?php endif; ?>
    <!-- /Comments Form -->

</div>
<!-- /Comments -->