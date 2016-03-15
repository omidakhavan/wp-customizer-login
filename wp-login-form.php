<?php

/**
 * @link              http://averta.net
 * @since             1.0.0
 * @package           Wp Login Form
 *
 * Plugin Name:       Wp Login Form 
 * Description:       Login Form Customizer.
 * Version:           1.0.0
 * Author:            Averta
 * Text Domain:       avlo_lofrm
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
/**
 * Define Some Var
 */
define( 'AVLO_VER', '1.0.0' );
define( 'AVLO_DIR', plugin_dir_path(  __FILE__  ));
define( 'AVLO_URL', plugins_url( '' , __FILE__ ));
/**
 * The code that runs during plugin activation.
 */
function activate_wp_login_form() {
	require_once AVLO_DIR . 'includes/class-login-activator.php';
	Wp_Login_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 */
function deactivate_wp_login_form() {
	require_once AVLO_DIR . 'includes/class-login-deactivator.php';
	Wp_Login_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_login_form' );
register_deactivation_hook( __FILE__, 'deactivate_wp_login_form' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require AVLO_DIR . 'includes/class-wp-login.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_Wp_login_form() {

	$plugin = new Wp_Login_Form();
	$plugin->run();

}
run_Wp_login_form();
