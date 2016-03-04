<?php 
add_action( 'init', 'register_cpt_klp_portfolio' );

function register_cpt_klp_portfolio() {

    $labels = array( 
        'name' => _x( 'Portfolios', 'klp_portfolio' ),
        'singular_name' => _x( 'Work', 'klp_portfolio' ),
        'add_new' => _x( 'Add New', 'klp_portfolio' ),
        'add_new_item' => _x( 'Add New Work', 'klp_portfolio' ),
        'edit_item' => _x( 'Edit Work', 'klp_portfolio' ),
        'new_item' => _x( 'New Work', 'klp_portfolio' ),
        'view_item' => _x( 'View Work', 'klp_portfolio' ),
        'search_items' => _x( 'Search Portfolios', 'klp_portfolio' ),
        'not_found' => _x( 'No portfolios found', 'klp_portfolio' ),
        'not_found_in_trash' => _x( 'No portfolios found in Trash', 'klp_portfolio' ),
        'parent_item_colon' => _x( 'Parent Portfolio:', 'klp_portfolio' ),
        'menu_name' => _x( 'Portfolios', 'klp_portfolio' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Katie Lee Photography Portfolios post type',
        'supports' => array( 'title', 'editor', 'page-attributes' ), 
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => '/wp-content/themes/KatieLeePhotography/_/img/porfolio-icon.png',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array( 
            'slug' => 'work', 
            'with_front' => true,
            'feeds' => true,
            'pages' => true
        ),
        'capability_type' => 'post'
    );

    register_post_type( 'klp_portfolio', $args );
}?>