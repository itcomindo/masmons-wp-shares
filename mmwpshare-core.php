<?php
defined('ABSPATH') || exit;

function mmwpshare_load_scripts()
{
    wp_enqueue_style('mmwpshare-global-css', plugins_url('scripts/mmwpshare-global.css', __FILE__));
    wp_enqueue_style('mmwpshare-style1-css', plugins_url('scripts/style1.css', __FILE__));
    wp_enqueue_script('mmwpshare-global-js', plugins_url('scripts/mmwps-global.js', __FILE__), array('jquery'), '1.0.0', true);
    wp_enqueue_script('mmwpshare-style1-js', plugins_url('scripts/style1.js', __FILE__), array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'mmwpshare_load_scripts');
