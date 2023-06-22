<?php
// my theme function


//theme title
add_theme_support( 'title-tag' );

//Theme CSS and JavaScript file calling
function roman_css_js_file_calling(){
    wp_enqueue_style( 'roman-style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2', 'all');
    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');

    //javascript calling
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.0.2', 'true');
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '5.0.2', 'true');

}
add_action('wp_enqueue_scripts','roman_css_js_file_calling');

//theme function
function roman_customizer_register($wp_customize){
    $wp_customize->add_section('roman_header_area', array(
        'title'=>__('Header Area', 'sheikhroman'),
        'description'=> 'If you intersted update your heder area'
    ));

    $wp_customize->add_setting('roman_logo', array(
        'default' => get_bloginfo( 'template_directory', ).'/img/logo.png', 
    ));

    $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'roman_logo', array(
        'label' => "Logo Upload",
        'description'=> 'Change your header image',
        'setting' => "roman_logo",
        'section' => 'roman_header_area',
    )));

}
add_action('customize_register','roman_customizer_register');