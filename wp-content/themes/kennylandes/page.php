<?php get_header(); ?>

		<div class="social">
		    <div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div>
		    <a href="https://twitter.com/kennylandes" class="twitter-follow-button" data-show-count="false" data-size="medium" data-show-screen-name="false"></a>
		</div>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">

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


	<?php get_sidebar(); ?>
    <?php get_footer(); ?>