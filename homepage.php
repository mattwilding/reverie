<?php
/*
Template Name: Homepage
*/
get_header(); ?>

<!-- Row for top imag and text -->
<div class="row bg-white">
	<div class="small-12 large-12 columns">
		<div class="barry-padded">
			<img class="responsive" src="<?php echo get_template_directory_uri(); ?>/antigua-assets/home-featured.png" />
			<div class="overlay large-5 small-12 columns">
				<div class="overlay-content">
					<?php the_field( "top_block" ); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row barry-padded">
	<div class="small-12 columns">&nbsp;</div>
</div>
<div class="bg-grey contain-to-content">
	<div class="row">
		<div class="small-12 large-12 columns">
			<div class="barry-padded-sides text-center home-3tours-block">
				<?php the_field( "3_tours" )?>
			</div>
		</div>
	</div>
</div>
<div class="row barry-padded-sides bg-white">
	<div class="small-12 columns text-center home-strapline">
		<?php echo the_field("homepage_strapline"); ?>
	</div>
</div>
<div class="bg-green contain-to-content">
	<div class="row">
		<div class="small-12 large-12 columns">
			<div class="home-bottom-block text-center">
				<?php the_field( "bottom_block" )?>
			</div>
		</div>
	</div>
</div>		
<?php get_footer(); ?>
