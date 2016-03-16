<?php

/**
 * @link              http://averta.net
 * @since             1.0.0
 * @package           averta-maintenance
 */

/**
 * [avma_get_option description]
 * @param  [type] $option  [description]
 * @param  [type] $section [description]
 * @param  string $default [description]
 * @return [type]          [description]
 */
function avlo_get_option( $option, $section, $default = '' ) {
	if ( empty( $option ) )
		return;
    $options = get_option( $section );
    if ( isset( $options[$option] ) ) {
        return $options[$option];
    }
    return $default;
}

/**
 * All option fetch here
 * @param  [string] 
 * @return [string]      
 */
function avlo_all_option($input){

	//first Tab Options
	$avlo_active         = avlo_get_option( 'avlo_active'        , 'avlo_general_tab' );
	$avlo_bg_select      = avlo_get_option( 'avlo_bg_select'     , 'avlo_general_tab' );
	$avlo_bg             = avlo_get_option( 'avlo_bg'            , 'avlo_general_tab' );
	$avlo_bg_color       = avlo_get_option( 'avlo_bg_color'      , 'avlo_general_tab' );
	$avlo_bg_mp4         = avlo_get_option( 'avlo_bg_mp4'        , 'avlo_general_tab' );
	$avlo_bg_webm        = avlo_get_option( 'avlo_bg_webm'       , 'avlo_general_tab' );
	$avlo_bg_ogg         = avlo_get_option( 'avlo_bg_ogg'        , 'avlo_general_tab' );
	$avlo_logo_select    = avlo_get_option( 'avlo_logo_select'   , 'avlo_general_tab' );
	$avlo_logo           = avlo_get_option( 'avlo_logo'          , 'avlo_general_tab' );
	$avlo_social_active  = avlo_get_option( 'avlo_social_active' , 'avlo_general_tab' );
	$avlo_social_co      = avlo_get_option( 'avlo_so_color'      , 'avlo_general_tab' );
	$avlo_social_fa      = avlo_get_option( 'avlo_social_fa'     , 'avlo_general_tab' );
	$avlo_social_tw      = avlo_get_option( 'avlo_social_tw'     , 'avlo_general_tab' );
	$avlo_social_in      = avlo_get_option( 'avlo_social_in'     , 'avlo_general_tab' );
	$avlo_social_yo      = avlo_get_option( 'avlo_social_yo'     , 'avlo_general_tab' );
	$avlo_social_g       = avlo_get_option( 'avlo_social_g'      , 'avlo_general_tab' );
	$avlo_social_pi      = avlo_get_option( 'avlo_social_pi'     , 'avlo_general_tab' );
	$avlo_social_li      = avlo_get_option( 'avlo_social_li'     , 'avlo_general_tab' );
	$avlo_social_dr      = avlo_get_option( 'avlo_social_dr'     , 'avlo_general_tab' );
	$avlo_social_gi      = avlo_get_option( 'avlo_social_gi'     , 'avlo_general_tab' );
	//second tab options
	$avlo_form_se      	 = avlo_get_option( 'avlo_frm_bg_select' , 'avlo_design_tab'  );
	$avlo_form_bg      	 = avlo_get_option( 'avlo_form_bg'       , 'avlo_design_tab'  );
	$avlo_form_co      	 = avlo_get_option( 'avlo_form_co'       , 'avlo_design_tab'  );
	$avlo_log_wid        = avlo_get_option( 'avlo_log_wid'       , 'avlo_design_tab'  );
	$avlo_log_hei        = avlo_get_option( 'avlo_log_hei'       , 'avlo_design_tab'  );
	$avlo_log_color      = avlo_get_option( 'avlo_log_color'     , 'avlo_design_tab'  );
	$avlo_log_radius     = avlo_get_option( 'avlo_log_radius'    , 'avlo_design_tab'  );
	$avlo_input_color    = avlo_get_option( 'avlo_input_color'   , 'avlo_design_tab'  );
	$avlo_btn_color      = avlo_get_option( 'avlo_btn_color'     , 'avlo_design_tab'  );
	$avlo_input_icon_u   = avlo_get_option( 'avlo_input_icon_u'  , 'avlo_design_tab'  );
	$avlo_input_icon_p   = avlo_get_option( 'avlo_input_icon_p'  , 'avlo_design_tab'  );
	$avlo_skin_select	 = avlo_get_option( 'avlo_skin_select'   , 'avlo_design_tab'  );

	//return oprtion value
	switch ($input) {
		case 'is_plugin_active':
			return $avlo_active ;
			break;
		case 'current_bg':
			return $avlo_bg_select ;
			break;
		case 'bg_image':
			echo   $avlo_bg ;
			break;
		case 'bg_color':
			echo $avlo_bg_color ;
			break;
		case 'bg_mp4':
			echo $avlo_bg_mp4 ;
			break;
		case 'bg_webm':
			echo $avlo_bg_webm ;
			break;
		case 'bg_ogg':
			echo $avlo_bg_ogg ;
			break;
		case 'current_logo':
			return $avlo_logo_select ;
			break;
		case 'img_logo':
			echo $avlo_logo ;
			break;
		case 'is_social_active':
			return $avlo_social_active ;
			break;
		case 'so_color':
			echo $avlo_social_co ;
			break;	
		case 'facebook':
			return $avlo_social_fa ;
			break;
		case 'twitter':
			return $avlo_social_tw ;
			break;
		case 'instagram':
			return $avlo_social_in ;
			break;
		case 'youtube':
			return $avlo_social_yo ;
			break;
		case 'g+':
			return $avlo_social_g ;
			break;
		case 'pint':
			return $avlo_social_pi ;
			break;
		case 'linkedin':
			return $avlo_social_li ;
			break;
		case 'dribble':
			return $avlo_social_dr ;
			break;
		case 'github':
			return $avlo_social_gi ;
			break;
		//second tab	
		case 'frm_bg_se':
			return $avlo_form_se ;
			break;
		case 'frm_bg':
			echo $avlo_form_bg ;
			break;
		case 'frm_color':
			echo $avlo_form_co ;
			break;
		case 'frm_width':
			return $avlo_log_wid ;
			break;
		case 'frm_height':
			return $avlo_log_hei ;
			break;
		case 'frm_b_color':
			return $avlo_log_color ;
			break;
		case 'frm_b_radius':
			return $avlo_log_radius ;
			break;
		case 'input_color':
			echo $avlo_input_color ;
			break;
		case 'btn_color':
			echo $avlo_btn_color ;
			break;
		case 'input_u_icon':
			echo $avlo_input_icon_u ;
			break;
		case 'input_p_icon':
			echo $avlo_input_icon_p ;
			break;	
		case 'skin':
			return $avlo_skin_select ;
			break;
		//third tab
		case 'is_hide_url':
			return avlo_get_option( 'avlo_hide_url'    , 'avlo_url_tab'     ); ;
			break;
		case 'is_hide_admin':
			return avlo_get_option( 'is_hide_admin'    , 'avlo_url_tab'     );
			break;
		case 'login_url':
			return avlo_get_option( 'avlo_login_url'     , 'avlo_url_tab'     );
			break;
		case 'logout_url':
			return avlo_get_option( 'avlo_logout_url'    , 'avlo_url_tab'     ); ;
			break;
		case 'admin_url':
			return avlo_get_option( 'avlo_admin_url'     , 'avlo_url_tab'     ); ;
			break;
		case 'lost_url':
			return avlo_get_option( 'avlo_lost_url'      , 'avlo_url_tab'     ); ;
			break;
		case 'reg_url':
			return avlo_get_option( 'avlo_reg_url'       , 'avlo_url_tab'     ); ;
			break;
		default:
			return "nothing";
			break;
	}
}

/**
 * Login Logo Function
 */
if ( avlo_all_option('is_plugin_active') == 'active' ) {
	add_action('login_head', 'avlo_login_logo');
	function avlo_login_logo() {
		if ( avlo_all_option( 'current_logo' ) == 'wplogo' ) {
			// nothing 
		}elseif ( avlo_all_option( 'current_logo' ) == 'logo' ){ 
	    ?><style>
			div#login h1 a  { background-image:url(<?php AVLO_URL. avlo_all_option( 'img_logo' ); ?>); }
	      </style><?php
		}elseif ( avlo_all_option( 'current_logo' ) == 'nologo' ) {
		?><style>
			body.login div#login h1 a  { background-image:none; }
	      </style><?php
		}
	}
}


/**
 * Login Background Function
 */
if ( avlo_all_option('is_plugin_active') == 'active' ) {
	add_action('login_head', 'avlo_login_bg');
	function avlo_login_bg() {
		if ( avlo_all_option( 'current_bg' ) == 'nobg' ) {
			//wordpress will be genrate defualt bg
		}elseif ( avlo_all_option( 'current_bg' ) == 'image' ) {
			?>
			<style>
				body.login {
				background-image: url(<?php AVLO_URL. avlo_all_option( 'bg_image' ); ?> );
				background-size: 100%;
				background-attachment: fixed;
			    }
			</style>
			<?php
		}elseif ( avlo_all_option( 'current_bg' ) == 'video' ) {
			?>
			<div id="avlo_video" >
		        <video autoplay loop poster=""  id="avlo_vid">
		          <style> body.login{  background-color: transparent } ; </style>
		            <source src="<?php avlo_all_option( 'bg_mp4'  ); ?> " type="video/mp4">
		            <source src="<?php avlo_all_option( 'bg_webm' ); ?> " type="video/webm">
		            <source src="<?php avlo_all_option( 'bg_ogg'  ); ?> " type="video/ogg">
		            Your browser does not support HTML5 video.
		        </video>
		    </div>
			<?php	
		}elseif ( avlo_all_option( 'current_bg' ) == 'color' ) {
			?>
				<style>
					body.login{  background-color: <?php avlo_all_option( 'bg_color') ?> ;} 
				</style>
			<?php
		}
	}
}

/**
 * Get Social Icons
 * @param  [String] $input
 * @return [Html]        
 */
function avlo_social( $input ) { 
	switch ( $input ) {
		case 'facebook':
			if ( !empty( avlo_all_option( 'facebook' ) ) ) { 
				echo  '<li id="avma_fa" class="the-icons span3"><a class="demo-icon icon-facebook" href="avlo_all_option( facebook )">&#xe803;</a></li>' ;
				break;
			}else{
				break;	
			}	
		case 'twitter':
			if ( !empty( avlo_all_option( 'twitter' ) ) ) { 
				echo "<li id='avma_tw' class='the-icons span3'><a class='demo-icon icon-twitter' href=$avma_social_tw>&#xe802;</a></li>" ;
				break;
		    }else{
		    	break;
		    }
		case 'instagram':
			if 	( !empty( avlo_all_option( 'instagram' ) ) ) { 
				echo "<li id='avma_in' class='the-icons span3' ><a class='demo-icon icon-instagram' href= $avma_social_in>&#xe807;</a></li>" ;
				break;
		    }else{
		    	break;
		    }
		case 'youtube':
			if ( !empty( avlo_all_option( 'youtube' ) ) ) { 
				echo "<li id='avma_yo' class='the-icons span3' ><a class='demo-icon icon-youtube' href= $avma_social_yo >&#xe808;</a></li>" ;
				break;
		    }else{
		    	break;
		    }
		case 'g+':
			if ( !empty( avlo_all_option( 'g+' ) ) ) { 
				echo "<li id='avma_g' class='the-icons span3' ><a class='demo-icon icon-gplus' href=$avma_social_g >&#xe806;</a></li>" ;
				break;	
		    }else{
		    	break;
		    }
		case 'pint':
			if ( !empty( avlo_all_option( 'pint' ) ) ) { 
				echo "<li id='avma_pi' class='the-icons span3'><a class='demo-icon icon-pinterest' href=$avma_social_pi>&#xe801;</a></li>";
				break;
		    }else{
		    	break;
		    }
		case 'linkedin':
			if ( !empty( avlo_all_option( 'linkedin' ) ) ) { 
				echo "<li id='avma_li' class='the-icons span3'><a class='demo-icon icon-linkedin' href= $avma_social_li>&#xe800;</a></li>" ;
				break;
		    }else{
		    	break;
		    }
		case 'dribble':
			if ( !empty ( avlo_all_option( 'dribble' ) ) ) { 
				echo "<li id='avma_dr' class='the-icons span3'><a class='demo-icon icon-dribbble' href= $avma_social_dr >&#xe804;</a></li>" ;
				break;
		    }else{
		    	break;
		    }
		case 'github':
			if ( !empty( avlo_all_option( 'github' ) ) ) { 
				echo "<li id='avma_fa' class='the-icons span3' ><a class='demo-icon icon-github' href= $avma_social_gi >&#xe805;</a></li>" ;
				break;
			}else{
				break;
			}	
		default:

			break;
	}	
}

/**
 * Form backgorund and layout
 */
if ( avlo_all_option( 'is_plugin_active' ) == 'active' ) {
	add_action('login_form', 'avlo_form_bg');
	function avlo_form_bg(){
		if ( avlo_all_option( 'frm_bg_se' ) == 'defualtc' ) {
			//nothing wordpress will be do best job :)
		}elseif ( avlo_all_option( 'frm_bg_se' ) == 'image' ) {
			?>
			<style>
				form#loginform{background-image: url(<?php AVLO_URL. avlo_all_option( 'frm_bg' ); ?>);
				}
			</style><?php
		}elseif ( avlo_all_option( 'frm_bg_se' ) == 'color' ) {
			?>
			<style>
				form#loginform{background-color:<?php AVLO_URL. avlo_all_option( 'frm_color' ); ?>;}
			</style><?php
		}
		if ( !empty(avlo_all_option( 'frm_width' ) ) ) {
			?>
			<style>
				.login form {width: <?php echo avlo_all_option( 'frm_width' ); ?>px;}
			</style>
			<?php
		}
		if ( !empty(avlo_all_option( 'frm_height' ) ) ) {
			?>
			<style>
				body div#login {height: <?php echo avlo_all_option( 'frm_height' ); ?>px;}
			</style>
			<?php
		}
		if ( !empty(avlo_all_option( 'frm_b_color' ) ) ) {
			?>
			<style>
				form#loginform{border: solid 1px <?php echo avlo_all_option( 'frm_b_color' ); ?>;}
			</style>
			<?php
		}
		if ( !empty(avlo_all_option( 'frm_b_radius' ) ) ) {
			?>
			<style>
				form#loginform{border-radius: <?php echo avlo_all_option( 'frm_b_radius' ); ?>px;}
			</style>
			<?php
		}
	}
}
/**
 * skin
 */
if ( avlo_all_option( 'is_plugin_active' ) == 'active' ) {
	add_action('login_head', 'avlo_skin');
	function avlo_skin(){
		if ( avlo_all_option( 'skin' )  != 'default' ){
			?><body <?php body_class(); ?>><?php
		}
	}
}
add_filter( 'body_class' , 'multisite_body_classe' );
function multisite_body_classe($classes) {
    $skin = avlo_all_option( 'skin' );
	$classes[] = $skin ;
	return $classes;
}


if ( avlo_all_option( 'is_plugin_active' ) == 'active' ) {

	add_option("hide_rules", "");
	define("LOGIN_SLUG", avlo_all_option('login_url'));
	define("ADMIN_SLUG", avlo_all_option('admin_url'));
	define("LOGOUT_SLUG", avlo_all_option('logout_url'));
	define("REGISTER_SLUG", avlo_all_option('register'));
	define("FORGOT_SLUG", avlo_all_option('lost_url'));
	/**
	 * [access first contorol of admin]
	 * @return [void] 
	 */
	add_action('init', 'avlo_access_url');
	function avlo_access_url() {

		global $current_user;

		if(avlo_all_option('is_hide_url') == 'active') {
			if(avlo_uri() == 'wp-login.php') {
				wp_redirect(get_option('siteurl'), 302);
				exit;
			}
		}
		echo get_option('siteurl');
		if(avlo_uri() == LOGOUT_SLUG) {
			if(ADMIN_SLUG != "")
				setcookie( is_ssl() ? SECURE_AUTH_COOKIE : AUTH_COOKIE, ' ', time() - YEAR_IN_SECONDS, SITECOOKIEPATH . ADMIN_SLUG, COOKIE_DOMAIN );
			wp_logout();
			wp_redirect(get_option('siteurl'));
			exit;
		}
		if(avlo_all_option('is_hide_admin') == 'active' && !user_can( $current_user, "edit_posts" )) {
			if(avlo_uri() == 'wp-admin') {
				wp_redirect(get_option('siteurl'));
				exit;
			}
		}
	}


	/**
	 * [avlo_uri Returns URL path]
	 * @return string $part
	 */
	function avlo_uri()
	{
		$part = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
		$part = trim($part, "/");
		$part = strtolower($part);
		$part = explode("/", $part);
		return $part[0];
	}
	// Hooked to Wordpress for changing cookie on new admin page
	function avlo_admin_coo($auth_cookie, $expire) {
		setcookie(is_ssl() ? SECURE_AUTH_COOKIE : AUTH_COOKIE, $auth_cookie, $expire, SITECOOKIEPATH . ADMIN_SLUG, COOKIE_DOMAIN, is_ssl(), true);
	}

	// Changes wp-admin slug everywhere
	function avlo_admin_where( $url ) {
		return str_replace("wp-admin", ADMIN_SLUG, $url);
	}

	if(ADMIN_SLUG != "") {
		add_action("set_auth_cookie", "avlo_admin_coo", 10, 2);
		add_filter('site_url',  'avlo_admin_where', 10, 1);
	}


	// Changes logout URL slug everywhere
	add_filter('logout_url', function ($url, $redirect) {
		return home_url("/".LOGOUT_SLUG);
	}, 10, 2);

	// Changes login URL slug everywhere
	add_filter('login_url', function ($url, $redirect) {
		return home_url("/".LOGOUT_SLUG);
	}, 10, 2 );

	// Changes registration URL slug everywhere
	add_filter('register',function ($url) {
		return str_replace(site_url('wp-login.php?action=register', 'login'), site_url(REGISTER_SLUG, 'login'), $url);
	});

	// Changes lostpassword URL slug everywhere
	add_filter('lostpassword_url', function ($url) {
	   return str_replace('?action=lostpassword','',str_replace(network_site_url('wp-login.php', 'login'), site_url(FORGOT_SLUG, 'login'), $url));
	});

	add_action( 'login_form', 'avlo_gange_url');
	add_action( 'register_form', 'avlo_gange_url');
	add_action( 'lostpassword_form', 'avlo_gange_url');
	add_action( 'resetpass_form', 'avlo_gange_url');
	function avlo_gange_url()
	{
		$array = array('register_form' => REGISTER_SLUG,
				'lostpassword_form' => FORGOT_SLUG,
				'resetpass_form' => FORGOT_SLUG,
				'login_form' => LOGIN_SLUG
			);

		$slug = $array[current_filter()];
		$form = ob_get_contents();
		$form = preg_replace( "/wp-login\.php([^\"]*)/", $slug.'$1', $form);
		ob_get_clean();
		echo $form;
	}

	// Where to redirect after a successful login, default redirection is `wp-admin`
	add_action('login_redirect', function () {
		global $redirect_to;
		if (!isset($_GET['redirect_to'])) {
			return get_option('siteurl')."/".(ADMIN_SLUG != "" ? ADMIN_SLUG : "wp-admin");
		}
		else
			return $redirect_to;
	});

	// Redirection URL after submitting lostpassword form
	add_filter('lostpassword_redirect', function() {
		return site_url(LOGIN_SLUG."?checkemail=confirm" );
	});

	// Redirection URL after submitting registration form
	add_filter('registration_redirect', function() {
		return site_url(LOGIN_SLUG."?checkemail=registered" );
	});

	/**
	 * [avlo_hide_uri Handles new RewriteRules as well as custom ones]
	 */
	function avlo_hide_uri()
	{
	    global $wp_rewrite;

	    // Backup original .htaccess file
		if (!file_exists(ABSPATH."/.htaccess.backup")) {
			copy(ABSPATH."/.htaccess", ABSPATH."/.htaccess.backup");
		}

		add_rewrite_rule( avlo_all_option('login_url').'/?$', 'wp-login.php', 'top' );

		if(avlo_all_option('login_url') != "")
			add_rewrite_rule(avlo_all_option('login_url').'/(.*)', "wp-admin/$1?%{QUERY_STRING}", 'top');

		if(get_option('users_can_register'))
			add_rewrite_rule( avlo_all_option('reg_url').'/?$', 'wp-login.php?action=register', 'top' );

		add_rewrite_rule( avlo_all_option('lost_url').'/?$', 'wp-login.php?action=lostpassword', 'top' );

		$str = '';
		if(avlo_all_option('admin_url') != '')
		{
			$forerules = array("RewriteRule" => '^'.avlo_all_option('admin_url').'$ '.avlo_all_option('admin_url').'/ [R,L]');

			foreach ($forerules as $cmd => $rules) {
				if(is_array($rules)) {
					foreach ($rules as $rule) {
						$str .= "$cmd $rule\r\n";
					}
				}
				else
					$str .= "$cmd $rules\r\n";
			}
		}

		add_filter('mod_rewrite_rules', function ($rules) use ($str){
			$pattern = "@(^\QRewriteRule ^index\.php$ - [L]\E\s)@m";
			$rules = preg_replace($pattern, "$1".$str, $rules);
			update_option("hide_rules", $rules);
			return $rules;
		});

		$wp_rewrite->flush_rules(true);
	}

	/**
	 * [redirectOnDeactivation Redirects after deactivation to prevent intrruption of old admin slug]
	 * @return [void]
	 */
	add_action('deactivated_plugin', 'avlo_deactivate', 10, 1);
	function avlo_deactivate($plugin) {
		if($plugin == 'hide-login/hide-login.php')
		{
			$current = get_option( 'active_plugins', array() );
			$key = array_search( $plugin, $current );
			unset( $current[ $key ] );
			update_option('active_plugins', $current);
			exit(wp_safe_redirect('/wp-admin/plugins.php?deactivate=true&plugin_status=all&paged=1&s='));
		}
	}

	add_action("admin_init", "avlo_start_url");
	function avlo_start_url(){
		if(avlo_test($error)) {
			$type = 'error';
			$id = 0;
			wp_safe_redirect("/".(ADMIN_SLUG != "") ? ADMIN_SLUG : "wp-admin"."/admin.php?page=hide_settings&type=$type&id=$id");
			exit;
		}
		avlo_hide_uri();
		
	}

	function avlo_test($var)
	{
		return $var;
	}
}	