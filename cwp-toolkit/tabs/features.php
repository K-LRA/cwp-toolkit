<?php

/**
 * Prevent direct access to this file.
 */
if (!defined('ABSPATH')) {
    die;
}

return [

    [
        'tab' => 'features',
        'id' => 'cwp_enable_date_time',
        'title' => 'Enable date and time shortcodes?',
        'type' => 'radio',
        'default' => 'true',
        'description' => 'This feature is always enabled as it does not use JavaScript. This flag enables the following shortcodes: <code class="shortcode in-desc">[cwp_current_year]</code> <code class="shortcode in-desc">[cwp_days date="1/1/1990" format="true"]</code>',

        'options' => [
            'true' => 'Yes',
        ],
    ],

    [
        'tab' => 'features',
        'id' => 'cwp_enable_nap_data',
        'title' => 'Enable NAP data shortcodes?',
        'type' => 'radio',
        'default' => 'true',
        'description' => "This feature is always enabled as it does not use JavaScript. This flag enables the shortcodes found on the <a href='/wp-admin/admin.php?page=cwp_settings&tab=nap-data'>NAP Data</a> page.",

        'options' => [
            'true' => 'Yes',
        ],
    ],

    [
        'tab' => 'features',
        'id' => 'cwp_enable_shortcodes_menus',
        'title' => 'Enable shortcodes in menus?',
        'type' => 'radio',
        'default' => 'true',
        'description' => 'This flag enables the use of shortcodes on the <a href="/wp-admin/nav-menus.php">Menus</a> page.',

        'options' => [
            'true' => 'Yes',
            'false' => 'No',
        ],
    ],

    [
        'tab' => 'features',
        'title' => 'JavaScript Features',
        'description' => '',
        'type' => 'title',
    ],

    [
        'tab' => 'features',
        'id' => 'cwp_enable_image_slider',
        'title' => 'Enable image slider?',
        'type' => 'radio',
        'default' => 'false',
        'description' => 'This feature uses JavaScript. This flag enables the following shortcode: <code class="shortcode in-desc">[cwp_slider ids="35,36,100,101,102,103,104,105"]</code>',

        'options' => [
            'true' => 'Yes',
            'false' => 'No',
        ],
    ],

    [
        'tab' => 'features',
        'id' => 'cwp_enable_lightbox',
        'title' => 'Enable lightbox?',
        'type' => 'radio',
        'default' => 'false',
        'description' => 'This feature uses JavaScript. The default lightbox class can be changed on the <a href="/wp-admin/admin.php?page=cwp_settings&tab=settings">Settings</a> page.',

        'options' => [
            'true' => 'Yes',
            'false' => 'No',
        ],
    ],

    [
        'tab' => 'features',
        'id' => 'cwp_enable_counter',
        'title' => 'Enable progressive counter?',
        'type' => 'radio',
        'default' => 'false',
        'description' => 'This feature uses JavaScript. This flag enables the following shortcode: <code class="shortcode in-desc">[cwp_count to="100" from="0" prefix="$" suffix=".00" speed="750" classes="revenue size-xl"]</code>',

        'options' => [
            'true' => 'Yes',
            'false' => 'No',
        ],
    ],

    [
        'tab' => 'features',
        'id' => 'cwp_enable_toggle',
        'title' => 'Enable text toggle?',
        'type' => 'radio',
        'default' => 'false',
        'description' => 'This feature uses JavaScript. This flag enables the following shortcode: <code class="shortcode in-desc">[cwp_toggle text="This is some really cool text that is way too long." breakpoint="50"]</code>',

        'options' => [
            'true' => 'Yes',
            'false' => 'No',
        ],
    ],

    [
        'tab' => 'features',
        'id' => 'cwp_enable_typing_effect',
        'title' => 'Enable typing effect?',
        'type' => 'radio',
        'default' => 'false',
        'description' => 'This feature uses JavaScript. This flag enables the following shortcode: <code class="shortcode in-desc">[cwp_typing_effect string="This is a test string" speed="2000" classes="title fast"]</code>',

        'options' => [
            'true' => 'Yes',
            'false' => 'No',
        ],
    ],
];
