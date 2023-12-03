<?php

/**
 * Prevent direct access to this file.
 */
if (!defined('ABSPATH')) {
    die;
}

function enable_shortcodes_in_menus($items)
{
    foreach ($items as &$item) {
        $item->title = do_shortcode($item->title);
    }

    return $items;
}

add_filter('wp_nav_menu_objects', 'enable_shortcodes_in_menus');
