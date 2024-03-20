<?php 
function test_files() {
    wp_enqueue_script('main-site-js', get_theme_file_uri('/js/main.js'), array('jquery'));
wp_enqueue_style('test_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'test_files');

?>