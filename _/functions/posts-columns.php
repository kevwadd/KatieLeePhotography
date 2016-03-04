<?php 
add_filter('manage_posts_columns', 'posts_edit_columns');
add_action('manage_posts_custom_column', 'show_posts_column', 10, 2);

function posts_edit_columns($columns) {
  unset($columns['author']);
  return $columns;
}

function show_posts_column($column_name, $id) {
		global $wpdb;
}



 ?>