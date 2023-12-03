<?php

/**
 * Prevent direct access to this file.
 */
if (!defined('ABSPATH')) {
    die;
}

$features = [
    [
        'flag' => "true",
        'feature' => 'date-time.php',
    ],
    [
        'flag' => "true",
        'feature' => 'nap-data.php',
    ],
    [
        'flag' => 'cwp_enable_image_slider',
        'feature' => 'image-slider.php',
    ],
    [
        'flag' => 'cwp_enable_lightbox',
        'feature' => 'lightbox.php',
    ],
    [
        'flag' => 'cwp_enable_counter',
        'feature' => 'count.php',
    ],
    [
        'flag' => 'cwp_enable_shortcodes_menus',
        'feature' => 'shortcodes-menus.php',
    ],
    [
        'flag' => 'cwp_enable_toggle',
        'feature' => 'text-toggle.php',
    ],
    [
        'flag' => 'cwp_enable_typing_effect',
        'feature' => 'typing-effect.php',
    ],
    [
        'flag' => 'cwp_enable_wsp',
        'feature' => 'wsp.php',
    ],
];

foreach ($features as $feature) {
    $flag = $feature['flag'];
    $feature = $feature['feature'];

    if ($flag == "true" || cwp_get_option($flag) == "true")
        include_once($feature);
}
