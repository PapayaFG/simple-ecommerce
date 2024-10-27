<?php
// Theme setup
function simple_ecommerce_setup() {
    // Add WooCommerce support
    add_theme_support('woocommerce');
    // Register navigation menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'simple-ecommerce')
    ));
}
add_action('after_setup_theme', 'simple_ecommerce_setup');

// Enqueue styles and scripts
function simple_ecommerce_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'simple_ecommerce_enqueue_styles');
?>
