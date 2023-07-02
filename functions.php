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

//Google font 

function roman_add_google_fonts(){
    wp_enqueue_style( 'roman_google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&display=swap" rel="stylesheet', false);
};
add_action('wp_enqueue_scripts','roman_add_google_fonts');


//theme function
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

}
add_action('customize_register','roman_customizer_register');

//Menu register
register_nav_menu( 'main_menu', __('Main Menu', 'sheikhroman') );

//walker enu properties
function roman_nav_description( $item_output, $item, $args){
    if( !empty ($item->description)){
        $item_output = str_replace($args->link_after . '</a>', '<span class="walker_nav">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output);
      }
      return $item_output;
}
add_filter('walker_nav_menu_start_el', 'roman_nav_description', 10, 3);
