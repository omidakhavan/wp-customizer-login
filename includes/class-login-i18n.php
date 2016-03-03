<?php

/**
 * @link              http://averta.net
 * @since             1.0.0
 * @package           Wp Login Form
 */

/**
 * Define the internationalization functionality.
 */
class Wp_Login_i18n {


	/**
	 * Load the plugin text domain for translation.
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'avlo_lofrm',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
