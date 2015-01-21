	</div><!-- Row End -->
</div><!-- Container End -->

<footer class="bg-grey full-width" role="contentinfo">
	 <!-- <div class="row">
		<div class="large-4 columns">
			<?php wp_nav_menu(array('theme_location' => 'utility', 'container' => false, 'menu_class' => 'inline-list')); ?>
		</div>
	</div> -->
	<div class="row middle-widget-border">
		<?php dynamic_sidebar("Footer"); ?>
	</div>
</footer>

<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>
	
</body>
</html>