<?php

/**
 * Functions: WP enqueue
 *
 * @package BBWP
 */

// Enqueue CSS
function theme_styles()
{
    wp_enqueue_style('main_css', get_template_directory_uri() . '/dist/css/app.min.css');
}
add_action('wp_enqueue_scripts', 'theme_styles');

// Enqueue JS
function theme_js()
{
    wp_enqueue_script('main_js', get_template_directory_uri() . '/dist/js/app.min.js', '', '', true);
    wp_enqueue_script('aos_js', get_template_directory_uri() . '/js/aos.js', '', '', true);
}
add_action('wp_enqueue_scripts', 'theme_js');

wp_deregister_script('jquery');
