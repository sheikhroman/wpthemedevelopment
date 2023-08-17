<?php
//sidebar register function
function roman_widgets_register(){
    register_sidebar( array(
        'name' => __('Main Widget Area', 'roman'),
        'id' => 'sidebar_1',
        'description' => __('Apperas on all pages', 'roman'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ) );
    register_sidebar( array(
        'name' => __('Footer 1', 'roman'),
        'id' => 'footer_1',
        'description' => __('Apperas on all pages', 'roman'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ) );
    register_sidebar( array(
        'name' => __('Footer 2', 'roman'),
        'id' => 'footer_2',
        'description' => __('Apperas on all pages', 'roman'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ) );
    register_sidebar( array(
        'name' => __('Footer 3', 'roman'),
        'id' => 'footer_3',
        'description' => __('Apperas on all pages', 'roman'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'roman_widgets_register' );