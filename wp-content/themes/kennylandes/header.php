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
			bloginfo('name'); echo ' | Home ';
			} else {
			bloginfo('name');
			}
			if ($paged > 1) {
			echo ' - page '. $paged;
			} ?>
			" />
        <!--if website-->
        <meta property="og:type" content="website" />
        <!--if blog-->
        <meta property="og:type" content="blog" />
        <!--if article-->
        <meta property="og:type" content="article" />
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
		</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
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
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	    <header>
	        <div class="navbar navbar-inverse navbar-fixed-top">
	            <div class="navbar-inner">
	                <div class="container">
	                    <!--<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                        <span class="icon-bar"></span>
	                    </a>-->
	                    <a class="brand" href="<?php the_permalink(); ?>"><?php bloginfo('name'); ?></a>
	                    <div class="nav-collapse collapse">
	                        <ul class="nav">
	                        	<?php wp_list_pages('title_li='); ?>
	                            <!--<li class="active"><a href="<?php the_permalink(); ?>">Home</a></li>
	                            <li class="dropdown">
	                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
	                                <ul class="dropdown-menu">
			                        	<?php wp_list_pages('title_li='); ?>
	                                    <li><a href="#">Something else here</a></li>
	                                    <li class="divider"></li>
	                                    <li class="nav-header">Nav header</li>
	                                    <li><a href="#">Separated link</a></li>
	                                </ul>
	                            </li>-->
	                        </ul>
	                    </div><!--/.nav-collapse -->
			            <div class="search span4"><?php get_search_form(); ?></div>
	                    <div class="subheader span12">
		                    <p class="description span8"><?php bloginfo('description'); ?></p>
				            <div class="social span4">
						        <div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div>
						        <a href="https://twitter.com/kennylandes" class="twitter-follow-button" data-show-count="false" data-size="medium" data-show-screen-name="false"></a>
				            </div>
		                </div>
	                </div><!-- container -->
	            </div>
	        </div>
	    </header>