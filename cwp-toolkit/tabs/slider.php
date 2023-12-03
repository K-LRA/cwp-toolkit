<?php

/**
 * Prevent direct access to this file.
 */
if (!defined('ABSPATH')) {
    die;
}

return [

    [
        'tab' => 'slider',
        'title' => '',
        'description' => 'The image slider can be enabled on the <a href="/wp-admin/admin.php?page=cwp_settings&tab=features">Features</a> page. <br><br>These settings define the <b>default</b> settings for image sliders. These settings can be overidden by their respective shortcode parameters.<br>If the lightbox is enabled, images will open in the lightbox when clicked.',
        'type' => 'title',
    ],

    [
        'tab' => 'slider',
        'id' => 'cwp_slider_autoplay',
        'title' => 'Autoplay slider?',
        'type' => 'radio',
        'default' => 'true',

        'options' => [
            'true' => 'Yes',
            'false' => 'No',
        ],
    ],

    [
        'tab' => 'slider',
        'id' => 'cwp_slider_pause_on_hover',
        'title' => 'Pause slider on hover?',
        'type' => 'radio',
        'default' => 'true',

        'options' => [
            'true' => 'Yes',
            'false' => 'No',
        ],
    ],

    [
        'tab' => 'slider',
        'id' => 'cwp_slider_autoplay_speed',
        'title' => 'Image slider autoplay speed',
        'type' => 'text',
        'default' => '3000',
        'description' => 'Autoplay speed in <code>ms</code>.',

        'attributes' => [
            'placeholder' => '3000',
        ],
    ],

    [
        'tab' => 'slider',
        'id' => 'cwp_slider_animation_speed',
        'title' => 'Image slider animation speed',
        'type' => 'text',
        'default' => '300',
        'description' => 'Animation speed in <code>ms</code>.',

        'attributes' => [
            'placeholder' => '300',
        ],
    ],

    [
        'tab' => 'slider',
        'id' => 'cwp_slider_display_mode',
        'title' => 'Image slider display mode',
        'default' => 'cover',
        'description' => 'Determines how the image should be resized to fit its container.',
        'type' => 'select',

        'options' => [
            'cover' => 'Cover',
            'contain' => 'Contain',
            'fill' => 'Fill',
        ],
    ],

    [
        'tab' => 'slider',
        'id' => 'cwp_slider_controls_size',
        'title' => 'Image slider controls size',
        'type' => 'text',
        'default' => '42px',
        'description' => 'Controls the size of the left and right arrows. Use a valid CSS unit e.g. <code>42px</code> <code>3rem</code>',

        'attributes' => [
            'placeholder' => '42px',
        ],
    ],

    [
        'tab' => 'slider',
        'id' => 'cwp_slider_height',
        'title' => 'Slider height',
        'type' => 'text',
        'default' => '400px',
        'description' => 'Defines the default height of a slider. Use a valid CSS unit e.g. <code>400px</code> <code>30vh</code>',

        'attributes' => [
            'placeholder' => '400px',
        ],
    ],

    [
        'tab' => 'slider',
        'id' => 'cwp_slider_image_width',
        'title' => 'Preferred image width',
        'type' => 'text',
        'description' => 'Images with a width higher than this value will be resized to this value in <code>px</code>. Do not specify <code>px</code> or another unit in this field.<b>',

        'attributes' => [
            'placeholder' => '400',
        ],
    ],

    [
        'tab' => 'slider',
        'id' => 'cwp_slider_fixed_width',
        'title' => 'Fix image widths?',
        'type' => 'radio',
        'description' => 'Image widths will be fixed to <code>Preferred image width</code>.',
        'default' => 'true',

        'options' => [
            'true' => 'Yes',
            'false' => 'No',
        ],
    ],

    [
        'tab' => 'slider',
        'id' => 'cwp_slider_image_gap',
        'title' => 'Gap between images',
        'type' => 'text',
        'default' => '10px',
        'description' => 'The gap between images in <code>px</code>. Do not specify <code>px</code> or another unit in this field.',

        'attributes' => [
            'placeholder' => '10px',
        ],
    ],

    [
        'tab' => 'slider',
        'id' => 'cwp_slider_tablet_breakpoint',
        'title' => 'Tablet breakpoint',
        'type' => 'text',
        'default' => '1000',
        'description' => 'The tablet breakpoint in <code>px</code>. Do not specify <code>px</code> or another unit in this field.',

        'attributes' => [
            'placeholder' => '1000',
        ],
    ],

    [
        'tab' => 'slider',
        'id' => 'cwp_slider_mobile_breakpoint',
        'title' => 'Mobile breakpoint',
        'type' => 'text',
        'default' => '700',
        'description' => 'The mobile breakpoint in <code>px</code>. Do not specify <code>px</code> or another unit in this field.',

        'attributes' => [
            'placeholder' => '700',
        ],
    ],

    [
        'tab' => 'slider',
        'id' => 'cwp_slider_number_of_images_desktop',
        'title' => 'On desktop devices, how many images should be displayed?',
        'type' => 'text',
        'default' => '3',
        'description' => null,

        'attributes' => [
            'placeholder' => '3',
        ],
    ],

    [
        'tab' => 'slider',
        'id' => 'cwp_slider_number_of_images_tablet',
        'title' => 'On tablet devices, how many images should be displayed?',
        'type' => 'text',
        'default' => '2',
        'description' => null,

        'attributes' => [
            'placeholder' => '2',
        ],
    ],

    [
        'tab' => 'slider',
        'id' => 'cwp_slider_number_of_images_mobile',
        'title' => 'On mobile devices, how many images should be displayed?',
        'type' => 'text',
        'default' => '1',
        'description' => null,

        'attributes' => [
            'placeholder' => '1',
        ],
    ],
];
