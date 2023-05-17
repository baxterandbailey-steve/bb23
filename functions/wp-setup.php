<?php

/**
 * Functions: WP setup
 *
 * @package BBWP
 */

// Setup menus
function register_theme_menus()
{
    register_nav_menus( // register multiple custom menus
        array(
            'header-menu' => __('Header'),
            'footer-menu' => __('Footer')
        )
    );
}
add_action('init', 'register_theme_menus');

// Enable featured images
add_theme_support('post-thumbnails');
