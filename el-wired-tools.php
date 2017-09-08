<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              kylebihler.com
 * @since             1.0.0
 * @package           El_Wired_Tools
 *
 * @wordpress-plugin
 * Plugin Name:       El Wired Tools
 * Plugin URI:        elwired.com
 * Description:       A tool box full of good stuff.
 * Version:           1.0.0
 * Author:            Kyle Bihler
 * Author URI:        kylebihler.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       el-wired-tools
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-el-wired-tools-activator.php
 */
function activate_el_wired_tools() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-el-wired-tools-activator.php';
	El_Wired_Tools_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-el-wired-tools-deactivator.php
 */
function deactivate_el_wired_tools() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-el-wired-tools-deactivator.php';
	El_Wired_Tools_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_el_wired_tools' );
register_deactivation_hook( __FILE__, 'deactivate_el_wired_tools' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-el-wired-tools.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_el_wired_tools() {

	$plugin = new El_Wired_Tools();
	$plugin->run();

}
run_el_wired_tools();
