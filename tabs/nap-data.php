<?php

/**
 * Prevent direct access to this file.
 */
if (!defined('ABSPATH')) {
    die;
}

return [
    [
        'tab' => 'nap-data',
        'title' => 'Business Name',
        'id' => 'cwp_business_name',
        'type' => 'text',
        'description' => 'Shortcode: <code class="shortcode in-desc">[cwp_business_name]</code>',
        'attributes' => [
            'placeholder' => 'e.g. Betty\'s Quilt Shop',
        ],
    ],
    [
        'tab' => 'nap-data',
        'title' => 'Email Addresses',
        'id' => 'cwp_primary_email',
        'type' => 'text',
        'description' => 'Shortcode: <code class="shortcode in-desc">[cwp_primary_email]</code>',
        'attributes' => [
            'placeholder' => 'e.g. hello@bettysquiltshop.com',
        ],
    ],
    [
        'tab' => 'nap-data',
        'title' => '',
        'id' => 'cwp_secondary_email',
        'type' => 'text',
        'description' => 'Shortcode: <code class="shortcode in-desc">[cwp_secondary_email]</code>',
        'attributes' => [
            'placeholder' => 'e.g. sales@bettysquiltshop.com',
        ],
    ],
    [
        'tab' => 'nap-data',
        'id' => 'cwp_primary_phone',
        'type' => 'text',
        'title' => 'Phone Numbers',
        'description' => 'Shortcode: <code class="shortcode in-desc">[cwp_primary_phone]</code>',
        'attributes' => [
            'placeholder' => 'e.g. 1 (123) 123-1234',
        ],
    ],
    [
        'tab' => 'nap-data',
        'id' => 'cwp_secondary_phone',
        'type' => 'text',
        'title' => '',
        'description' => 'Shortcode: <code class="shortcode in-desc">[cwp_secondary_phone]</code>',
        'attributes' => [
            'placeholder' => 'e.g. 1 (456) 456-7890',
        ],
    ],
    [
        'tab' => 'nap-data',
        'title' => 'Street Address',
        'id' => 'cwp_street_address',
        'type' => 'text',
        'description' => 'Shortcode: <code class="shortcode in-desc">[cwp_street_address]</code>',
        'attributes' => [
            'placeholder' => 'e.g. 123 ABC St',
        ],
    ],
    [
        'tab' => 'nap-data',
        'title' => 'Town or City',
        'id' => 'cwp_city',
        'type' => 'text',
        'description' => 'Shortcode: <code class="shortcode in-desc">[cwp_city]</code>',
        'attributes' => [
            'placeholder' => 'e.g. Calgary',
        ],
    ],
    [
        'tab' => 'nap-data',
        'title' => 'Province or State',
        'id' => 'cwp_province',
        'type' => 'text',
        'description' => 'Shortcode: <code class="shortcode in-desc">[cwp_province]</code>',
        'attributes' => [
            'placeholder' => 'e.g. Alberta',
        ],
    ],
    [
        'tab' => 'nap-data',
        'title' => 'Country',
        'id' => 'cwp_country',
        'type' => 'text',
        'description' => 'Shortcode: <code class="shortcode in-desc">[cwp_country]</code>',
        'attributes' => [
            'placeholder' => 'e.g. Canada',
        ],
    ],
    [
        'tab' => 'nap-data',
        'title' => 'Postal or ZIP Code',
        'id' => 'cwp_postal_code',
        'type' => 'text',
        'description' => 'Shortcode: <code class="shortcode in-desc">[cwp_postal_code]</code>',
        'attributes' => [
            'placeholder' => 'e.g. A0B 1C2 or 12345',
        ],
    ],
    [
        'tab' => 'nap-data',
        'title' => 'Maps URL',
        'id' => 'cwp_maps_url',
        'type' => 'text',
        'description' => 'Shortcode: <code class="shortcode in-desc">[cwp_maps_url link="true"]</code> <br>
        You can override the default Google Maps search URL that is generated when using <code class="shortcode in-desc">[ws_full_address link="true"]</code> by using or adding the <code>usemaps="true"</code> parameter. <br>
        If the <code>link</code> parameter is <code>true</code> and the URL does not start with <code>https://</code>, it is prepended to the URL. The displayed URL is not affected.',
        'attributes' => [
            'placeholder' => 'e.g. https://maps.app.goo.gl/nJgzxdN82YFpBQ777',
        ],
    ],
];
