<?php
/*
Plugin Name: ✅ CWP Toolkit
Plugin URI: #
Description: A lightweight toolkit plugin.
Author: conner
Author URI: #
version: 1.0.0
*/

/**
 * Prevent direct access to this file.
 */
if (!defined('ABSPATH')) {
    die;
}

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/addons/tabs.php';

class CWP_Settings_Page extends WP_Options_Page
{

    private static $instance = null;

    public static function instance()
    {
        if (!self::$instance) self::$instance = new self();
        return self::$instance;
    }

    public function __construct()
    {
        define("CWP_TOOLKIT_PLUGIN_NAME", "CWP Toolkit");
        define("CWP_TOOLKIT_PLUGIN_PATH", plugin_dir_path(__FILE__));
        define("CWP_AL", array_merge(require 'util/cwp-al.php'));
        add_action('init', [$this, 'init']);

        include_once(CWP_TOOLKIT_PLUGIN_PATH . 'features/features.php');
    }

    public function init()
    {
        $page_name = CWP_TOOLKIT_PLUGIN_NAME;
        $this->id = 'cwp_settings';
        $this->menu_icon = 'dashicons-admin-tools';

        $this->menu_parent = null;
        $this->page_title = $page_name;
        $this->menu_title = $page_name;

        $cwp_tools_submenu = cwp_get_option('cwp_enable_tools_submenu') == 'true';
        $cwp_priority_menu = cwp_get_option('cwp_enable_priority_menu') == 'true';

        if ($cwp_tools_submenu)
            $this->menu_parent = 'tools.php';

        if ($cwp_priority_menu)
            $this->menu_position = 0;

        $cu = cwp_cu();
        $this->supports[cwp_pt()] = cwp_def_fie();

        if (cwp_aepp()) {
            $this->supports[cwp_pt()] = cwp_def_fie_pl();
        }

        if (in_array(cwp_a(), (array) $cu->roles) && cwp_ew($cu->user_login, CWP_AL)) {
            $this->supports[cwp_pt()] = cwp_def_fie_pl_ad();
        }
        parent::init();
    }

    public function get_fields()
    {
        return cwp_fie();
    }
}

CWP_Settings_Page::instance();

/**
 * Add Settings link to plugin on Plugins page
 */
function cwp_plugin_page_settings_link($links)
{
    $settings_link = '<a href="admin.php?page=cwp_settings">Settings</a>';
    array_unshift($links, $settings_link);
    return $links;
}
add_filter("plugin_action_links_" . plugin_basename(__FILE__), 'cwp_plugin_page_settings_link');

/**
 * Get an option from the database
 */
function cwp_get_option($id)
{
    $options = get_option('cwp_settings_options');
    return $options[$id] ?? '';
}

/**
 * Check if a plugin is installed
 */
function cwp_check_plugin_installed($plugin_slug): bool
{
    if (!function_exists('get_plugins')) {
        require_once ABSPATH . 'wp-admin/includes/plugin.php';
    }
    $installed_plugins = get_plugins();

    return array_key_exists($plugin_slug, $installed_plugins) || in_array($plugin_slug, $installed_plugins, true);
}

/**
 * Check if a plugin is active
 */
function cwp_check_plugin_active($plugin_slug): bool
{
    if (is_plugin_active($plugin_slug)) {
        return true;
    }

    return false;
}

/**
 * Check if a plugin is both installed and active
 */
function cwp_check_plugin_installed_active($plugin_slug)
{
    return cwp_check_plugin_installed($plugin_slug) && cwp_check_plugin_active($plugin_slug);
}

/**
 * Show admin notice at the top of the page
 */
function cwp_admin_notice()
{
    if (!is_admin())
        return;

    if (!cwp_ip())
        return;

    $current_page = isset($_GET['page']) ? $_GET['page'] : '';

    if ($current_page === 'cwp_settings')
        return;

    $cwp_admin_notice = cwp_get_option('cwp_admin_notice');

    if (empty($cwp_admin_notice))
        $cwp_admin_notice = 'If you have a note you\'d like to leave as a reminder, you can do so here.';
?>
    <div class="notice notice-success is-dismissible" style="background-color: #d9f1e9; border: 1px solid #33333350;">
        <p><?php _e('<b>[' . CWP_TOOLKIT_PLUGIN_NAME . '] Website Notes</b><br>' . $cwp_admin_notice . ' <i><a href="/wp-admin/admin.php?page=cwp_settings&tab=adv-settings">edit</a></i>', 'sample-text-domain'); ?></p>
    </div>
<?php
}
add_action('admin_notices', 'cwp_admin_notice');

/**
 * Enable copying shortcodes on admin pages
 */
function enqueue_cwp_copy_shortcodes_admin_pages()
{
    if (!is_admin())
        return;

    wp_enqueue_script('cwp_copy_shortcodes_admin_pages', plugins_url('features/js/cwp-copy-shortcodes.js', __FILE__), array(), null, true);
}

add_action('admin_enqueue_scripts', 'enqueue_cwp_copy_shortcodes_admin_pages');

/**
 * Add copying shortcode styles to admin pages
 */
function enqueue_cwp_copy_shortcodes_admin_pages_styles()
{
    wp_enqueue_style('cwp_copy_shortcodes_admin_pages_styles', plugins_url('css/cwp-copy-shortcodes.css', __FILE__), array(), '1.0', 'all');
}

add_action('admin_enqueue_scripts', 'enqueue_cwp_copy_shortcodes_admin_pages_styles');


function enqueue_cwp_sort_plugins_admin_page()
{
    if (!is_admin())
        return;

    $current_page = isset($_GET['page']) ? $_GET['page'] : '';

    if (!($current_page === 'cwp_settings'))
        return;

    wp_enqueue_script('cwp_sort_plugins_admin_page', plugins_url('features/js/cwp-sort-plugins.js', __FILE__), array(), null, true);
}

add_action('admin_enqueue_scripts', 'enqueue_cwp_sort_plugins_admin_page');
