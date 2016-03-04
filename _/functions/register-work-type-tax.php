<?php 
add_action( 'init', 'register_taxonomy_klp_worktypes_tax' );

function register_taxonomy_klp_worktypes_tax() {

    $labels = array( 
        'name' => _x( 'Work types', 'klp_worktypes_tax' ),
        'singular_name' => _x( 'Work type', 'klp_worktypes_tax' ),
        'search_items' => _x( 'Search Work types', 'klp_worktypes_tax' ),
        'popular_items' => _x( 'Popular Work types', 'klp_worktypes_tax' ),
        'all_items' => _x( 'All Work types', 'klp_worktypes_tax' ),
        'parent_item' => _x( 'Parent Work type', 'klp_worktypes_tax' ),
        'parent_item_colon' => _x( 'Parent Work type:', 'klp_worktypes_tax' ),
        'edit_item' => _x( 'Edit Work type', 'klp_worktypes_tax' ),
        'update_item' => _x( 'Update Work type', 'klp_worktypes_tax' ),
        'add_new_item' => _x( 'Add New Work type', 'klp_worktypes_tax' ),
        'new_item_name' => _x( 'New Work type', 'klp_worktypes_tax' ),
        'separate_items_with_commas' => _x( 'Separate work types with commas', 'klp_worktypes_tax' ),
        'add_or_remove_items' => _x( 'Add or remove work types', 'klp_worktypes_tax' ),
        'choose_from_most_used' => _x( 'Choose from the most used work types', 'klp_worktypes_tax' ),
        'menu_name' => _x( 'Work types', 'klp_worktypes_tax' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => false,
        'hierarchical' => true,

        'rewrite' => array( 
            'slug' => 'portfolio', 
            'with_front' => true,
            'hierarchical' => true
        ),
        'query_var' => true
    );

    register_taxonomy( 'klp_worktypes_tax', array('klp_portfolio'), $args );
}
 ?>