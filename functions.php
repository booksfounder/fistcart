<?php

// Theme setup
function fistcart_setup() {
    // Add support for automatic feed links
    add_theme_support('automatic-feed-links');

    // Add support for post thumbnails
    add_theme_support('post-thumbnails');

    // Add support for WooCommerce
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'fistcart_setup');

// Widget registration
function fistcart_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'fistcart'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here.', 'fistcart'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'fistcart_widgets_init');

// Enqueue scripts and styles
function fistcart_scripts() {
    wp_enqueue_style('fistcart-style', get_stylesheet_uri());
    
    // Add other stylesheets or scripts here
}
add_action('wp_enqueue_scripts', 'fistcart_scripts');
