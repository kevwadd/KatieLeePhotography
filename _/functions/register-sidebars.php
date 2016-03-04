<?php

if (function_exists('register_sidebar')) {
	
	register_sidebar(array(
		'name' => 'Login Widget',
		'id'   => 'login-widget',
		'description'   => 'This is just for the login widget links',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	));
	
}
   
?>