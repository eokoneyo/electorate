<?php

require_once get_template_directory() . '/assets/plugins/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/assets/plugins/custom-post-type.php';

function electorate_setup() {

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
		'primary-menu' => __( 'Primary Menu'),
		'social-links-menu'  => __( 'Social Links Menu'),
	));

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

add_action( 'tgmpa_register', 'electorate_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function electorate_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'WPCustom Category Image',
			'slug'      => 'wpcustom-category-image',
			'required'  => true,
		),

		array(
			'name'      => 'Twitter',
			'slug'      => 'twitter',
			'required'  => true,
		),

		array(
			'name'		=> 'Facebook Comments',
			'slug'		=> 'facebook-comments-plugin',
			'required'	=> true,
		)


	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'electorate',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}

// electorate_setup
add_action( 'after_setup_theme', 'electorate_setup' );

//Load vendor files
function load_project_dep() {
    wp_register_style('materialize', get_template_directory_uri() . '/vendor/css/materialize.css');
    wp_register_style('font-awesome', get_template_directory_uri().'/vendor/css/font-awesome.min.css');
    wp_register_style('electorate', get_stylesheet_uri(), array( 'materialize','font-awesome'));
    wp_enqueue_style('electorate' );
    wp_enqueue_script('materialize_js', get_template_directory_uri() . '/vendor/js/materialize.js', array ( 'jquery' ));
    wp_enqueue_script('interactions', get_template_directory_uri().'/assets/js/interactions.js', array('materialize_js'));
    wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/7dea7fd0ac.js' );
}
add_action( 'wp_enqueue_scripts', 'load_project_dep' );


//Register Widgets Area Space for theme
function electorate_widgets_init() {

	register_sidebar(array(
	'name'          => 'Category Sidebar',
	'id'            => 'category-sidebar',
	'description'   => 'Sidebar for category page',
	'before_widget' => '<div id="category-widget">',
	'after_widget' 	=> '</div>',
	'before_title' 	=> '<h2 class="category-heading">',
	'after_title' 	=> '</h2>'
	));

	register_sidebar(array(
	'name'          => 'Footer',
	'id'            => 'footer-widget',
	'description'   => 'Widget space for our footer, should only contain 4 widget optimally',
	'before_widget' => '<div id="footer-widget" class="col s12 l3">',
	'after_widget' 	=> '</div>',
	'before_title' 	=> '<h2 class="rounded">',
	'after_title' 	=> '</h2>'
	));
}
add_action( 'widgets_init', 'electorate_widgets_init' );

//Initalize custom avatar style for electorate
add_filter('get_avatar','add_gravatar_class');

function add_gravatar_class($class) {
    $class = str_replace("class='avatar", "class='avatar circle responsive-img valign", $class);
    return $class;
}

/*
* Function for getting the category image
* https://premium.wpmudev.org/blog/how-to-add-feature-images-to-your-wordpress-categories/ 
* WPCustom Category Image must be installed
 */
function get_cat_image() {

	if (function_exists('category_image_src')) {
		return $image = category_image_src( array( 'size' => 'full' ) , false ); 
	} else {
		//can set a defualt image for categories here
		return $image = '';
	}

} 

/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

