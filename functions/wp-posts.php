<?php

/**
 * Functions: WP posts
 *
 * @package BBWP
 */

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
        'bbwp_cpt_work', // work to be lowercase
        array(
            'labels' => $labels,
            'capability_type' => 'post',
            'public' => true,
            'rewrite'  => array('slug' => 'work'),
            'has_archive' => true,
            'exclude_from_search' => false,
            'supports' => array('title', 'editor', 'excerpt', 'slug', 'thumbnail', 'category'),
            'taxonomies' => array('post_tag', 'category'),
            'menu_position' => 21
        )
    );
}
add_action('init', 'bbwp_cpt_work'); // work to be lowercase

// Set-up work custom post type taxonomy
function create_work_taxonomy() // work to be lowercase
{
    $labels = array(
        'name'  =>  'Work Taxonomy',
        'singular_name' => 'Casestudy_taxonomy',
        'all_items' => 'Work Taxonomy',
        'edit_item' => 'Work Taxonomy',
        'update_item' => 'Update Work Taxonomy',
        'add_new_item' => 'Add New Work Taxonomy Item',
        'new_item_name' => 'New Work Taxonomy Name',
        'menu_name' => 'Work Taxonomy',
        'view_item' => 'View Work Taxonomy'
    );

    register_taxonomy(
        'work_taxonomy',   // work to be lowercase
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
add_action('init', 'create_work_taxonomy'); // work to be lowercase
