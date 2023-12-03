<?php

/**
 * Prevent direct access to this file.
 */
if (!defined('ABSPATH')) {
    die;
}

$nap_data_shortcodes = array(
    'cwp_business_name',
    'cwp_primary_email',
    'cwp_secondary_email',
    'cwp_primary_phone',
    'cwp_secondary_phone',
    'cwp_street_address',
    'cwp_province',
    'cwp_country',
    'cwp_postal_code',
);

function register_nap_data_shortcode($id)
{
    return function () use ($id) {
        return sanitize_text_field(cwp_get_option($id));
    };
}

foreach ($nap_data_shortcodes as $nap_data_shortcode) {
    add_shortcode($nap_data_shortcode, register_nap_data_shortcode($nap_data_shortcode));
}

function register_shortcode_cwp_full_address($atts)
{
    $cwp_street_address = sanitize_text_field(cwp_get_option('cwp_street_address'));
    $cwp_province = sanitize_text_field(cwp_get_option('cwp_province'));
    $cwp_country = sanitize_text_field(cwp_get_option('cwp_country'));
    $cwp_postal_code = sanitize_text_field(cwp_get_option('cwp_postal_code'));
    $cwp_maps_url = esc_url(cwp_get_option('cwp_maps_url'));

    $exclude_country = (isset($atts['country']) && $atts['country'] === 'false');
    $use_maps = (isset($atts['usemaps']) && $atts['usemaps'] === 'true');
    $is_link = $use_maps || (isset($atts['link']) && $atts['link'] === 'true');

    $full_address = "$cwp_street_address, $cwp_province, " . ($exclude_country ? null : "$cwp_country, ") . "$cwp_postal_code";
    $google_maps_link = "https://www.google.com/maps/search/" . "$cwp_street_address,$cwp_province,$cwp_country,$cwp_postal_code";

    if (!$is_link) {
        return sanitize_text_field($full_address);
    }

    $link = $use_maps ? (empty($cwp_maps_url) ? $google_maps_link : $cwp_maps_url) : $google_maps_link;

    if (!preg_match('#^https?://#i', $link)) {
        $link = 'https://' . $link;
    }

    return "<a target='_blank' href='" . esc_url($link) . "'>" . sanitize_text_field($full_address) . "</a>";
}

add_shortcode('cwp_full_address', 'register_shortcode_cwp_full_address');

function register_shortcode_cwp_maps_url($atts)
{
    $cwp_maps_url = esc_url(cwp_get_option('cwp_maps_url'));
    $is_link = !empty($cwp_maps_url) && (isset($atts['link']) && $atts['link'] === 'true');

    if (!$is_link) {
        return $cwp_maps_url;
    }

    return "<a target='_blank' href='" . esc_url($cwp_maps_url) . "'>" . esc_url($cwp_maps_url) . "</a>";
}

add_shortcode('cwp_maps_url', 'register_shortcode_cwp_maps_url');
