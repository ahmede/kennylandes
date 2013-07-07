<!-- Footer -->
        <div id="footer">
		<?php $user_info = get_userdata(1); ?>
        	<div id="footer-center" class="container">

            	<div class="footer-left">

                    <ul class="footer-menu">
			        	<?php wp_list_pages('title_li=&depth=1'); ?>
                    </ul>

                    <ul class="footer-address">
                    	<li><a href="<?php echo $user_info->address_url; ?>"><img src="<?php bloginfo('template_url'); ?>/img/home-icon.png"/><?php echo $user_info->address; ?></a></li>
                        <li><a href="tel:<?php echo $user_info->phone_url; ?>"><img src="<?php bloginfo('template_url'); ?>/img/phone-icon.png"/><?php echo $user_info->phone; ?></a></li>
                        <li><a href="mailto:<?php echo $user_info->user_email; ?>"><img src="<?php bloginfo('template_url'); ?>/img/email-icon.png"/><?php echo $user_info->user_email; ?></a></li>
               		</ul>

                </div>

                <div class="footer-right" id="footer-newsletter">

	                <!-- Social Links -->
	                <ul class="social-links">
	                	<li class="skype"><a href="<?php echo 'http://www.skype.com/'.$user_info->skype; ?>">Skype</a></li>
	                    <li class="facebook"><a href="<?php echo 'http://www.facebook.com/'.$user_info->facebook; ?>">Facebook</a></li>
	                    <li class="twitter"><a href="<?php echo 'http://www.twitter.com/'.$user_info->twitter; ?>">Twitter</a></li>
	                    <li class="linkedin"><a href="<?php echo 'http://www.linkedin.com/in/'.$user_info->linkedin; ?>">LinkedIn</a></li>
	                    <li class="google"><a href="<?php echo 'http://plus.google.com/u/0/'.$user_info->googleplus; ?>">Google+</a></li>
	                </ul><!-- /Social Links -->
	                
                    <!--
					<form id="newsletter"  method="post">
                        <input type="text" onfocus="if(this.value == 'E-mail here') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'E-mail here'; }" value="E-mail here" class="newsletter">
                        <button type="submit">Submit</button>
                    </form>
					-->

                </div>

            </div>

            <div id="footer-bottom">

            	<div id="footer-center-bottom" class="container">

	            	<!-- Copyright -->
	                <ul class="copyright">
	                    <li>&copy; 1967 &ndash; <?php echo date("Y"); ?> <?php echo bloginfo('name'); ?>. Now don't get all janky with my stuff, mkay?</li>
	                </ul><!-- /Copyright -->

                </div>

            </div>

        </div><!-- /Footer -->

        <script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>

		<!-- Css Switcher -->
		<!-- <script src="<?php bloginfo('template_url'); ?>/js/vendor/styleswitch.js"</script> -->
		<!-- Css Switcher -->

	    <!-- Responsive Navigation -->
	    <script src="<?php bloginfo('template_url'); ?>/js/vendor/selectnav.min.js"></script>
	    <!-- /Responsive Navigation -->

		<!-- Revolution Slider -->
		<script src="<?php bloginfo('template_url'); ?>/js/vendor/rs-plugin/jquery.themepunch.plugins.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/vendor/rs-plugin/jquery.themepunch.revolution.min.js"></script>
		<script>
			var tpj=jQuery;
			tpj.noConflict();
			tpj(document).ready(function() {
				if (tpj.fn.cssOriginal!=undefined)
					tpj.fn.css = tpj.fn.cssOriginal;
					tpj('.fullwidthbanner').revolution(
						{
							delay:9000,
							startwidth:890,
							startheight:450,
							onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off
							thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
							thumbHeight:50,
							thumbAmount:3,
							hideThumbs:200,
							navigationType:"bullet",				//bullet, thumb, none, both	 (No Shadow in Fullwidth Version !)
							navigationArrows:"verticalcentered",	//nexttobullets, verticalcentered, none
							navigationStyle:"round",				//round,square,navbar
							touchenabled:"on",						// Enable Swipe Function : on/off
							navOffsetHorizontal:0,
							navOffsetVertical:20,
							stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
							stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic
							fullWidth:"on",
							shadow:0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)
						});
			});
		</script>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>css/fullwidth.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>css/revolution-settings.css" media="screen" />
		<!-- /Revolution Slider -->

		<!-- CSS Switcher - Remove this
        <div id="settings">
    		<a class="colorbox colorblue" href="javascript:chooseStyle('none', 60)" checked="checked"></a>
			<a class="colorbox colorgreen" href="javascript:chooseStyle('green-theme', 60)"></a>
			<a class="colorbox colororange" href="javascript:chooseStyle('orange-theme', 60)"></a>
  		</div>
        /CSS Switcher - Remove this -->

        <script>
            var _gaq=[['_setAccount','UA-8348479-1'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>

        <?php wp_footer(); ?>

    </body>
</html>