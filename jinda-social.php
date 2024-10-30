<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.jindatheme.com
 * @since             1.0.0
 * @package           Jinda_Social
 *
 * @wordpress-plugin
 * Plugin Name:       Jinda Facebook lightbox
 * Plugin URI:        http://www.jindatheme.com/blog/jinda-facebook-lightbox-wordpress-plugin
 * Description:       Jinda Facebook lightbox is built for website that want to show Facebook Page Plugin in simple backdrop lightbox. with responsive ready and free to custom some content and color.
 * Version:           1.1.1
 * Author:            JindaTheme
 * Author URI:        http://www.jindatheme.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       jinda-social
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-jinda-social-activator.php
 */
function activate_jinda_social() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-jinda-social-activator.php';
	Jinda_Social_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-jinda-social-deactivator.php
 */
function deactivate_jinda_social() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-jinda-social-deactivator.php';
	Jinda_Social_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_jinda_social' );
register_deactivation_hook( __FILE__, 'deactivate_jinda_social' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-jinda-social.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_jinda_social() {

	$plugin = new Jinda_Social();
	$plugin->run();

}
run_jinda_social();
