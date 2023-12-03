<?php

/**
 * Prevent direct access to this file.
 */
if (!defined('ABSPATH')) {
    die;
}

return [

    [
        'tab' => 'adv-settings',
        'title' => '',
        'description' => '<i>These settings are only displayed to select users.</i>',
        'type' => 'title',
    ],

    [
        'tab' => 'adv-settings',
        'id' => 'cwp_admin_notice',
        'title' => CWP_TOOLKIT_PLUGIN_NAME . ' - Website Notes',
        'type' => 'textarea',

        'attributes' => [
            'placeholder' => 'If you have a note you\'d like to leave as a reminder, you can do so here.',
        ],
    ],

    [
        'tab' => 'adv-settings',
        'id' => 'cwp_aepp',
        'title' => 'Plugins: tab enabled for all admins?',
        'type' => 'radio',
        'default' => 'false',
        'description' => 'Enabling this setting will expose the Plugins tab to all admins.',

        'options' => [
            'true' => 'Yes',
            'false' => 'No',
        ],
    ],

    [
        'tab' => 'adv-settings',
        'id' => 'cwp_quick_install_new_tab',
        'title' => 'Plugins: open all links in a new tab?',
        'type' => 'radio',
        'default' => 'true',
        'description' => 'This only applies to the <code>Activate</code> and <code>Manage</code> buttons. <br>
        The <code>Install</code> button link, the WordPress plugin page link (↗), or external plugin links will always open in a new tab.',

        'options' => [
            'true' => 'Yes',
            'false' => 'No',
        ],
    ],

    [
        'tab' => 'adv-settings',
        'id' => 'cwp_enable_wsp',
        'title' => 'Enable admin controls?',
        'type' => 'radio',
        'default' => 'true',
        'description' => '',

        'options' => [
            'true' => 'Yes',
            'false' => 'No',
        ],
    ],
];
