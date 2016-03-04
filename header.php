<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="www-katieleephotography-com" data-template-set="klp-wordpress-theme" profile="http://gmpg.org/xfn/11">

	<meta charset="<?php bloginfo('charset'); ?>">
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title><?php bloginfo('name'); echo ' &raquo; '; bloginfo('description'); ?></title>
	<meta name="title" content="<?php bloginfo('name'); echo ' &raquo; '; bloginfo('description');?>">
	
	<meta name="description" content="<?php bloginfo('description'); ?>">
	
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
	
	<!-- CSS: screen, mobile & print are all in the same file -->
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	
	<div id="wrapper" class="clearfix side-closed">

		<header role="banner" class="side-closed">
			<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
			
			<?php
			global $post;
			?>
			
			<nav id="icon-nav">
				<a href="<?php echo get_option('home'); ?>/" title="Home page"<?php echo (is_front_page()) ? ' class="active"': ''; ?>><i class="fa fa-home fa-lg"></i><span>Home</span></a>
				<a href="#contact" title="Contact Katie" id="contact-link" class="inactive"><i class="fa fa-envelope fa-lg"></i><span>Contact</span></a>
			</nav>
			
			<?php wp_nav_menu(array( 'container_id' => 'main-nav', 'container' => 'nav', 'theme_location' => 'main_menu' ) ); ?>
		
		</header>

		<div id="main-content" class="content<?php echo (is_front_page()) ? ' home-page':''; ?>" role="content"><!-- #Main Content -->