<?php

/**
 * @link              http://averta.net
 * @since             1.0.0
 * @package           Wp Login Form
 */

/**
 * Fired during plugin deactivation.
 * This class defines all code necessary to run during the plugin's deactivation.
 */
class Wp_login_Deactivator {

	public static function deactivate() {
	    remove_action( 'generate_rewrite_rules', 'avlo_hide_uri' );
	    
	    $GLOBALS['wp_rewrite']->flush_rules(true);
	}

}
