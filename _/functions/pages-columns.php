<?php 
add_filter('manage_pages_columns', 'pages_edit_columns');
add_action('manage_pages_custom_column', 'show_pages_column', 10, 2);

function pages_edit_columns($columns) {
 $columns = array (
 "cb" => "<input type=\"checkbox\" />",
 "title" => "Page",
 "active" => "Published"
 );
 
  return $columns;
}

function show_pages_column($column_name, $id) {
		global $wpdb;
		 switch($column_name) {
       	    case 'active':
       	    $active = $wpdb->get_var($wpdb->prepare("SELECT post_status FROM $wpdb->posts WHERE ID = {$id} AND post_status = 'publish';"));
        	if ($active == 'publish') {
        	echo "<span class=\"tick\">Yes</span>";
        	} else {
        	echo "<span class=\"cross\">No</span>";
        	}
       		break;
      	  }
}

 ?>