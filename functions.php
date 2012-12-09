<?php
add_action( 'after_setup_theme', 'setup' );  

function setup() {  
	add_theme_support( 'menus' );

	add_theme_support( 'post-thumbnails' ); 
	add_image_size( 'small-image', 300, 300, false );  
	add_image_size( 'billboard-image', 940, 940, false );
}

add_filter( 'image_size_names_choose', 'custom_image_sizes_choose' );  
function custom_image_sizes_choose( $sizes ) {  
    $custom_sizes = array(  
        'small-image' => 'Small',
        'billboard-image' => 'Billboard'
    );  
    return array_merge( $sizes, $custom_sizes );  
}