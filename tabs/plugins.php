<?php

/**
 * Prevent direct access to this file.
 */
if (!defined('ABSPATH')) {
    die;
}

ob_start();
include(CWP_TOOLKIT_PLUGIN_PATH . 'html/plugins.php');
$description = ob_get_clean();

return [
    [
        'tab' => 'plugins',
        'title' => '',
        'description' => '<i>This page is only displayed to select users.</i><br>' . $description,
        'type' => 'title',
    ],
];
