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
	        <input type="text" onfocus="if(this.value == 'Name') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Name'; }" value="Name" >
	        <input type="text" onfocus="if(this.value == 'E-mail') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'E-mail'; }" value="E-mail" >
	        <input type="text" onfocus="if(this.value == 'Website') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Website'; }" value="Website" class="last" >
		<?php endif; ?>
        <textarea cols="88" rows="12" onfocus="if(this.value == 'Message') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Message'; }" value="Message">Message</textarea>
		<a href="#" class="btn-image" onclick="$('#comments-form').submit(); return false;">Post this comment</a>
    </form>          
	<?php endif; ?>
    <!-- /Comments Form -->
	
</div>
<!-- /Comments -->