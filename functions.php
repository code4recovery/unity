<?php

include('functions/calendar.php');
include('functions/css.php');
include('functions/language.php');
include('functions/links.php');
include('functions/menus.php');


add_theme_support('post-thumbnails');

// taxonomy tweaks
add_action('init', function () {
    register_taxonomy_for_object_type('category', 'page');
    unregister_taxonomy_for_object_type('post_tag', 'post');
});