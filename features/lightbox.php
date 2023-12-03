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
function enqueue_lightbox_script()
{
    $cwp_lightbox = cwp_get_option('cwp_lightbox');

    if (empty($cwp_lightbox))
        return;

    wp_enqueue_script('cwp_lightbox_script', plugins_url('/js/cwp-lightbox.js', __FILE__), array(), null, true);
    wp_localize_script('cwp_lightbox_script', 'cwpLightbox', array('selector' => $cwp_lightbox));
}

add_action('wp_enqueue_scripts', 'enqueue_lightbox_script');
