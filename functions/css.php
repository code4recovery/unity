<?php

// custom theme css
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('unity', get_stylesheet_directory_uri() . '/style.min.css');
});

// custom block editor css (to match website)
add_action('enqueue_block_editor_assets', function () {
    add_theme_support('editor-styles');
    add_editor_style('editor-style.min.css');
});

// remove extra wordpress css
remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
remove_action('wp_footer', 'wp_enqueue_global_styles', 1);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

