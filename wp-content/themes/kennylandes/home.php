<?php get_header(); ?>
<div class="container">

    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="hero-unit">

        <!-- <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p> -->
    </div>
    <!-- Example row of columns -->
    <div class="row">
        <div class="span4">
            <h2>Nike+</h2>
				<h3>My run totals</h3>
				<?php $args = array(
		            'runner'       => '1', // accepts a single user_id
		            'show_list'     => true,
		            'show_name'     => false,
		            'show_runs'     => true,
		            'show_distance' => true,
		            'show_duration' => true,
		            'show_pace'     => true,
		            'show_fuel'     => true,
		            'show_calories' => true,
					);
				echo nikeplus_individual_totals( $args ); ?>
				<h3>My personal bests</h3>
				<?php $args = array(
			        'runner'		=> '1', // accepts a single user_id
			        'show_list'     => true,
			        'show_name'     => false,
			        'show_1k'       => false,
			        'show_1m'       => true,
			        'show_5k'       => true,
			        'show_10k'      => true,
			        'show_half'     => true,
			        'show_full'     => true,
			        'show_farthest' => true,
			        'show_longest'  => true,
			        'show_calories' => true
			    );
			    echo nikeplus_personal_records( $args ); ?>
            <p><a class="btn" href="http://nikeplus.nike.com/plus/profile/kplandes/">View details &raquo;</a></p>
        </div>
        <div class="span4">
            <h2>Facebook</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span4">
            <h2>Twitter</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
    </div>
    <?php get_sidebar('posts'); ?>
    <?php get_footer(); ?>