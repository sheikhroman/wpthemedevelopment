<?php
function roman_customizer_register($wp_customize){
    //Header area function
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

    //Menu position option
    $wp_customize->add_section('roman_menu_option', array(
        'title'=> __('Menu Position Option', 'sheikhroman'),
        'description'=> 'If you intersted change your menu position'
    ));
    $wp_customize->add_setting('roman_menu_position', array(
        'default' => 'right_menu',
    ));
    $wp_customize-> add_control('roman_menu_position', array(
        'label' => 'Menu Position',
        'description'=> 'Select your menu position',
        'setting' => "roman_menu_position",
        'section' => 'roman_menu_option',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => 'Left Menu',
            'right_menu' => 'Right Menu',
            'center_menu' => 'Center Menu',
        )
    ));

    //Footer position option
    $wp_customize->add_section('roman_footer_option', array(
        'title'=> __('Footer Position Option', 'sheikhroman'),
        'description'=> 'If you intersted change your menu position'
    ));
    $wp_customize->add_setting('roman_copyright_section', array(
        'default' => '&copy; Copyright 2023 | Sheikh Roman',
    ));
    $wp_customize-> add_control('roman_copyright_section', array(
        'label' => 'Copyright Text',
        'description'=> 'You can change copyright text from here',
        'setting' => "roman_copyright_section",
        'section' => 'roman_footer_option',
    ));
}

add_action('customize_register','roman_customizer_register');