<?php

add_action( 'admin_head', 'change_icons');
        	
function change_icons() {
    global $post_type;
    $temp_directory = get_bloginfo('template_directory');
    
?>
<style>
	<?php if ($post_type == 'post') : ?>
	#icon-edit { background: transparent url(<?php echo $temp_directory; ?>/_/img/news-icon-big.png) no-repeat center center; }		
	<?php endif; ?>

	<?php if ($post_type == 'klw_portfolio') : ?>
	#icon-edit { background: transparent url(<?php echo $temp_directory; ?>/_/img/portfolio-icon-big.png) no-repeat center center; }		
	<?php endif; ?>
		
 </style>
    <?php
}


?>