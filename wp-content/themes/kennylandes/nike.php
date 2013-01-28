<?php
/*
Template Name: Nike+
*/
?>
<?php get_header(); ?>
<div class="container">
    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="hero-unit">
    	<h1><?php echo get_the_title(); ?></h1>
		<div>
			<h2>My run totals</h2>
			<?php $args = array(
	            'runner'       => '1', // accepts a single user_id
	            'show_list'     => false,
	            'show_name'     => false,
	            'show_runs'     => true,
	            'show_distance' => true,
	            'show_duration' => true,
	            'show_pace'     => true,
	            'show_fuel'     => true,
	            'show_calories' => true,
			);
			echo nikeplus_individual_totals( $args ); ?>
		</div>
		<div>
			<h2>My past 25 runs</h2>
			<?php $args = array(
			    'runners'		=> '',
			    'show_pace'		=> true,
			    'num_runs'      => '25', // How many runs would you like to list. Accepts an int or '-1' to show all runs
			    'show_list'     => false,
			    'show_name'     => false,
			    'show_date'     => true,
			    'show_distance' => true,
			    'show_duration' => true,
			    'show_fuel'     => true,
			    'show_calories' => true
			);
			echo nikeplus_list_runs( $args ); ?>
		</div>
		<div>
			<h2>My personal bests</h2>
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
		</div>
        <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>