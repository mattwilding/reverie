<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?> "> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width" />

	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

	<!--  iPhone Web App Home Screen Icon -->
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-retina.png" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon.png" />

	<!-- Enable Startup Image for iOS Home Screen Web App -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/mobile-load.png" />

	<!-- Startup Image iPad Landscape (748x1024) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />
	<!-- Startup Image iPad Portrait (768x1004) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />
	<!-- Startup Image iPhone (320x460) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load.png" media="screen and (max-device-width: 320px)" />
	<!-- fonts -->
	<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700|Cantarell:400,700,400italic,700italic|Quattrocento:400,700|Raleway:400,300,500,700' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>

</head>

<body <?php body_class('antialiased'); ?>>

<header class="contain-to-grid">
	<!-- Starting the Top-Bar -->
	<div class="row padding-top-1 padding-bottom-1">
		<div class="small-12 medium-3 large-3 columns text-center">
			<div class="trailbike-header-logo">
				<!-- <img src="<?php echo get_template_directory_uri(); ?>/antigua-assets/tba-header-logo.png" alt="trail bike antigua logo" description="Trail Bike Antigua" /> -->
				<img data-interchange="[<?php echo get_template_directory_uri(); ?>/antigua-assets/itct-header-logo.png, (default)], [<?php echo get_template_directory_uri(); ?>/antigua-assets/itct-header-logo-sm.png, (small)]" alt="trail bike antigua logo" description="Trail Bike Antigua" />
			</div>
		</div>
		<div class="small-12 medium-9 large-9 columns">
			<div class="trailbike-header-phone">
				01234 567890
			</div>
			<div class="trailbike-header-tagline">
				<?php echo get_bloginfo ( 'description' ); ?>
			</div>
		</div>
	</div>
</header>
<div class="row">
	<nav class="top-bar" data-topbar>
	    <ul class="title-area">
	         <li class="name">
	        	<!-- <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
	        </li>
			<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
			<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	    </ul>
	    <section class="top-bar-section">
	    <?php
	        wp_nav_menu( array(
	            'theme_location' => 'primary',
	            'container' => false,
	            'depth' => 0,
	            'items_wrap' => '<ul class="right">%3$s</ul>',
	            'fallback_cb' => 'reverie_menu_fallback', // workaround to show a message to set up a menu
	            'walker' => new reverie_walker( array(
	                'in_top_bar' => true,
	                'item_type' => 'li',
	                'menu_type' => 'main-menu'
	            ) ),
	        ) );
	    ?>
	    </section>
	</nav> 
	<!-- <nav class="top-bar" data-topbar>
	    <ul class="title-area">
	        <li class="name">
	        	<!-- <h1><a href="http://themefortress.com/demo/" title="ThemeFortress Demo" rel="home">ThemeFortress Demo</a></h1>
	        </li>
			<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone
			<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	    </ul>
	    <section class="top-bar-section">
	    <ul class="left"><li class="divider"></li><li id="menu-item-59" class="menu-item menu-item-main-menu menu-item-about"><a  href="http://themefortress.com/demo/?page_id=54">About</a></li>
<li class="divider"></li><li id="menu-item-60" class="menu-item menu-item-main-menu menu-item-news has-dropdown"><a  href="http://themefortress.com/demo/?page_id=26">News</a>
	<ul class="dropdown">
	<li id="menu-item-61" class="menu-item menu-item-main-menu menu-item-history"><a  href="http://themefortress.com/demo/?page_id=18">History</a></li>
	<li id="menu-item-62" class="menu-item menu-item-main-menu menu-item-our-staff has-dropdown"><a  href="http://themefortress.com/demo/?page_id=15">Our Staff</a>
	<ul class="dropdown">
		<li id="menu-item-83" class="menu-item menu-item-main-menu menu-item-our-company"><a  href="http://themefortress.com/demo/?page_id=13">Our Company</a></li>
	</ul>
</li>
</ul>
</li>
<li class="divider"></li><li id="menu-item-65" class="menu-item menu-item-main-menu menu-item-support"><a  href="http://themefortress.com/demo/?page_id=20">Support</a></li>
</ul>	    <ul class="right"><li class="divider"></li><li id="menu-item-74" class="menu-item menu-item-main-menu menu-item-made-with-love-in-reverie has-dropdown active"><a  href="http://themefortress.com/demo/">Made with Love in Reverie</a>
	<ul class="dropdown">
	<li id="menu-item-75" class="menu-item menu-item-main-menu menu-item-reverie-official-website"><a  href="http://themefortress.com/reverie/">Reverie Official Website</a></li>
	<li id="menu-item-76" class="menu-item menu-item-main-menu menu-item-reverie-support-forum"><a  href="http://themefortress.com/forum/">Reverie Support Forum</a></li>
	<li id="menu-item-77" class="menu-item menu-item-main-menu menu-item-reverie-github-repo"><a  href="https://github.com/milohuang/reverie/">Reverie Github Repo</a></li>
	<li id="menu-item-78" class="menu-item menu-item-main-menu menu-item-zurb-foundation"><a  href="http://foundation.zurb.com/">ZURB Foundation</a></li>
</ul>
</li>
</ul>	    </section>
	</nav> -->
	<!-- End of Top-Bar -->
	<!-- End of Top-Bar -->
</div>

<!-- Start the main container -->
<div class="container" role="document">
	<!-- <div class="row"> -->
	<!-- this should get added to the repo -->