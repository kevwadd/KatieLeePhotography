<?php
/* ADMIN META BOX POSITIONS */
function meta_box_positions () {
global $current_user;

	if (get_current_user_id() != 1) {
	
	/* ADMIN ORDERS */
	$admin_page_order = get_user_meta( 1, 'meta-box-order_page', false ); 
	$admin_post_order = get_user_meta( 1, 'meta-box-order_post', false ); 
	
	/* USER ORDERS */
	$user_page_order = get_user_meta( get_current_user_id(), 'meta-box-order_page', false ); 
	$user_post_order = get_user_meta( get_current_user_id(), 'meta-box-order_post', false ); 
	
	$prev_value = NULL;
		
		/* Page order */
		if (!$user_page_order && $admin_page_order) {
		add_user_meta( get_current_user_id(), 'meta-box-order_page', $admin_page_order[0], true );
		} else {
			
			if ($user_page_order != $admin_page_order) {
			update_user_meta( get_current_user_id(), 'meta-box-order_page', $admin_page_order[0], $prev_value );
			}
		}
		
		/* Post order */
		if (!$user_post_order && $admin_post_order) {
		add_user_meta( get_current_user_id(), 'meta-box-order_post', $admin_post_order[0], true );
		} else {
			
			if ($user_post_order != $admin_post_order) {
			update_user_meta( get_current_user_id(), 'meta-box-order_post', $admin_post_order[0], $prev_value );
			}
		}
		
		
			
	}
	
}

add_action('admin_head', 'meta_box_positions');
?>