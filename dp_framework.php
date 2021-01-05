<?php

/**
 * Plugin Name:       DP Framework
 * Plugin URI:        https://dolugins.com
 * Description:       Handle the basics with this plugin.
 * Version:           0.0.1
 * Author:            dplugins
**/

define('DP_URL',	plugin_dir_url(__FILE__));

function DP_settings_page() {
	add_menu_page( 
		'DP Framework', 
		'DP Framework', 
		'manage_options', 
		'dp-framework', 
		'DP_framework_page',
		'dashicons-editor-code'
	);

	add_submenu_page( SCORG_SAMPLE_PLUGIN_LICENSE_PAGE, 'License', 'License', 'manage_options', SCORG_SAMPLE_PLUGIN_LICENSE_PAGE, 'SCORG_license_page', 9999 );
}
add_action('admin_menu', 'DP_settings_page');

function DP_framework_page(){
	require_once 'styleguide.php';
}

function DP_enqueue_admin_script() {
	wp_enqueue_style( 'DP_admin_css', DP_URL . 'css/admin.css');
}

add_action( 'admin_enqueue_scripts', 'DP_enqueue_admin_script' );