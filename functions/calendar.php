<?php

if (!defined('UNITY_EVENT')) {
    define('UNITY_EVENT', 'unity_event');
}

function unity_calendar_register()
{
    register_post_type(UNITY_EVENT, [
        'label' => 'Events',
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-calendar',
        'rewrite' => [
            'slug' => 'calendar',
        ],
        'supports' => ['title', 'editor', 'thumbnail']
    ]);
}

// add custom post types
add_action('init', 'unity_calendar_register');

// rewrite permalinks when switching themes
add_action(
    'after_switch_theme',
    function () {
        unity_calendar_register();
        flush_rewrite_rules();
    }
);
