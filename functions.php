<?php
// Enqueue the child theme style 
function enqueue_child_theme_style(){
    // Enqueue the parent theme style as a dependency
    wp_enqueue_style('parent-style', get_template_directory_uri(), '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri(), array('parent-style'), '0.0.1', 'all');
}
add_action('wp_enqueue_scripts','enqueue_child_theme_style');