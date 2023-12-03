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
function enqueue_cwp_typing_effect_script()
{
    wp_enqueue_script('cwp_typing_effect_script', plugins_url('/js/cwp-typing-effect.js', __FILE__), array(), null, true);
}

add_action('wp_enqueue_scripts', 'enqueue_cwp_typing_effect_script');

// Define the shortcode callback function
function cwp_typing_effect_shortcode($atts)
{
    // Define default values and extract shortcode attributes
    $atts = shortcode_atts(array('string' => '', 'speed' => 1000, 'classes' => ''), $atts, 'cwp_typing_effect');

    $string = esc_html($atts['string']);

    if (empty($string)) {
        return "Usage examples: <code>[cwp_typing_effect string='This is a test string.']</code>, <code>[cwp_typing_effect string='This is a test string.' speed='4000' classes='title']</code>";
    }

    $classes = sanitize_text_field($atts['classes']);

    // Output the shortcode content with attributes
    return "<div class='cwp_typing-effect $classes' data-speed='" . esc_attr($atts['speed']) . "'>" . esc_html($atts['string']) . "</div>";
}

// Register the shortcode
add_shortcode('cwp_typing_effect', 'cwp_typing_effect_shortcode');
