<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:


function login_error_override()
{
  return 'Incorrect login details.';
}
add_filter('login_errors', 'login_error_override');

function my_custom_login() {
  echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/style.css" />';
}
add_action('login_head', 'my_custom_login');

add_filter( 'breadcrumb_trail', '__return_false' );
// END ENQUEUE PARENT ACTION
