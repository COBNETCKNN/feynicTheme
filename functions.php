<?php 
// Enquesing custom CSS&JS files
function feynictheme_files() {
    //enqueue CSS
    wp_enqueue_style('mainCSS', get_template_directory_uri() . '/css/main.css', array(), '1.0');
    wp_enqueue_style('owlCarousel', get_template_directory_uri() . '/assets/owlCarousel/owl.carousel.min.css', array(), '1.0');

    //enqueue JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('mainJS', get_stylesheet_directory_uri() . '/js/main.js', array(), 1.0, true);
    wp_enqueue_script('owlCarouselJS', get_stylesheet_directory_uri(). '/assets/owlCarousel/owl.carousel.min.js', array(), 1.0, true);
}
add_action( 'wp_enqueue_scripts', 'feynictheme_files' );

// Registrating Custom Post Types
require_once('partials/post-types.php');

// Theme Supports
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' ); 

// Custom Image Sizes
add_image_size('nav-blog', 135, 120, true);
add_image_size('footer-accrediations', 240, 70, true);
add_image_size('social-media', 35, 35, true);
add_image_size('whoweworkwith-thumbnail', 250, 420, true);
add_image_size('partners-carousel', 150, 120, true);
add_image_size('services-thumbnail', 320, 355, true);
add_image_size('blog-thumbnail', 600, 400, true);
add_image_size('post-carousel', 410, 250, true);
add_image_size('page-hero', false, 430, true);
add_image_size('whoweworkwith-partners', 645, 250, true);
add_image_size('whoweworkwith-casestudies', 430, 250, true);
add_image_size('singleService-hero', false, 550, true);
add_image_size('approach-thumbnail', 620, 400, true);
add_image_size('guidancefor-growth', 450, 490, true);
add_image_size('about-team', 500, 500, true);
add_image_size('contact-icon', 35, 35, true);
add_image_size('about-accreditations', 400, 400, true);
add_image_size('project-testimonial', 85, 85, true);
add_image_size('block-image', 750, 450, true);
add_image_size('archive-featured', 500, 300, true);
add_image_size('related-project', 470, 300, true);



// Disabling editor on certain pages
function remove_pages_editor() {
    $disabled_pages = array(32, 16, 128, 213, 91, 359);

    $current_page_id = get_the_ID();

    if (in_array($current_page_id, $disabled_pages)) {
        remove_post_type_support('page', 'editor');
    }

    remove_post_type_support( 'post', 'editor' );
}
add_action('add_meta_boxes', 'remove_pages_editor');


// Exclude node_modules from exporting All In One Migration Plugin
add_filter( 'ai1wm_exclude_themes_from_export',
function ( $exclude_filters ) {
  $exclude_filters[] = 'feynicTheme/node_modules'; // insert your theme name
  return $exclude_filters;
} );

// Ajax filter for categories
function enqueue_custom_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('category-filter', get_template_directory_uri() . '/ajax/category-filter.js', array('jquery'), null, true);
    wp_localize_script('category-filter', 'ajax_params', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

// Ajax callback function
require_once('ajax/category-filter.php');

// Excluding pages from search results
function exclude_pages_from_search($query) {
    if ($query->is_search && !is_admin()) {
        $query->set('post_type', 'post');
    }
    return $query;
}
add_filter('pre_get_posts', 'exclude_pages_from_search');