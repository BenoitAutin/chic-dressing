<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
}

add_filter( 'big_image_size_threshold', '__return_false' );

function ashe_remove_google_fonts() {
    wp_dequeue_style('ashe-Kalim');
    wp_deregister_style('ashe-Kalim');
    wp_dequeue_style('ashe-OpenSans');
    wp_deregister_style('ashe-OpenSans');
    wp_dequeue_style('ashe-Rokkit');
    wp_deregister_style('ashe-Rokkit');
    wp_dequeue_style('ashe-PlayfairDisplay');
    wp_deregister_style('ashe-PlayfairDisplay');
}
add_action('wp_enqueue_scripts', 'ashe_remove_google_fonts', 100);



 