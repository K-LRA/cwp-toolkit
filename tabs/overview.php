<?php

/**
 * Prevent direct access to this file.
 */
if (!defined('ABSPATH')) {
    die;
}

ob_start();
include(CWP_TOOLKIT_PLUGIN_PATH . 'html/overview.php');
$description = ob_get_clean();

return [
    [
        'tab' => 'overview',
        'title' => null,
        'description' => $description,
        'type' => 'title',
    ]
];
