<?php

if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
			'main_menu' => 'Main menu',
			'footer_menu' => 'Footer Menu'
		)
	);
}

?>