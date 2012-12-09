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

// Remove or Add user contact fields, use in author page, etc. as needed
function alter_contactmethod( $contactmethods ) {

  // Remove Yahoo YIM
  if ( isset( $contactmethods['yim'] ) )
    unset( $contactmethods['yim'] );

  // Remove AIM
  if ( isset( $contactmethods['aim'] ) )
    unset( $contactmethods['aim'] );

  // Remove Jabber
  if ( isset( $contactmethods['jabber'] ) )
    unset( $contactmethods['jabber'] );

  // Add Twitter
  if ( !isset( $contactmethods['twitter'] ) )
    $contactmethods['twitter'] = 'Twitter';

  // Add Google Plus
  if ( !isset( $contactmethods['googleplus'] ) )
    $contactmethods['googleplus'] = 'Google Plus';

  // Add Facebook
  if ( !isset( $contactmethods['facebook'] ) )
    $contactmethods['facebook'] = 'Facebook';

  // Add LinkedIn
  if ( !isset( $contactmethods['linkedin'] ) )
    $contactmethods['linkedin'] = 'LinkedIn';

  // Add Skype
  if ( !isset( $contactmethods['skype'] ) )
    $contactmethods['skype'] = 'Skype';

  return $contactmethods;
}
add_filter( 'user_contactmethods', 'alter_contactmethod', 10, 1 );


?>