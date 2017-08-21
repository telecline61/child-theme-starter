<?php
// load parent and child stylesheets
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    // enqueue parent styles
    wp_enqueue_style('parent-style', get_template_directory_uri() .'/style.css');
    // enqueue child styles
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() .'/style.css', array('parent-theme'));
}