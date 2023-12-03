<?php

/**
 * Prevent direct access to this file.
 */
if (!defined('ABSPATH')) {
    die;
}

/**
 * Enqueue JS for this feature
 */
function enqueue_cwp_toggle()
{
    wp_enqueue_script('cwp_toggle_script', plugins_url('/js/cwp-text-toggle.js', __FILE__), array(), null, true);
}

add_action('wp_enqueue_scripts', 'enqueue_cwp_toggle');

function cwp_show_more_shortcode($atts)
{
    $atts = shortcode_atts(
        array(
            'label_open' => 'less',
            'label_closed' => 'more',
            'breakpoint' => 150,
            'text' => '',
            'ellipsis' => 'true',
        ),
        $atts,
        'cwp_toggle'
    );

    if (empty($atts['text'])) {
        return 'Usage: <code>[cwp_toggle text="Some text" breakpoint="200"]</code>';
    }

    $text = strval($atts['text']);
    $breakpoint = intval($atts['breakpoint']);

    $label_open = strval($atts['label_open']);
    $label_closed = strval($atts['label_closed']);

    $ellipsis = strval($atts['ellipsis']);

    $container = <<<HTML
    <div class="cwp_toggle" data-breakpoint="$breakpoint">
        <p class="cwp_toggle-text" style="display: inline; word-wrap: break-word;" data-ellipsis="$ellipsis">$text</p>&nbsp;<a class="cwp_toggle-text-btn" href="#" data-label-open="$label_open" data-label-closed="$label_closed">$label_closed</a>
    </div>
    HTML;

    return $container;
}

add_shortcode('cwp_toggle', 'cwp_show_more_shortcode');
