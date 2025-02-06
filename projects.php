<?php

// Register Custom Post Type carousel
function create_carousel_cpt() {

	$labels = array(
		'name' => _x( 'Carousels', 'Post Type General Name', 'saas' ),
		'singular_name' => _x( 'carousel', 'Post Type Singular Name', 'saas' ),
		'menu_name' => _x( 'carousels', 'Admin Menu text', 'saas' ),
		'name_admin_bar' => _x( 'carousel', 'Add New on Toolbar', 'saas' ),
		'archives' => __( 'carousel Archives', 'saas' ),
		'attributes' => __( 'carousel Attributes', 'saas' ),
		'parent_item_colon' => __( 'Parent carousel:', 'saas' ),
		'all_items' => __( 'All carousels', 'saas' ),
		'add_new_item' => __( 'Add New carousel', 'saas' ),
		'add_new' => __( 'Add New', 'saas' ),
		'new_item' => __( 'New carousel', 'saas' ),
		'edit_item' => __( 'Edit carousel', 'saas' ),
		'update_item' => __( 'Update carousel', 'saas' ),
		'view_item' => __( 'View carousel', 'saas' ),
		'view_items' => __( 'View carousels', 'saas' ),
		'search_items' => __( 'Search carousel', 'saas' ),
		'not_found' => __( 'Not found', 'saas' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'saas' ),
		'featured_image' => __( 'Featured Image', 'saas' ),
		'set_featured_image' => __( 'Set featured image', 'saas' ),
		'remove_featured_image' => __( 'Remove featured image', 'saas' ),
		'use_featured_image' => __( 'Use as featured image', 'saas' ),
		'insert_into_item' => __( 'Insert into carousel', 'saas' ),
		'uploaded_to_this_item' => __( 'Uploaded to this carousel', 'saas' ),
		'items_list' => __( 'carousels list', 'saas' ),
		'items_list_navigation' => __( 'carousels list navigation', 'saas' ),
		'filter_items_list' => __( 'Filter carousels list', 'saas' ),
	);
	$args = array(
		'label' => __( 'Carousel', 'saas' ),
		'description' => __( 'carousels', 'saas' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-multisite',
		'supports' => array('title', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'carousel', $args );

}
add_action( 'init', 'create_carousel_cpt', 0 );



?>
