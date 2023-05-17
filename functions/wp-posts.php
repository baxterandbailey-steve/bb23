<?php

/* set-up case study post type
----------------------------------------------------------------------------- */
function create_bb_casestudy_cpt()
{
    $labels = array(
        'name' => 'Case Study',
        'singular_name' => 'Case Study',
        'add_new' => 'Add Case Study',
        'add_new_item' => 'Add New Case Study',
        'edit_item' => 'Edit Case Study',
        'new_item' => 'New Case Study Item',
        'all_items' => 'All Case Studies',
        'view_item' => 'View Case Study',
        'menu_name' => 'Case Study'
    );

    register_post_type(
        'bb_casestudy_cpt',
        array(
            'labels' => $labels,
            'capability_type' => 'post',
            'public' => true,
            'rewrite'  => array('slug' => 'case-studies'),
            'has_archive' => true,
            'exclude_from_search' => false,
            'supports' => array('title', 'editor', 'excerpt', 'slug', 'thumbnail', 'category'),
            'taxonomies' => array('post_tag', 'category'),
            'menu_position' => 21
        )
    );
}
add_action('init', 'create_bb_casestudy_cpt');

/* set-up case taxonomy and assign to post type
----------------------------------------------------------------------------- */
function create_casestudy_taxonomy()
{
    $labels = array(
        'name'  =>  'Case Study Taxonomy',
        'singular_name' => 'Casestudy_taxonomy',
        'all_items' => 'Case Study Taxonomy',
        'edit_item' => 'Case Study Taxonomy',
        'update_item' => 'Update Case Study Taxonomy',
        'add_new_item' => 'Add New Case Study Taxonomy Item',
        'new_item_name' => 'New Case Study Taxonomy Name',
        'menu_name' => 'Case Study Taxonomy',
        'view_item' => 'View Case Study Taxonomy'
    );

    register_taxonomy(
        'casestudy_taxonomy',
        'bb_casestudy_cpt',
        array(
            'labels' => $labels,
            'hierarchical' => true,
            'query_var' => true,
            'rewrite' => true,
            'taxonomies' => array('post_tag', 'category'),
        )
    );
}
add_action('init', 'create_casestudy_taxonomy');
