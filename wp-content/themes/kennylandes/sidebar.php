<!-- Sidebar -->
<div id="sidebar">


    <!-- Search -->
    <h4>Search</h4>
    <?php get_search_form(); ?>
    <input type="text" onfocus="if(this.value == 'Search in blog') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Search in blog'; }" value="Search in blog" class="search">
    <!-- /Search -->

    <!-- Categories -->
    <div class="widget">
        <h4>Categories</h4>
        <ul class="categories">
		<?php wp_list_categories(array(
			'orderby' => 'name', // alphabetical
			'order' => 'ASC', // starting at A
			'show_count' => 0, // do NOT show # of posts per cat
			'title_li' => __('Categories'), // include title list item
			'exclude' => 12, // ID of category to exclude
			'depth' => 0 // levels deep to go down cat tree
		)); ?>
        </ul>
    </div>
    <!-- /Categories -->

    <!-- Tags -->
    <div class="widget">
        <h4>Tags</h4>
        <ul class="categories">
		<?php wp_tag_cloud(array(
			'smallest' => 10, // size of least used tag
			'largest' => 18, // size of most used tag
			'unit' => 'px', // unit for sizing
			'orderby' => 'name', // alphabetical
			'order' => 'ASC', // starting at A
			'exclude' => 6 // ID of tag to exclude from list
		)); ?>
        </ul>
    </div>
    <!-- /Tags -->

    <!-- Archives -->
    <div class="widget">
        <h4>Archives</h4>
        <ul class="categories">
		<?php wp_get_archives(array(
			'type' => 'postbypost', // or daily, weekly, monthly, yearly
			'limit' => 10, // maximum number shown
			'format' => 'html', // or select (dropdown), link, or custom
			'show_post_count' => false, // show number of posts per link
			'echo' => 1 // display results or return array
		)); ?>
        </ul>
    </div>
    <!-- /Archives -->

    <!-- Links -->
    <div class="widget">
        <h4>Links</h4>
        <ul class="categories">
		<?php wp_list_bookmarks(array(
			'orderby' => 'name', // alphabetical
			'order' => 'ASC', // starting at A
			'limit' => -1, // unlimited, show ALL bookmarks
			'title_li' => __('Bookmarks'), // include list item title
			'title_before' => '<h2>', // tag before title
			'title_after' => '</h2>', // tag after title
		)); ?>
        </ul>
    </div>
    <!-- /Links -->

    <!-- Text Widget -->
    <div class="widget">
        <h4>Text Widget</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dui orci, dapibus non luctus, ultrices vel nunc. Donec lacinia mattis erat amet.</p>
    </div>
    <!-- /Text Widget -->

    <!-- Accordion -->
    <div class="widget clearfix">
        <h4>Accordion widget</h4>

        <div class="accordionButton first">About Us</div>
        <div class="accordionContent">Lorem ipsum dolor sit amet, consectetur adipiscing elit ultrices vel.</div>

        <div class="accordionButton">How we work</div>
        <div class="accordionContent">Lorem ipsum dolor sit amet, consectetur adipiscing elit ultrices vel.</div>

        <div class="accordionButton">References</div>
        <div class="accordionContent">Lorem ipsum dolor sit amet, consectetur adipiscing elit ultrices vel.</div>

        <div class="accordionButton">Contact us</div>
        <div class="accordionContent">Lorem ipsum dolor sit amet, consectetur adipiscing elit ultrices vel.</div>
    </div>
    <!-- Accordion -->

    <!-- Twitter Feed -->
    <div class="widget">
        <h4>Latest Tweets</h4>
        <div class="twitter-post">

            <p>Lorem ipsum dolor sit amet, consectetur vulputate ullamcorper tellus libero. <a href="#">http://creative.com/twitter</a></p>

            <p>Lorem ipsum dolor sit amet, consectetur vulputate ullamcorper tellus libero. <a href="#">http://creative.com/twitter</a></p>

            <p>Lorem ipsum dolor sit amet, consectetur vulputate ullamcorper tellus libero. <a href="#">http://creative.com/twitter</a></p>

        </div>
    </div>
    <!-- /Twitter Feed -->



</div>
<!-- /Sidebar -->

<div class="social">
    <div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div>
    <a href="https://twitter.com/kennylandes" class="twitter-follow-button" data-show-count="false" data-size="medium" data-show-screen-name="false"></a>
</div>


<ul>
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar()) : ?>
<li><!-- stuff shown here in case no widgets active --></li>
<?php endif; ?>
</ul>

<form class="navbar-form pull-right">
    <input class="span2" type="text" placeholder="Email">
    <input class="span2" type="password" placeholder="Password">
    <button type="submit" class="btn">Sign in</button>
</form>