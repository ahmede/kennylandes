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

// Global Custom Fields - use echo get_option('amazonid'); to trigger
<?php add_action('admin_menu', 'add_gcf_interface');
function add_gcf_interface() {
add_options_page('Global Custom Fields', 'Global Custom Fields', '8', 'functions',
'editglobalcustomfields');
}
function editglobalcustomfields() { ?>
	<div class="wrap">
		<h1>Global Custom Fields</h1>
		<form method="post" action="options.php">
		<?php wp_nonce_field('update-options') ?>
			<p><strong>Amazon ID:</strong><br />
			<input type="text" name="amazonid" size="45"
			value="<?php echo get_option('amazonid'); ?>" />
			</p>
			<p><input type="submit" name="Submit" value="Update Options" /></p>
			<input type="hidden" name="action" value="update" />
			<input type="hidden" name="page_options" value="amazonid" />
		</form>
	</div>
<?php } ?>