<?php
function custom_service()
{
    register_post_type(
        'service',
        array(
            'labels' => array(
                'name' => ('Services'),
                'singular_name' => ('Service'),
                'add_new' => ('Add New Service'),
                'add_new_item' => ('Add New Service'),
                'edit_item' => ('Edit Service'),
                'new_item' => ('New Service'),
                'view_item' => ('View Service'),
                'not_found' => ('No Service found'),
            ),
            'menu_icon' => 'dashicons-awards',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'menu_position' => 5,
            'has_archive' => true,
            'hierarchical' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'rewrite' => array('slug' => 'service'),
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}
add_action( 'init', 'custom_service' );

//somethnig new