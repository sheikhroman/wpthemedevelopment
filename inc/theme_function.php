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

    // Theme color
    $wp_customize-> add_section('roman_colors', array(
        'title' => __('Theme Color', 'sheikhroman'),
        'description' => 'If need ! You can change theme color.',
    ));
    $wp_customize -> add_setting('roman_bg_color', array(
        'default' => "#ffffff",
    ));
    $wp_customize -> add_control(new WP_Customize_Color_Control($wp_customize, 'roman_bg_color', array(
        'label'=> 'Background Color', 
        'section'=> 'roman_colors',
        'settings'=> 'roman_bg_color',
    )));
    $wp_customize -> add_setting('roman_primary_color', array(
        'default' => "#EA1A70",
    ));
    $wp_customize -> add_control(new WP_Customize_Color_Control($wp_customize, 'roman_primary_color', array(
        'label'=> 'Primary Color', 
        'section'=> 'roman_colors',
        'settings'=> 'roman_primary_color',
    )));


}

add_action('customize_register','roman_customizer_register');

//color
function roman_theme_color_cus(){
    ?>
    <style>
        body{background: <?php echo get_theme_mod('roman_bg_color'); ?>;}
        :root{--pink:<?php echo get_theme_mod('roman_primary_color'); ?>;}
    </style>
    <?php
}
add_action( 'wp_head','roman_theme_color_cus' );