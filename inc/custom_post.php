<?php
function custom_service(){
    register_post_type( 'service',
    array(
        'labels' => array(
            'name' => __( 'Services' ),
            'singular_name' => __( 'Service' ),
            'add_new' => __( 'Add New Service' ),
            'add_new_item' => __( 'Add New Service' ),
            'edit_item' => __( 'Edit Service' ),
            'new_item' => __( 'New Service' ),
            'view_item' => __( 'View Service' ),
            'not_found' => __( 'No Service found' ),
        ),
        'menu_icon' => 'dashicons-awards',
    )
    );
}