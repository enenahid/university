<?php
function university_files()
{
    //wp_enqueue_script('university_main_js', get_theme_file_uri('/build/index.js'), NULL, '1.0.1', true);
    wp_enqueue_style('font_awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'university_files');