<?php

/**
 * Register a Product post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function site_custom_doctor_init()
{

	register_taxonomy( 'doctor-category', 'doctor', array(
		'hierarchical' 			=> true,
		'labels' => array(
			'name'                       => _x( 'Doctor Categories', 'taxonomy general name' ),
			'singular_name'              => _x( 'Category', 'taxonomy singular name' ),
			'search_items'               => __( 'Search Categories' ),
			'popular_items'              => __( 'Popular Categories' ),
			'all_items'                  => __( 'All Categories' ),
			'parent_item'                => null,
			'parent_item_colon'          => null,
			'edit_item'                  => __( 'Edit Category' ),
			'update_item'                => __( 'Update Category' ),
			'add_new_item'               => __( 'Add New Category' ),
			'new_item_name'              => __( 'New Category Name' ),
			'separate_items_with_commas' => __( 'Separate categories with commas' ),
			'add_or_remove_items'        => __( 'Add or remove categories' ),
			'choose_from_most_used'      => __( 'Choose from the most used categories' ),
			'not_found'                  => __( 'No categories found.' ),
			'menu_name'                  => __( 'Categories' ),
		),
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => false,
		'rewrite'               => false,
	) );

	// register_taxonomy( 'range', 'product', array(
	// 	'hierarchical' 			=> true,
	// 	'labels' => array(
	// 		'name'                       => _x( 'Range', 'taxonomy general name' ),
	// 		'singular_name'              => _x( 'Range', 'taxonomy singular name' ),
	// 		'search_items'               => __( 'Search Range' ),
	// 		'popular_items'              => __( 'Popular Range' ),
	// 		'all_items'                  => __( 'All Ranges' ),
	// 		'parent_item'                => null,
	// 		'parent_item_colon'          => null,
	// 		'edit_item'                  => __( 'Edit Range' ),
	// 		'update_item'                => __( 'Update Range' ),
	// 		'add_new_item'               => __( 'Add New Range' ),
	// 		'new_item_name'              => __( 'New Range Name' ),
	// 		'separate_items_with_commas' => __( 'Separate Range with commas' ),
	// 		'add_or_remove_items'        => __( 'Add or remove Range' ),
	// 		'choose_from_most_used'      => __( 'Choose from the most used Range' ),
	// 		'not_found'                  => __( 'No Range found.' ),
	// 		'menu_name'                  => __( 'Ranges' ),
	// 	),
	// 	'show_ui'               => true,
	// 	'show_admin_column'     => true,
	// 	'update_count_callback' => '_update_post_term_count',
	// 	'query_var'             => false,
	// 	'rewrite'               => false,
	// ) );

	$labels = array(
		'name'               => _x( 'Doctors', 'post type general name', 'site' ),
		'singular_name'      => _x( 'Doctor', 'post type singular name', 'site' ),
		'menu_name'          => _x( 'Doctors', 'admin menu', 'site' ),
		'name_admin_bar'     => _x( 'Doctor', 'add new on admin bar', 'site' ),
		'add_new'            => _x( 'Add New', 'Doctor', 'site' ),
		'add_new_item'       => __( 'Add New Doctor', 'site' ),
		'new_item'           => __( 'New Doctor', 'site' ),
		'edit_item'          => __( 'Edit Doctor', 'site' ),
		'view_item'          => __( 'View Doctor', 'site' ),
		'all_items'          => __( 'All Doctors', 'site' ),
		'search_items'       => __( 'Search Doctors', 'site' ),
		'parent_item_colon'  => __( 'Parent Doctors:', 'site' ),
		'not_found'          => __( 'No Doctors found.', 'site' ),
		'not_found_in_trash' => __( 'No Doctors found in Trash.', 'site' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description', 'site' ),
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => false,
		'taxonomies'    	 => array( 'doctor-category', 'range' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
        'menu_position'      => 20,  // 20: below Pages
        'menu_icon'      	 => 'dashicons-money', // https://developer.wordpress.org/resource/dashicons/#megaphone
		'supports'           => array( 'title', 'editor', 'revisions', 'thumbnail' )
	);

	register_post_type( 'doctor', $args );
}
add_action( 'init', 'site_custom_doctor_init' );
