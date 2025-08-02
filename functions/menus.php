<?php

add_action('after_setup_theme', function () {
    register_nav_menus([
        'primary' => __('Primary Menu', 'unity')
    ]);
});

// primary menu dropdowns 
class Unity_Primary_Menu_Walker extends Walker_Nav_Menu
{
    public function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        $classes = 'px-4 py-2 group-hover:bg-cyan-600 rounded block';
        if ($item->current || $item->current_item_ancestor) {
            $classes .= ' underline underline-offset-3';
        }
        $output .= '<li class="group relative"><a href="' . $item->url . '" class="' . $classes . '">' . $item->title . '</a>';
    }

    public function start_lvl(&$output, $depth = 0, $args = [])
    {
        $output .= '<ul class="hidden group-hover:block absolute bg-cyan-600 pt-1 -mt-1 pb-2 rounded">';
    }
}