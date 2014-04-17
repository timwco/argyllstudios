<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<!-- HM 4.1.13 -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title><?php wp_title(''); ?></title>
	<meta name="author" content="Argyll Studios">

	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<!-- Typekit -->
	<script type="text/javascript" src="//use.typekit.net/vto2vxu.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link rel="sitemap" type="application/xml" title="Sitemap" href="http://argyllstudios.com/sitemap_index.xml" />
	
	<script src="<?php bloginfo('template_directory'); ?>/includes/modernizr-2.6.2.min.js"></script>
	
	<?php wp_head(); ?>

</head>						
<body>
<div id="wrapper">	
	<div id="container" class="clearfix">
		
		<header class="grid_18">
			<div id="logo" class="grid_7 alpha">
				<a href="<?php echo get_settings('home'); ?>">
					<img src="<?php bloginfo('template_directory'); ?>/images/as_logo.svg" alt="<?php bloginfo('name'); ?>" />
					<span>Argyll Studios</span>
				</a>
				
			</div>
			<nav class="grid_11 omega mbump">
				<span class="menuHit">MENU</span>
				<?php wp_nav_menu( array('theme_location' => 'main', 'depth' => 1 )); ?>
			</nav>
		</header>
		<div class="site_sep grid_18"></div>

		<div id="content" class="clearfix grid_18">