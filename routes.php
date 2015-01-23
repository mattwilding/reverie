<?php
/*
Template Name: Routes

*/
get_header();

// $id = get_the_id();
// $page = get_page($id);
// echo $id;
?>
<!-- Row for top imag and text -->
<div class="row bg-white">
	<div class="hero small-12 medium-12 large-12 columns barry-padded">
		
		<?php
			$args = array('category' => 4);
			$hero = new WP_Query($args);

		    if($hero->have_posts()) :
		?>
		<ul class="example-orbit" data-orbit>
		<?php
		    while($hero->have_posts()) : $hero->the_post();
		?>	
			<li>
				<?php the_post_thumbnail('orbit'); ?>
		    	<div class="orbit-caption">
		      	<h3><?php the_title(); ?></h3>
		      	<?php the_excerpt(); ?>
		    	</div>
		  	</li>
		<?php
		   endwhile;
		?>
		</ul>
		<?php
		   else: 
			endif;
			wp_reset_postdata();
		?>
		
	</div>	
	<!-- end hero container -->
	<!-- </div> -->
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
				<?php the_field( "left_block" ); ?>
		</div>
		<div class="small-12 medium-4 large-4 columns ">
				<?php the_field( "middle_block" ); ?>
		</div>
		<div class="small-12 medium-4 large-4 columns ">
				<?php the_field( "right_block" ); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>

