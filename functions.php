<?php


//menu functionality
function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' )
       )
     );
  }

add_action( 'init', 'register_my_menus' );



//logo functionality
function themename_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}
 
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );



//svg file functionality
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
 }
 add_filter('upload_mimes', 'cc_mime_types');



 //adding custom post type for browser

function vvrc_browser_register_post_type() {
  $labels = array(
    'name' => __( 'Browsers', 'vvrc' ),
    'singular_name' => __( 'Browser', 'vvrc' ),
    'add_new' => __( 'New Browser', 'vvrc' ),
    'add_new_item' => __( 'Add New Browser', 'vvrc' ),
    'edit_item' => __( 'Edit Browser', 'vvrc' ),
    'new_item' => __( 'New Browser', 'vvrc' ),
    'view_item' => __( 'View Browsers', 'vvrc' ),
    'search_items' => __( 'Search Browsers', 'vvrc' ),
    'not_found' =>  __( 'No Browsers Found', 'vvrc' ),
    'not_found_in_trash' => __( 'No Browsers found in Trash', 'vvrc' ),
   );

   $args = array(
    'labels' => $labels,
    'has_archive' => true,
    'public' => true,
    'hierarchical' => false,
    'supports' => array(
     'title',
     'editor',
     'excerpt',
     'custom-fields',
     'thumbnail',
     'page-attributes'
    ),
    'taxonomies' => array('category'),
    'rewrite'   => array( 'slug' => 'Browser' ),
    'show_in_rest' => true
   );

   register_post_type( 'vvrc_Browser', $args );
}
add_action( 'init', 'vvrc_browser_register_post_type' );


?>


