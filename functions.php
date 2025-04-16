<?php
if (!defined('ABSPATH')) exit; // Защита от прямого доступа

function my_theme_enqueue_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('custom-css', get_template_directory_uri() . '/assets/css/custom.css');
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

function my_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form'));
    register_nav_menus(array(
        'primary' => __('Основное меню', 'my-theme'),
    ));
}
add_action('after_setup_theme', 'my_theme_setup');