<?php 


// Register Custom Post Type Coustom Post
function create_coustompost_cpt() {

	$labels = array(
		'name' => _x( 'Coustoms Posts', 'Post Type General Name', 'saas' ),
		'singular_name' => _x( 'Coustom Post', 'Post Type Singular Name', 'saas' ),
		'menu_name' => _x( 'Coustoms Posts', 'Admin Menu text', 'saas' ),
		'name_admin_bar' => _x( 'Coustom Post', 'Add New on Toolbar', 'saas' ),
		'archives' => __( 'Coustom Post Archives', 'saas' ),
		'attributes' => __( 'Coustom Post Attributes', 'saas' ),
		'parent_item_colon' => __( 'Parent Coustom Post:', 'saas' ),
		'all_items' => __( 'All Coustoms Posts', 'saas' ),
		'add_new_item' => __( 'Add New Coustom Post', 'saas' ),
		'add_new' => __( 'Add New', 'saas' ),
		'new_item' => __( 'New Coustom Post', 'saas' ),
		'edit_item' => __( 'Edit Coustom Post', 'saas' ),
		'update_item' => __( 'Update Coustom Post', 'saas' ),
		'view_item' => __( 'View Coustom Post', 'saas' ),
		'view_items' => __( 'View Coustoms Posts', 'saas' ),
		'search_items' => __( 'Search Coustom Post', 'saas' ),
		'not_found' => __( 'Not found', 'saas' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'saas' ),
		'featured_image' => __( 'Featured Image', 'saas' ),
		'set_featured_image' => __( 'Set featured image', 'saas' ),
		'remove_featured_image' => __( 'Remove featured image', 'saas' ),
		'use_featured_image' => __( 'Use as featured image', 'saas' ),
		'insert_into_item' => __( 'Insert into Coustom Post', 'saas' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Coustom Post', 'saas' ),
		'items_list' => __( 'Coustoms Posts list', 'saas' ),
		'items_list_navigation' => __( 'Coustoms Posts list navigation', 'saas' ),
		'filter_items_list' => __( 'Filter Coustoms Posts list', 'saas' ),
	);
	$args = array(
		'label' => __( 'Coustom Post', 'saas' ),
		'description' => __( 'Saas Theme Coustoms Post', 'saas' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-customizer',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
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
	register_post_type( 'coustompost', $args );

}
add_action( 'init', 'create_coustompost_cpt', 0 );



?>