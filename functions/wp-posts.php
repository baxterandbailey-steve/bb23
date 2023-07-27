<?php

/**
 * Functions: WP posts
 *
 * @package BBWP
 */

// Set-up work custom post type
function bbwp_cpt_team()
{
    $labels = array(
        'name' => 'Team',
        'singular_name' => 'Team Member',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Team Member',
        'edit_item' => 'Edit Team Member',
        'new_item' => 'New Team Member',
        'all_items' => 'All Team Members',
        'view_item' => 'View Team Member',
        'menu_name' => 'Team'
    );

    register_post_type(
        'bbwp_cpt_team',
        array(
            'labels' => $labels,
            'capability_type' => 'post',
            'public' => true,
            'rewrite'  => array('slug' => 'team'),
            'has_archive' => false,
            'exclude_from_search' => false,
            'supports' => array('title', 'slug', 'thumbnail', 'category'),
            'taxonomies' => array('post_tag', 'category'),
            //'menu_position' => 21
        )
    );
}
add_action('init', 'bbwp_cpt_team');

// Set-up work custom post type
function bbwp_cpt_work() // work to be lowercase
{
    $labels = array(
        'name' => 'Work',
        'singular_name' => 'Work',
        'add_new' => 'Add Work',
        'add_new_item' => 'Add New Work',
        'edit_item' => 'Edit Work',
        'new_item' => 'New Work Item',
        'all_items' => 'All Work',
        'view_item' => 'View Work',
        'menu_name' => 'Work'
    );

    register_post_type(
        'bbwp_cpt_work',
        array(
            'labels' => $labels,
            'capability_type' => 'post',
            'public' => true,
            'rewrite'  => array('slug' => 'work'),
            'has_archive' => false,
            'exclude_from_search' => false,
            'supports' => array('title', 'excerpt', 'slug', 'thumbnail', 'category'),
            'taxonomies' => array('post_tag', 'category'),
            'menu_position' => 21
        )
    );
}
add_action('init', 'bbwp_cpt_work');

// Set-up work custom post type taxonomy
function create_services_taxonomy() // work to be lowercase
{
    $labels = array(
        'name'  =>  'Services',
        'singular_name' => 'Service',
        'all_items' => 'All Services',
        'edit_item' => 'Edit',
        'update_item' => 'Update',
        'add_new_item' => 'Add New',
        'new_item_name' => 'New Name',
        'menu_name' => 'Services',
        'view_item' => 'View'
    );

    register_taxonomy(
        'services_taxonomy',   // work to be lowercase
        'bbwp_cpt_work',     // work to be lowercase
        array(
            'labels' => $labels,
            'hierarchical' => true,
            'query_var' => true,
            'rewrite' => true,
            'taxonomies' => array('post_tag', 'category'),
        )
    );
}
add_action('init', 'create_services_taxonomy'); // work to be lowercase


// Set-up work custom post type taxonomy
function create_sectors_taxonomy() // work to be lowercase
{
    $labels = array(
        'name'  =>  'Sectors',
        'singular_name' => 'Sectors',
        'all_items' => 'All Sectors',
        'edit_item' => 'Edit',
        'update_item' => 'Update',
        'add_new_item' => 'Add New',
        'new_item_name' => 'New Name',
        'menu_name' => 'Sectors',
        'view_item' => 'View'
    );

    register_taxonomy(
        'sectors_taxonomy',   // work to be lowercase
        'bbwp_cpt_work',     // work to be lowercase
        array(
            'labels' => $labels,
            'hierarchical' => true,
            'query_var' => true,
            'rewrite' => true,
            'taxonomies' => array('post_tag', 'category'),
        )
    );
}
add_action('init', 'create_sectors_taxonomy'); // work to be lowercase
