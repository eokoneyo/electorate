<?php

//Load vendor files
function load_css_files() {
    wp_register_style('materialize', get_template_directory_uri() . '/vendor/materialize.css');
    wp_register_style('dante', get_stylesheet_uri(), array( 'materialize' ));
    wp_enqueue_style('dante' );
    wp_enqueue_script('materialize_js', get_template_directory_uri() . '/vendor/materialize.js', array ( 'jquery' ));
}
add_action( 'wp_enqueue_scripts', 'load_css_files' );


//Register Widgets Area Space

/**
* Creates a sidebar
* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
*/
$args = array(
	'name'          => 'Post Sidebar',
	'id'            => 'post-sidebar',
	'description'   => 'Sidebar for the post page'
);

register_sidebar( $args );

