<?php
if ( !function_exists(child_core_mods) ) {
	function child_core_mods() {
		if ( !is_admin() ) {
			wp_register_script('images-loaded', get_template_directory_uri()."/_/js/jquery.imagesloaded.min.js", false, "1.0", true);
			wp_register_script('scroll-bar-js', get_template_directory_uri()."/_/js/perfect-scrollbar.min.js", false, "1.0", true);
			wp_register_script('functions-js', get_template_directory_uri()."/_/js/functions.js", array('jquery-fancybox', 'images-loaded'), "1.0.0", true);
			wp_enqueue_script('images-loaded');
			wp_enqueue_script('scroll-bar-js');
   		 	wp_enqueue_script('functions-js');
   		 	
   		 	wp_enqueue_style( 'font-awesome', "//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
   		 	wp_enqueue_style( 'scroll-bar-css', get_template_directory_uri()."/_/css/perfect-scrollbar.min.css");
   		 	wp_enqueue_style( 'main-styles', get_bloginfo('stylesheet_url'), false, '1.0.0','screen');
		}
	}
	child_core_mods();
}

?>