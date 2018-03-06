<?php
// Feature images
add_theme_support( 'post-thumbnails' );

// Navigation menus
function register_my_menus() {
  register_nav_menus(
    array(
			'primary-menu' => __( 'Primary Menu' ),
			'extra-menu' => __( 'Extra Menu' ),
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

// Scripts and styles
function add_theme_styles() {
  wp_enqueue_style( 'main-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'add_theme_styles' );

