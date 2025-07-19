<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('unity', get_stylesheet_directory_uri() . '/style.min.css');
});

add_action('enqueue_block_editor_assets', function () {
    add_theme_support('editor-styles');
    add_editor_style('editor-style.min.css');
});
