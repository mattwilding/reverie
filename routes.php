<?php
/*
Template Name: Routes

*/
get_header(); ?>

<!-- Row for top imag and text -->
<div class="row bg-white">
	<div class="small-12 large-12 columns">
		<div class="barry-padded">
			<img class="responsive" src="<?php echo get_template_directory_uri(); ?>/antigua-assets/home-featured.png" />
			<div class="overlay large-5 medium-5 small-12 columns">
				<div class="overlay-content">
					<?php the_field( "top_block" ); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row barry-padded">
	<div class="large-12 small-12 columns"><? the_field( "middle_block" );?></div>
</div>
<div class="bg-green contain-to-content">
	<div class="row barry-padded-all">
		<div class="large-4 medium-4 small-12 columns">
				<?php 
					$imageArray = get_field('left_image'); // Array returned by Advanced Custom Fields
 					$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 					$imageFile = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 				?>
 			<img class="img-responsive" src="<?php echo $imageFile;?>">
		</div>
		<div class="large-4 medium-4 small-12 columns">
				<?php 
					$imageArray = get_field('middle_image'); // Array returned by Advanced Custom Fields
 					$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 					$imageFile = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 				?>
 			<img class="img-responsive" src="<?php echo $imageFile;?>">
		</div>
		<div class="large-4 medium-4 small-12 columns">
				<?php 
					$imageArray = get_field('right_image'); // Array returned by Advanced Custom Fields
 					$imageAlt = $imageArray['alt']; // Grab, from the array, the 'alt'
 					$imageFile = $imageArray['sizes']['medium']; //grab from the array, the 'sizes', and from it, the 'thumbnail'
 				?>
 			<img class="img-responsive" src="<?php echo $imageFile;?>">
		</div>
	</div>
</div>
<div class="bg-white contain-to-content">
	<div class="row barry-padded-all">
		<div class="small-12 medium-4 large-4 columns ">
				<?php the_field( "left_column_block" ); ?>
		</div>
		<div class="small-12 medium-4 large-4 columns ">
				<?php the_field( "middle_column_block" ); ?>
		</div>
		<div class="small-12 medium-4 large-4 columns ">
				<?php the_field( "right_column_block" ); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>

