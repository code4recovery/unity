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

// remove extra wordpress output
remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
remove_action('wp_footer', 'wp_enqueue_global_styles', 1);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

// customize nav menus
class Unity_Menu_Walker extends Walker_Nav_Menu
{
    public function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        $classes = ['px-4 py-2 group-hover:bg-cyan-600 rounded block'];
        if (in_array('current-menu-item', $item->classes) || in_array('current-menu-ancestor', $item->classes)) {
            $classes[] = 'underline';
        }
        $output .= '<li class="group relative"><a href="' . $item->url .
            '" class="' . implode(' ', $classes) . '">' . $item->title .
            '</a>';
    }

    public function start_lvl(&$output, $depth = 0, $args = [])
    {
        $output .= '<ul class="hidden group-hover:block absolute bg-cyan-600 pt-1 -mt-1 pb-2 rounded">';
    }
}