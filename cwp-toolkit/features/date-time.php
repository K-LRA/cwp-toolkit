<?php

/**
 * Prevent direct access to this file.
 */
if (!defined('ABSPATH')) {
    die;
}

function register_shortcode_cwp_current_year()
{
    return date('Y');
}

add_shortcode('cwp_current_year', 'register_shortcode_cwp_current_year');

function cwp_register_shortcode_days($atts)
{
    $invalid_message = "Usage: <code>[cwp_days date='1/1/1990' format='true']</code> <code>[cwp_days date='Jan 1 1990' format='false']</code>";

    $format_number = false;

    if (isset($atts['format'])) {
        $att_format = $atts['format'];
        $format_number = filter_var($att_format, FILTER_VALIDATE_BOOLEAN);
    }

    if (isset($atts['date'])) {
        $date = sanitize_text_field($atts['date']);

        $dateFormats = [
            'M d Y',
            'm/d/Y',
            'm-d-Y',
            'd M Y',
            'M d Y',
            'd/m/Y',
            'd-m-Y',
            'd M Y',
        ];

        foreach ($dateFormats as $format) {
            $dateTime = DateTime::createFromFormat($format, $date);
            if ($dateTime !== false) {
                $currentDate = new DateTime();
                $interval = $currentDate->diff($dateTime);
                $days = $interval->days;

                return $format_number ? number_format($days) : $days;
            }
        }

        return sanitize_text_field($invalid_message);
    }

    return sanitize_text_field($invalid_message);
}

add_shortcode('cwp_days', 'cwp_register_shortcode_days');
