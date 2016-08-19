<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

add_action( 'wp_enqueue_scripts', 'add_fonts' );
function add_fonts() {

	wp_enqueue_style( 'GeosansLight-NM', '//fonts.googleapis.com/css?family=EB+Garamond|Spinnaker', array(), emmet-lite-child );
	
}

// END ENQUEUE PARENT ACTION
