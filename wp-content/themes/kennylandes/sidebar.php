<aside>
<?php wp_get_archives(array(
	'type' => 'postbypost', // or daily, weekly, monthly, yearly
	'limit' => 10, // maximum number shown
	'format' => 'html', // or select (dropdown), link, or custom
	'show_post_count' => false, // show number of posts per link
	'echo' => 1 // display results or return array
)); ?>

<?php wp_tag_cloud(array(
	'smallest' => 10, // size of least used tag
	'largest' => 18, // size of most used tag
	'unit' => 'px', // unit for sizing
	'orderby' => 'name', // alphabetical
	'order' => 'ASC', // starting at A
	'exclude' => 6 // ID of tag to exclude from list
)); ?>

<?php wp_list_categories(array(
	'orderby' => 'name', // alphabetical
	'order' => 'ASC', // starting at A
	'show_count' => 0, // do NOT show # of posts per cat
	'title_li' => __('Categories'), // include title list item
	'exclude' => 12, // ID of category to exclude
	'depth' => 0 // levels deep to go down cat tree
)); ?>

<?php wp_list_bookmarks(array(
	'orderby' => 'name', // alphabetical
	'order' => 'ASC', // starting at A
	'limit' => -1, // unlimited, show ALL bookmarks
	'title_li' => __('Bookmarks'), // include list item title
	'title_before' => '<h2>', // tag before title
	'title_after' => '</h2>', // tag after title
)); ?>


<ul>
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar()) : ?>
<li><!-- stuff shown here in case no widgets active --></li>
<?php endif; ?>
</ul>

</aside>