<?php 
function get_options_tests () {
global $wpdb;
global $current_screen;
global $post;
global $posts;
global $terms;

$terms = wp_get_post_terms($post->ID, 'klwp_venues');

echo '<pre>';print_r($terms);echo '</pre>';
}
add_action('admin_head', 'get_options_tests');
?>