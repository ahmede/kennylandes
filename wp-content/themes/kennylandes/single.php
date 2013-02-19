        <div class="container">

            <!-- Main hero unit for a primary marketing message or call to action -->
            <div class="hero-unit">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<div class="post" id="post-<?php the_ID(); ?>">
						<a href="https://twitter.com/share" class="twitter-share-button" data-via="kennylandes">Tweet</a>
						<h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

						<?php echo get_post_meta($post->ID, 'PostThumb', true); ?>

						<p class="meta"><span>Posted on</span> <?php the_time('F jS,Y'); ?> <span>by</span> <?php the_author(); ?></p>

						<?php the_content('Read Full Article'); ?>

						<p><?php the_tags('Tags: ', ', ', '<br />'); ?>Posted in <?php the_category(', '); ?><?php comments_popup_link('No Comments;', '1 Comment', '% Comments'); ?></p>
						</div>
					<?php endwhile; ?>
					<?php next_posts_link('Older Entries'); ?>
					<?php previous_posts_link('Newer Entries'); ?>
				<?php else : ?>
					<h2>Nothing Found</h2>
				<?php endif; ?>
                <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
            </div>
            <?php if ( (get_the_author_meta('twitter')) ) { ?><a href="<?php echo 'http://www.twitter.com/'.get_the_author_meta('twitter') ?>" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">&nbsp;</a><?php } ?>
            <?php if ( (get_the_author_meta('googleplus')) ) { ?><a href="<?php echo 'http://www.plus.google.com/'.get_the_author_meta('googleplus') ?>" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">&nbsp;</a><?php } ?>
            <?php if ( (get_the_author_meta('facebook')) ) { ?><a href="<?php echo 'http://www.facebook.com/'.get_the_author_meta('facebook') ?>" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">&nbsp;</a><?php } ?>
            <?php if ( (get_the_author_meta('linkedin')) ) { ?><a href="<?php echo 'http://www.linkedin.com/'.get_the_author_meta('linkedin') ?>" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">&nbsp;</a><?php } ?>
            <?php if ( (get_the_author_meta('skype')) ) { ?><a href="<?php echo 'http://www.skype.com/'.get_the_author_meta('skype') ?>" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">&nbsp;</a><?php } ?>
            <?php get_sidebar('posts'); ?>
            <?php get_search_form(); ?>
            <?php comments_template(); ?>
            <?php get_footer('posts'); ?>
