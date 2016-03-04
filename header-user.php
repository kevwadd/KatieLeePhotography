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

	<title><?php bloginfo('name'); echo ' &raquo; '; bloginfo('description'); ?></title>
	<meta name="title" content="<?php bloginfo('name'); echo ' &raquo; '; bloginfo('description');?>">
	
	<meta name="description" content="<?php bloginfo('description'); ?>">
	
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
	
	<!-- CSS: screen, mobile & print are all in the same file -->

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

	<div id="user-wrapper">
	
		<div id="user-inner-wrapper">

		<header role="user-banner">
			<a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
		</header>

		<div id="user-content" role="user-forms"><!-- #Main Content -->