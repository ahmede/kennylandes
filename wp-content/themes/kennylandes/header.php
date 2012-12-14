<!DOCTYPE html>
<html class="no-js">
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
			bloginfo('name'); echo ' - '; bloginfo('description');
			} else {
			bloginfo('name');
			}
			if ($paged > 1) {
			echo ' - page '. $paged;
			} ?>
			" />
        if website
        <meta property="og:type" content="website" />
        if blog
        <meta property="og:type" content="blog" />
        if article
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php the_permalink(); ?>" />
        <meta property="og:site_name" content="Kenny Landes" />
        <meta property="og:title" content="" />
        <title>
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
			bloginfo('name'); echo ' - '; bloginfo('description');
			} else {
			bloginfo('name');
			}
			if ($paged > 1) {
			echo ' - page '. $paged;
			} ?>
		</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <style>

        </style>
        <link rel="stylesheet" href='<?php bloginfo("stylesheet_url"); ?>'>
        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>
    <body>
    <!-- Powers Facebook Like -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s);
		js.id = id;
		js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	    <header>
	        <div class="navbar navbar-inverse navbar-fixed-top">
	            <div class="navbar-inner">
	                <div class="container">
	                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                    </a>
	                    <a class="brand" href="#">Project name</a>
	                    <div class="nav-collapse collapse">
	                        <ul class="nav">
	                        	wp_list_pages()
	                            <li class="active"><a href="#">Home</a></li>
	                            <li><a href="#about">About</a></li>
	                            <li><a href="#contact">Contact</a></li>
	                            <li class="dropdown">
	                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
	                                <ul class="dropdown-menu">
	                                	wp_list_pages()
	                                    <li><a href="#">Action</a></li>
	                                    <li><a href="#">Another action</a></li>
	                                    <li><a href="#">Something else here</a></li>
	                                    <li class="divider"></li>
	                                    <li class="nav-header">Nav header</li>
	                                    <li><a href="#">Separated link</a></li>
	                                    <li><a href="#">One more separated link</a></li>
	                                </ul>
	                            </li>
	                        </ul>
	                        <?php get_search_form(); ?>
	                        <form class="navbar-form pull-right">
	                            <input class="span2" type="text" placeholder="Email">
	                            <input class="span2" type="password" placeholder="Password">
	                            <button type="submit" class="btn">Sign in</button>
	                        </form>
	                    </div><!--/.nav-collapse -->
	                </div>
	            </div>
	        </div>
	        <div class="fb-like" data-href="http://kennylandes.com" data-send="true" data-width="55" data-show-faces="false"></div>
	        <a href="https://twitter.com/kennylandes" class="twitter-follow-button" data-show-count="false" data-size="large" data-show-screen-name="false">Follow @kennylandes</a>
	    </header>