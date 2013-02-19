<?php get_header(); ?>
<div class="container">

    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="hero-unit">
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
        <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
    </div>
    <!-- Example row of columns -->
    <div class="row">
        <div class="span4">
            <h2>Facebook</h2>
            <p>If we're really friends, you can follow me on Facebook. Check back here for peaks of my latest posts.</p>
            <p><a class="btn" href="https://www.facebook.com/kennylandes">Friends only &raquo;</a></p>
       </div>
        <div class="span4">
            <h2>Twitter</h2>
            <p>Twitter is where I run most of my professional ideas, and keep track of things I see that interest me professionally.</p>
            <p><a class="btn" href="https://twitter.com/kennylandes">Mutual admiration &raquo;</a></p>
        </div>
        <div class="span4">
            <h2>Nike+</h2>
            <p>Check back here for my Nike+ data. Did I mention I run a lot? And let everybody in the world know?</p>
            <p><a class="btn" href="#">Street credentials &raquo;</a></p>
        </div>
    </div>
    <?php get_sidebar('posts'); ?>
    <?php get_footer(); ?>