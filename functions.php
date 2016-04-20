<?php

//Load vendor files
function load_css_files() {
    wp_register_style( 'materialize', get_template_directory_uri() . '/vendor/materialize.css');
    wp_register_style( 'dante', get_stylesheet_uri(), array( 'materialize' ));
    wp_enqueue_style( 'dante' );
}
add_action( 'wp_enqueue_scripts', 'load_css_files' );
