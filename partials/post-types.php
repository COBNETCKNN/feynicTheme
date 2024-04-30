<?php 
// Creating of Custom Post Types
function feynictheme_post_types() {

    // What We Do post type
    register_post_type('project', array(
        'public' => true,
        'labels' => array( 
            'name' => 'Projects',
            'add_new_item' => 'Add New Project',
            'edit_item' => 'Edit Project',
            'all_items' => 'All Projects',
            'singular_name' => 'Project',
        ),
        'menu_icon' => 'dashicons-hammer',
        'rewrite' => array('slug' => 'project'),
        'has_archive' => true,
        'supports' => array('thumbnail', 'title'),
        'show_in_rest' => true,
        'show_in_nav_menus' => true
    ));

    // What We Do post type
    register_post_type('service', array(
        'public' => true,
        'labels' => array( 
            'name' => 'What We Do',
            'add_new_item' => 'Add New Service',
            'edit_item' => 'Edit Service',
            'all_items' => 'All Services',
            'singular_name' => 'Service',
        ),
        'menu_icon' => 'dashicons-admin-appearance',
        'rewrite' => array('slug' => 'services'),
        'has_archive' => true,
        'supports' => array('thumbnail', 'title'),
        'show_in_rest' => true,
        'show_in_nav_menus' => true
    ));

    // Who we work with post type
    register_post_type('partners', array(
        'public' => true,
        'labels' => array( 
            'name' => 'Who We Work With',
            'add_new_item' => 'Add New Partner',
            'edit_item' => 'Edit Partner',
            'all_items' => 'All Partners',
            'singular_name' => 'Partner',
        ),
        'menu_icon' => 'dashicons-groups',
        'rewrite' => array('slug' => 'partners'),
        'has_archive' => true,
        'supports' => array('thumbnail', 'title'),
        'show_in_rest' => true,
        'show_in_nav_menus' => true
    ));

    // Testimonials post type
    register_post_type('testmionial', array(
        'public' => true,
        'labels' => array( 
            'name' => 'Testimonials',
            'add_new_item' => 'Add New Testimonial',
            'edit_item' => 'Edit Testimonial',
            'all_items' => 'All Testimonial',
            'singular_name' => 'Testimonial',
        ),
        'menu_icon' => 'dashicons-heart',
        'rewrite' => array('slug' => 'testimonials'),
        'has_archive' => true,
        'supports' => array('thumbnail', 'title'),
        'show_in_rest' => true,
        'show_in_nav_menus' => true
    ));
}
add_action('init', 'feynictheme_post_types');