<?php 
// Enquesing custom CSS&JS files
function feynictheme_files() {
    //enqueue CSS
    wp_enqueue_style('mainCSS', get_template_directory_uri() . '/css/main.css', array(), '1.0');

    //enqueue JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('mainJS', get_stylesheet_directory_uri() . '/js/main.js', array(), 1.0, true);
}
add_action( 'wp_enqueue_scripts', 'feynictheme_files' );

// Registrating Custom Post Types
require_once('partials/post-types.php');

// Theme Supports
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' ); 

// Custom Image Sizes
add_image_size('nav-blog', 250, 100, true);
add_image_size('footer-accrediations', 240, 70, true);
add_image_size('social-media', 35, 35, true);
add_image_size('whoweworkwith-thumbnail', 250, 420, true);


// Disabling editor on certain pages
function remove_pages_editor() {
    $disabled_pages = array(32, 16);

    $current_page_id = get_the_ID();

    if (in_array($current_page_id, $disabled_pages)) {
        remove_post_type_support('page', 'editor');
    }
}
add_action('add_meta_boxes', 'remove_pages_editor');