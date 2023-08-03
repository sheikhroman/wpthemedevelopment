<?php
//theme title

add_theme_support( 'title-tag' );

//thumble image
add_theme_support( 'post-thumbnails',array('post','page') );
add_image_size('post-thumbnails', 970, 350,true);


//except to 40 words
function roman_excerpt_more($more){
    return '<a href="'.get_permalink($post->ID).'">'.'Read More'.'</a>';
}

add_filter( 'excerpt_more', 'roman_excerpt_more');

function roman_excerpt_length($length){
    return 40;
}
add_filter( 'excerpt_length', 'roman_excerpt_length' ,999);
