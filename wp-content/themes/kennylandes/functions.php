<?php

// Load jQuery
wp_enqueue_script('jquery');

// Widgetize sidebar
if (function_exists('register_sidebar')) {
register_sidebar(array(
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget' => '</li>',
	'before_title' => '<h1 class="widgettitle">',
	'after_title' => '</h1>',
	));
}

// Hide Admin bar
function no_admin_bar()
{
  return false;
}
add_filter('show_admin_bar' , 'no_admin_bar');

// Disable all version information
function kenny_disable_wp_version_info() { return ''; }
add_filter('the_generator', 'kenny_disable_wp_version_info');

// Allow HTML in User description field
remove_filter('pre_user_description', 'wp_filter_kses');

// Allow HTML in Category description field
$filters = array('term_description' , 'category_description' , 'pre_term_description');
foreach ( $filters as $filter ) {
remove_filter($filter, 'wptexturize');
remove_filter($filter, 'convert_chars');
remove_filter($filter, 'wpautop');
remove_filter($filter, 'wp_filter_kses');
remove_filter($filter, 'strip_tags');
}

// Customize Contact methods
function kenny_contactmethods( $contactmethods ) {
	$removes = array('yim', 'aim', 'jabber');
	foreach ($removes as $remove)
	{
		if (isset ($contactmethods[$remove] ) )
		unset ($contactmethods[$remove]);
	}
	$adds = array('address', 'address_url', 'phone', 'phone_url', 'twitter', 'google', 'facebook', 'linkedin','skype'); // <-- Add other networks here as needed
	foreach ($adds as $add)
	{
		if (!isset ($contactmethods[$add] ) )
		$contactmethods[$add] = str_replace('_', ' ', ucwords($add));
	}
  return $contactmethods;
}
add_filter( 'user_contactmethods', 'kenny_contactmethods', 10, 1 );


?>