<?php
/**
 * Declare Custom post types for theme
 *
 * http://www.wpbeginner.com/wp-tutorials/how-to-create-custom-post-types-in-wordpress/
 * 
 */


// Register Custom Post Type for NewsFeed
function newsfeed_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'News Feed', 'Post Type General Name', 'electorate' ),
		'singular_name'         => _x( 'news', 'Post Type Singular Name', 'electorate' ),
		'menu_name'             => __( 'News Feed', 'electorate' ),
		'name_admin_bar'        => __( 'News Feed', 'electorate' ),
		'archives'              => __( 'Item Archives', 'electorate' ),
		'parent_item_colon'     => __( 'Parent Item:', 'electorate' ),
		'all_items'             => __( 'All Items', 'electorate' ),
		'add_new_item'          => __( 'Add New Item', 'electorate' ),
		'add_new'               => __( 'Add New', 'electorate' ),
		'new_item'              => __( 'New Item', 'electorate' ),
		'edit_item'             => __( 'Edit Item', 'electorate' ),
		'update_item'           => __( 'Update Item', 'electorate' ),
		'view_item'             => __( 'View Item', 'electorate' ),
		'search_items'          => __( 'Search Item', 'electorate' ),
		'not_found'             => __( 'Not found', 'electorate' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'electorate' ),
		'featured_image'        => __( 'Featured Image', 'electorate' ),
		'set_featured_image'    => __( 'Set featured image', 'electorate' ),
		'remove_featured_image' => __( 'Remove featured image', 'electorate' ),
		'use_featured_image'    => __( 'Use as featured image', 'electorate' ),
		'insert_into_item'      => __( 'Insert into item', 'electorate' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'electorate' ),
		'items_list'            => __( 'Items list', 'electorate' ),
		'items_list_navigation' => __( 'Items list navigation', 'electorate' ),
		'filter_items_list'     => __( 'Filter items list', 'electorate' ),
	);
	$args = array(
		'label'                 => __( 'NewsFeed', 'electorate' ),
		'description'           => __( 'Contains all newsfeed articles', 'electorate' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'newsfeed', $args );

}

add_action( 'init', 'newsfeed_custom_post_type', 0 );


// Register Custom Post Type for Video
function video_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Videos', 'Post Type General Name', 'electorate' ),
		'singular_name'         => _x( 'Video', 'Post Type Singular Name', 'electorate' ),
		'menu_name'             => __( 'Videos', 'electorate' ),
		'name_admin_bar'        => __( 'Video', 'electorate' ),
		'archives'              => __( 'Item Archives', 'electorate' ),
		'parent_item_colon'     => __( 'Parent Item:', 'electorate' ),
		'all_items'             => __( 'All Videos', 'electorate' ),
		'add_new_item'          => __( 'Add New Video', 'electorate' ),
		'add_new'               => __( 'Add New', 'electorate' ),
		'new_item'              => __( 'New Video', 'electorate' ),
		'edit_item'             => __( 'Edit Item', 'electorate' ),
		'update_item'           => __( 'Update Item', 'electorate' ),
		'view_item'             => __( 'View Video', 'electorate' ),
		'search_items'          => __( 'Search Videos', 'electorate' ),
		'not_found'             => __( 'Not found', 'electorate' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'electorate' ),
		'featured_image'        => __( 'Featured Image', 'electorate' ),
		'set_featured_image'    => __( 'Set featured image', 'electorate' ),
		'remove_featured_image' => __( 'Remove featured image', 'electorate' ),
		'use_featured_image'    => __( 'Use as featured image', 'electorate' ),
		'insert_into_item'      => __( 'Insert into item', 'electorate' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'electorate' ),
		'items_list'            => __( 'Items list', 'electorate' ),
		'items_list_navigation' => __( 'Items list navigation', 'electorate' ),
		'filter_items_list'     => __( 'Filter items list', 'electorate' ),
	);
	$args = array(
		'label'                 => __( 'Video', 'electorate' ),
		'description'           => __( 'Video Description', 'electorate' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	//add_post_type_support( 'video', 'post-formats', array('video') );
	register_post_type( 'video', $args );

}

add_action( 'init', 'video_custom_post_type', 0 );

//Set default post formats for post types

function set_default_post_format( $format ) {
    global $post_type;

    switch( $post_type ) {
        case 'video' :
            $format = 'video';
            break;
        case 'newsfeed' :
            $format = 'quote';
            break;
    }

    return $format;
}

add_filter( 'option_default_post_format', 'set_default_post_format' );





