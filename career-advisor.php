<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.kite.agency/
 * @since             1.0.0
 * @package           Career_Advisor
 *
 * @wordpress-plugin
 * Plugin Name:       Career Advisor
 * Plugin URI:        https://github.com/MMagde/wp_career_advisor
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            kite labs
 * Author URI:        https://www.kite.agency/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       career-advisor
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'CAREER_ADVISOR_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-career-advisor-activator.php
 */
function activate_career_advisor() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-career-advisor-activator.php';
	Career_Advisor_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-career-advisor-deactivator.php
 */
function deactivate_career_advisor() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-career-advisor-deactivator.php';
	Career_Advisor_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_career_advisor' );
register_deactivation_hook( __FILE__, 'deactivate_career_advisor' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-career-advisor.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_career_advisor() {

	$plugin = new Career_Advisor();
	$plugin->run();

}
run_career_advisor();
