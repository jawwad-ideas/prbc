<?php
/**
 * Theme Name: PRBC Theme
 */

function prbc_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('menus');
}
add_action('after_setup_theme', 'prbc_theme_setup');

function prbc_enqueue_scripts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap', false);
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'prbc_enqueue_scripts');


function prbc_register_menus() {
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'prbc-theme'),
    ));
}
add_action('init', 'prbc_register_menus');
?>