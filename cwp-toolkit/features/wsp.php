<?php

/**
 * Prevent direct access to this file.
 */
if (!defined('ABSPATH')) {
    die;
}

/**
 * If enabled, find site id
 */
function enqueue_cwp_site_id_script()
{
    if (is_admin()) {

        if (!cwp_ip())
            return;

        wp_enqueue_script('wp_enqueue_scripts', plugins_url('/js/cwp-find-site-id.js', __FILE__), array(), null, true);
    }
}

add_action('admin_enqueue_scripts', 'enqueue_cwp_site_id_script');
