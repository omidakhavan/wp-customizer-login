<?php
/**
 * @link              http://averta.net
 * @since             1.0.0
 * @package           Wp Login Form
 */

/**
 * enqueue js and style
 */
require_once AVLO_DIR . 'admin/includes/login-functions.php' ; 


add_action( 'login_footer', 'avlo_social_show' );
function avlo_social_show(){
	echo '<ul id="avlo_social">';
	 avlo_social('facebook') ;
	 avlo_social('twitter') ;
	 avlo_social('instagram') ;
	 avlo_social('g+') ;
	 avlo_social('pint') ;
	 avlo_social('linkedin') ;
	 avlo_social('dribble') ;
	 avlo_social('github') ;
 	echo '</ul>';
}?>

