<?php

/**
 * Prevent direct access to this file.
 */
if (!defined('ABSPATH')) {
    die;
}

return [

    [
        'tab' => 'settings',
        'id' => 'cwp_enable_tools_submenu',
        'title' => 'Place ' . CWP_TOOLKIT_PLUGIN_NAME . ' in the Tools secondary menu?',
        'type' => 'radio',
        'default' => 'true',
        'description' => 'When enabled, ' . CWP_TOOLKIT_PLUGIN_NAME . ' will be found under Tools > ' . CWP_TOOLKIT_PLUGIN_NAME . '. Click <code>Save Changes</code> and then refresh the page.',

        'options' => [
            'true' => 'Yes',
            'false' => 'No',
        ],
    ],

    [
        'tab' => 'settings',
        'id' => 'cwp_enable_priority_menu',
        'title' => 'Place ' . CWP_TOOLKIT_PLUGIN_NAME . ' at the top of the menu?',
        'type' => 'radio',
        'default' => 'true',
        'description' => 'When enabled, ' . CWP_TOOLKIT_PLUGIN_NAME . ' will be found at the top of the menu it\'s currently in. Click <code>Save Changes</code> and then refresh the page.',

        'options' => [
            'true' => 'Yes',
            'false' => 'No',
        ],
    ],

    [
        'tab' => 'settings',
        'id' => 'cwp_lightbox',
        'title' => 'Lightbox target class',
        'type' => 'text',
        'description' => 'If the lightbox is enabled, apply the above class to the <code>img</code> elements you\'d like to display in a lightbox when clicked.<br>Do not include the preceding <code>.</code> when specifying the class.<br>
        If this field is left blank, the lightbox will be considered disabled and the javascript will not load.',
        'default' => 'cwp_lightbox',

        'attributes' => [
            'placeholder' => 'cwp_lightbox',
        ],
    ],
];
