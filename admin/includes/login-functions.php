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


function avlo_all_option($input){
	//first Tab Options
	$avlo_active         = avlo_get_option( 'avlo_active'        , 'avlo_general_tab' );
	$avlo_bg_select      = avlo_get_option( 'avlo_bg_select'     , 'avlo_general_tab' );
	$avlo_bg             = avlo_get_option( 'avlo_bg'            , 'avlo_general_tab' );
	$avlo_bg_color       = avlo_get_option( 'avlo_bg_color'      , 'avlo_general_tab' );
	$avlo_logo_select    = avlo_get_option( 'avlo_logo_select'   , 'avlo_general_tab' );
	$avlo_logo           = avlo_get_option( 'avlo_logo'          , 'avlo_general_tab' );
	$avlo_logo_txt       = avlo_get_option( 'avlo_logo_txt'      , 'avlo_general_tab' );
	$avlo_social_active  = avlo_get_option( 'avlo_social_active' , 'avlo_general_tab' );
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
	$avlo_log_wid      	 = avlo_get_option( 'avlo_log_wid'       , 'avlo_design_tab'  );
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
			return $avlo_bg_color ;
			break;
		case 'current_logo':
			return $avlo_logo_select ;
			break;
		case 'img_logo':
			echo $avlo_logo ;
			break;
		case 'txt_logo':
			echo $avlo_logo_txt ;
			break;
		case 'is_social_active':
			return $avlo_social_active ;
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
			return $avlo_input_color ;
			break;
		case 'btn_color':
			return $avlo_btn_color ;
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
		}elseif ( avlo_all_option( 'current_logo' ) == 'text' ) {
			$a = avlo_all_option( 'txt_logo' ) ;
		  ?><script>
		  	jQuery('document').ready(function(){
				jQuery( '#login h1 a').remove();
		  	});
	      </script><?php
		}
	}
}

