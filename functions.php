<?php

//Load vendor files
function loadMaterial () {
	wp_enqueue_style( 'materialize', get_stylesheet_directory_uri() . '/vendor/materialize.css' );
} 
add_action( 'wp_enqueue_scripts', 'loadMaterial' );
