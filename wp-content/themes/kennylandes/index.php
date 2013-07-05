<?php get_header(); ?>

<!-- Main Container -->
<div id="body-wrapper">

    <!-- Content -->
    <div id="content" class="container clearfix">

            <!-- Back to top -->
            <p id="back-top" style="display: block;">
                <a href="#top"><span></span></a>
            </p>
            <!-- /Back to top -->

        <!-- Page title -->
        <nav id="page-title" >

        	<h1>The only bad press is no press</h1>

        </nav><!-- /Page title -->

        <!-- Main Content -->
        <div id="main">

			<?php if (have_posts()) : ?>

				<?php while (have_posts()) : the_post(); ?>

	            <!-- News Post -->
	            <div class="post" id="post-<?php the_ID(); ?>">

	            	<div class="title">
	                	<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><h2><?php the_title(); ?></h2></a>
	                </div>

			                <ul class="post-details">
			                	<?php echo get_post_meta($post->ID, 'PostThumb', true); ?>
			                    <li class="date"><?php the_time('F jS, Y'); ?></li>
			                    <!-- <li class="comment"><?php comments_popup_link('No Comments;', '1 Comment', '% Comments'); ?></li> -->
			                </ul>
			                <div class="post-content">

		                    <?php the_excerpt('Read Full Article'); ?>

	                    	</div>

	            </div><!-- /News Post -->

				<?php endwhile; ?>

		            <!-- Pagination -->
		            <ul class="pagination">
		                <li class="prev"><?php previous_posts_link('&#10094; Newer Entries'); ?></li>
		                <li class="next"><?php next_posts_link('Previous Entries &#10095;'); ?></li>
		            </ul><!-- /Pagination -->

			<?php else : ?>

				<h2>Nothing Found</h2>

			<?php endif; ?>


        </div><!-- Main Content -->

        <?php get_sidebar(); ?>

    </div><!-- /Content -->

</div><!-- /Main Container -->

<?php get_footer(); ?>