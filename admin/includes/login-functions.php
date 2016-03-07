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
	//third tab options
	$avlo_login_url      = avlo_get_option( 'avlo_login_url'     , 'avlo_url_tab'     );
	$avlo_reg_url        = avlo_get_option( 'avlo_reg_url'       , 'avlo_url_tab'     );
	$avlo_lost_url       = avlo_get_option( 'avlo_lost_url'      , 'avlo_url_tab'     );
	$avlo_logout_url     = avlo_get_option( 'avlo_logout_url'    , 'avlo_url_tab'     );
	$login_headertitle   = avlo_get_option( 'login_headertitle'  , 'avlo_url_tab'     );


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
		//third tab
		case 'login_url':
			echo $avlo_login_url ;
			break;
		case 'reg_url':
			echo $avlo_reg_url ;
			break;
		case 'lost_url':
			echo $avlo_lost_url ;
			break;
		case 'logout_url':
			echo $avlo_logout_url ;
			break;
		case 'login_title':
			return $login_headertitle ;
			break;			
		default:
			echo "nothing";
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


