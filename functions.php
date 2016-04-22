<?php


function dante_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'dante' ),
		'social'  => __( 'Social Links Menu', 'dante' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	/*
	 * Enable support for custom logo.
	 *
	 * @since Twenty Fifteen 1.5
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 248,
		'width'       => 248,
		'flex-height' => true,
	) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}


// dante_setup
add_action( 'after_setup_theme', 'dante_setup' );

//Load vendor files
function load_css_files() {
    wp_register_style('materialize', get_template_directory_uri() . '/vendor/materialize.css');
    wp_register_style('dante', get_stylesheet_uri(), array( 'materialize' ));
    wp_enqueue_style('dante' );
    wp_enqueue_script('materialize_js', get_template_directory_uri() . '/vendor/materialize.js', array ( 'jquery' ));
}
add_action( 'wp_enqueue_scripts', 'load_css_files' );


//Register Widgets Area Space for theme
function dante_widgets_init() {

	register_sidebar(array(
	'name'          => 'Post Sidebar',
	'id'            => 'post-sidebar',
	'description'   => 'Sidebar for the post page'
	));

	register_sidebar(array(
	'name'          => 'Footer',
	'id'            => 'footer-widget',
	'description'   => 'Widget space for our footer'
	));
}
add_action( 'widgets_init', 'dante_widgets_init' );

//Initalize custom avatar style for dante
add_filter('get_avatar','add_gravatar_class');

function add_gravatar_class($class) {
    $class = str_replace("class='avatar", "class='avatar circle responsive-img valign", $class);
    return $class;
}

