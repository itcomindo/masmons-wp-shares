<?php
defined('ABSPATH') || exit;
/**
 *=========================
 *Plugin Name: MasMons WP Share
 *Plugin URI: https://budiharyono.com/
 *Description: Share your post to social media
 *Version: 1.0.0 Beta
 *Author: Budi Haryono
 *Author URI: https://budiharyono.com/
 *License: GPL2
 *License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *=========================
 */
add_action('plugins_loaded', 'mmwpshare_plugin_loaded');
function mmwpshare_plugin_loaded()
{
    if (!function_exists('carbon_fields_boot_plugin')) {
        // If Carbon Fields is not active, deactivate your plugin and display an error message
        add_action('admin_notices', 'mmwpshare_plugin_activation_error');
        add_action('admin_init', 'mmwpshare_deactivate_plugin');
    }
}
function mmwpshare_plugin_activation_error()
{
    echo '<div class="error"><p>You need to install and activate the Carbon Fields plugin first.</p></div>';
}
function mmwpshare_deactivate_plugin()
{
    deactivate_plugins(plugin_basename(__FILE__));
}
add_action('admin_init', 'mmwpshare_check_carbon_fields_deactivation');
function mmwpshare_check_carbon_fields_deactivation()
{
    if (!function_exists('carbon_fields_boot_plugin')) {
        deactivate_plugins(plugin_basename(__FILE__));
    }
}
