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

//Page Slug Body Class
function add_slug_body_class( $classes ) {
  global $post;
  if ( isset( $post ) ) {
    $classes[] = $post->post_type . '-' . $post->post_name;
  }
  return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

add_action('wp_logout','go_home');
function go_home(){
  wp_redirect( home_url() );
  exit();
}
// END ENQUEUE PARENT ACTION
