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

			<h1><?php the_title(); ?></h1>

		</nav>
		<!-- /Page title -->

		<!-- Main Content -->
		<div id="main">

				<?php while (have_posts()) : the_post(); ?>

	            <!-- News Post -->
	            <div class="post" id="post-<?php the_ID(); ?>">

	                <div class="post-content">

	                    <?php the_content('Read Full Article'); ?>

                	</div>

	            </div><!-- /News Post -->

				<?php endwhile; ?>

		</div><!-- Main Content -->

		<?php get_sidebar(); ?>

	</div><!-- /Content -->

</div><!-- /Main Container -->

<?php get_footer(); ?>