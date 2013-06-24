<?php get_header(); ?>

<?php $user_info = get_userdata(1); ?>
<!--Revolution Slider -->
<div id="slider">
	<div class="fullwidthbanner-container">
		<div class="fullwidthbanner">
			<ul>
				<li data-transition="fade" data-slotamount="10" data-thumb="<?php bloginfo('template_url'); ?>/img/thumbs/thumb1.jpg">
					<img src="<?php bloginfo('template_url'); ?>/img/slides/thumb1.jpg">
	                <div class="caption lft" data-x="0" data-y="10" data-speed="900" data-start="900" data-easing="easeOutExpo"><img src="<?php bloginfo('template_url'); ?>/img/slides/glare.png"></div>
	                <div class="caption lfl" data-x="-30" data-y="20" data-speed="900" data-start="1300" data-easing="easeOutBack"><img src="<?php bloginfo('template_url'); ?>/img/kenny/handlebar.jpg"></div>
					<div class="caption lft big_grey"  data-x="506" data-y="120" data-speed="400" data-start="1700" data-easing="easeOutExpo">Hi there, I&rsquo;m <?php echo $user_info-> user_firstname; ?>.</div>
					<div class="caption lft big_orange"  data-x="506" data-y="157" data-speed="400" data-start="1900" data-easing="easeOutExpo">I&rsquo;m a web developer in San Francisco.</div>
					<div class="caption lfr medium_grey"  data-x="510" data-y="220" data-speed="300" data-start="2500" data-easing="easeOutExpo">And that&rsquo;s not all&hellip;</div>
	                <div class="caption lfr small_text"  data-x="510" data-y="250" data-speed="300" data-start="2600" data-easing="easeOutExpo">
						<?php echo $user_info-> user_description; ?>
					</div>
	                <div class="caption sfb" data-x="510" data-y="360" data-speed="1000" data-start="1800" data-easing="easeOutBack"><a target="_blank" href="/blog/" class="btn-image">Read my blog</a></div>
				</li>
<!--
				<li data-transition="slideup" data-slotamount="7" data-thumb="<?php bloginfo('template_url'); ?>/img/thumbs/thumb2.png">
					<img src="<?php bloginfo('template_url'); ?>/img/slides/thumb2.jpg">
	                <div class="caption sfb" data-x="0" data-y="10" data-speed="900" data-start="900" data-easing="easeOutSine"><img src="<?php bloginfo('template_url'); ?>/img/slides/glare2.png"></div>
	                <div class="caption lft" data-x="140" data-y="50" data-speed="900" data-start="1700" data-easing="easeOutBack"><img src="<?php bloginfo('template_url'); ?>/img/model3.png"></div>
	                <div class="caption lfb big_grey"  data-x="112" data-y="350" data-speed="600" data-start="1800" data-easing="easeOutExpo"><?php echo bloginfo('description'); ?></div>
				</li>
				
				<li data-transition="fade" data-slotamount="10" data-thumb="<?php bloginfo('template_url'); ?>/img/thumbs/thumb1.jpg">
					<img src="<?php bloginfo('template_url'); ?>/img/slides/thumb1.jpg">
	                <div class="caption lft" data-x="0" data-y="10" data-speed="900" data-start="900" data-easing="easeOutExpo"><img src="<?php bloginfo('template_url'); ?>/img/slides/glare.png"></div>
	                <div class="caption lfl" data-x="-30" data-y="20" data-speed="900" data-start="1300" data-easing="easeOutBack"><img src="<?php bloginfo('template_url'); ?>/img/model2.png"></div>
					<div class="caption sfb big_grey"  data-x="506" data-y="120" data-speed="400" data-start="1700" data-easing="easeOutExpo">Tested on iPad with Chrome</div>
					<div class="caption lft big_orange"  data-x="506" data-y="157" data-speed="400" data-start="1900" data-easing="easeOutExpo">It's a responsive world now, sites must adapting</div>
					<div class="caption lfr medium_grey"  data-x="510" data-y="230" data-speed="300" data-start="2500" data-easing="easeOutExpo">Specification</div>
	                <div class="caption lfr small_text"  data-x="510" data-y="260" data-speed="300" data-start="2600" data-easing="easeOutExpo">Contrary to popular belief Lorem Ipsum is not simply random text. It has roots<br> in a piece of classical Latin literature from 45 BC making it over 2000 years old.<br> Richard McClintock a latin professor at Hampden-Sydney College in Virginia <br>looked up one of the more obscure words.</div>
	                <!-- <div class="caption sfb" data-x="510" data-y="360" data-speed="1000" data-start="1800" data-easing="easeOutBack"><a href="#" class="btn-image">Read more</a></div> -->
				</li>				
-->
			</ul>
			<div class="tp-bannertimer"></div>
		</div>
	</div>
</div><!-- /Revolution Slider -->

<!-- Main Container -->
<div id="body-wrapper">

    <!-- Content -->
    <div id="content" class="container clearfix">

        <hr class="50">

        <!-- Features -->

        <div id="features">
		<?php 
			$args=array(
				'orderby' => 'id',
				'order' => 'ASC',
				'exclude' => '1'
				);
			$categories=get_categories($args);
			foreach($categories as $category): ?>
	        <div class="feature one-fourth">
	            <div class="feature-icon"><img src="<?php bloginfo('template_url'); ?>/img/icon-<?php echo $category->slug; ?>.png" alt="" /></div>
	            <div class="feature-description">
	                <h4><?php echo $category->name; ?></h4>
	                <p><?php echo $category->description; ?></p>
	            </div>
	        </div>					
		<?php endforeach; ?>
        </div><!-- /Features -->
        <script>
			jQuery("#features > .feature:nth-last-of-type(1)").addClass("right");
			jQuery("#features > .feature:nth-last-of-type(3)").addClass("second");
		</script>
    </div><!-- /Content -->

</div><!-- /Main Container -->
<?php get_footer(); ?>