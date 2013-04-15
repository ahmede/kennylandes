<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <!--Facebook OpenGraph tags -->
    <meta property="og:title" content="
		<?php if (function_exists('is_tag') && is_tag()) {
		single_tag_title('Tag Archive for &quot;'); echo '&quot; - ';
		} elseif (is_archive()) {
		wp_title(''); echo ' Archive - ';
		} elseif (is_search()) {
		echo 'Search for &quot;'.wp_specialchars($s).'&quot; - ';
		} elseif (!(is_404()) && (is_single()) || (is_page())) {
		wp_title(''); echo ' - ';
		} elseif (is_404()) {
		echo 'Not Found - ';
		}
		if (is_home()) {
		bloginfo('name'); echo ' | Home ';
		} else {
		bloginfo('name');
		}
		if ($paged > 1) {
		echo ' - page '. $paged;
		} ?>
		" />

	<?php if ( !(is_404()) && (is_single()) ) { ?>
	    <meta property="og:type" content="article" />
	<?php } else if ( !(is_404()) && (is_page()) ) { ?>
    	<meta property="og:type" content="blog" />
	<?php } else { ?>
    	<meta property="og:type" content="website" />
    <?php } ?>

    <meta property="og:url" content="<?php the_permalink(); ?>" />
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />

    <title>
		<?php if (function_exists('is_tag') && is_tag()) {
		single_tag_title('Tag Archive for &quot;'); echo '&quot; - ';
		} elseif (is_archive()) {
		wp_title(''); echo ' Archive - ';
		} elseif (is_search()) {
		echo 'Search for &quot;'.wp_specialchars($s).'&quot; - ';
		} elseif (!(is_404()) && (is_single()) || (is_page())) {
		wp_title(''); echo ' ';
		} elseif (is_404()) {
		echo 'Not Found - ';
		}
		if (is_front_page()) {
		bloginfo('name'); echo ' | '; bloginfo('description');
		} else {
		bloginfo('name');
		}
		if ($paged > 1) {
		echo ' - page '. $paged;
		} ?>
	</title>

    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="<?php bloginfo('name'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href='<?php bloginfo("stylesheet_url"); ?>'>
	<link rel="alternate stylesheet" href="<?php bloginfo('template_url'); ?>/css/style-green.css" />
	<link rel="alternate stylesheet" href="<?php bloginfo('template_url'); ?>/css/style-orange.css" />

    <!--[if lt IE 9]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
    <![endif]-->

    <?php wp_head(); ?>

</head>

<body>

<!-- Powers Facebook -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>

<!-- Header Background -->
<div id="header-bg"></div>
<!-- / Header Background -->

<!-- Main Container -->
<div id="body-wrapper">

	<!-- Header -->
    <div id="header" >

        <a href="/" id="logo">
        	<div id="gravatar"></div>
        </a>

        <!-- Navigation -->
        <ul id="navigation">
        	<?php wp_list_pages("title_li=&depth=2&exclude=948, 877"); ?>
        </ul><!-- /Navigation -->

    </div><!-- /Header -->

</div><!-- /Main Container -->