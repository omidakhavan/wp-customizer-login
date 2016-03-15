(function( $ ) {
	'use strict';
$(document).ready(function(){

	var avlo_bg 		=	$('#avlo_general_tab_avlo_bg_').closest('tr').hide();
	var avlo_mp4		=   $('#avlo_general_tab_avlo_bg_mp4_').closest('tr').hide();
	var avlo_webm		=   $('#avlo_general_tab_avlo_bg_webm_').closest('tr').hide();
	var avlo_ogg		=   $('#avlo_general_tab_avlo_bg_ogg_').closest('tr').hide();
	var avlo_bg_color   =	$('#avlo_general_tab_avlo_bg_color_').closest('tr').hide();
	var avlo_logo 		=	$('#avlo_general_tab_avlo_logo_').closest('tr').hide();
	var avlo_fa         =	$('#avlo_general_tab_avlo_social_fa_').closest('tr').hide();
	var avlo_tw 		=	$('#avlo_general_tab_avlo_social_tw_').closest('tr').hide();
	var avlo_in 		= 	$('#avlo_general_tab_avlo_social_in_').closest('tr').hide();
	var avlo_yo 		=	$('#avlo_general_tab_avlo_social_yo_').closest('tr').hide();
	var avlo_g 			=	$('#avlo_general_tab_avlo_social_g_').closest('tr').hide();
	var avlo_pi 	    =	$('#avlo_general_tab_avlo_social_pi_').closest('tr').hide();
	var avlo_li 		=	$('#avlo_general_tab_avlo_social_li_').closest('tr').hide();
	var avlo_dr 		=	$('#avlo_general_tab_avlo_social_dr_').closest('tr').hide();
	var avlo_gi 		=	$('#avlo_general_tab_avlo_social_gi_').closest('tr').hide();
	var avlo_co 		=   $('#avlo_general_tab_avlo_so_color_').closest('tr').hide();
	var avlo_frm_bg 	=   $('#avlo_design_tab_avlo_form_bg_').closest('tr').hide();
	var avlo_frm_co 	=   $('#avlo_design_tab_avlo_form_co_').closest('tr').hide();

	//background
	$('#avlo_general_tab_avlo_bg_select_').on('change',function(){ 
		if ( this.value == 'image' ) {
			avlo_bg.show();
			avlo_bg_color.hide();
			avlo_mp4.hide();
			avlo_webm.hide();
			avlo_ogg.hide();
		};
		if ( this.value == 'color' ) {
			avlo_bg.hide();
			avlo_bg_color.show();
			avlo_mp4.hide();
			avlo_webm.hide();
			avlo_ogg.hide();
		};
		if ( this.value == 'video' ) {
			avlo_bg.hide();
			avlo_bg_color.hide();
			avlo_mp4.show();
			avlo_webm.show();
			avlo_ogg.show();
		};
		if ( this.value == 'nobg' ) {
			avlo_bg.hide();
			avlo_bg_color.hide();
			avlo_mp4.hide();
			avlo_webm.hide();
			avlo_ogg.hide();
		};
	});
	//save bg
	var av = $( '#avlo_general_tab_avlo_bg_select_ option:selected' ).text();
	if ( av  == 'No Background' ){
			avlo_bg.hide();
			avlo_bg_color.hide();
			avlo_mp4.hide();
			avlo_webm.hide();
			avlo_ogg.hide();
	}else if ( av == 'Background Image' ){
			avlo_bg.show();
			avlo_bg_color.hide();
			avlo_mp4.hide();
			avlo_webm.hide();
			avlo_ogg.hide();
	}else if ( av == 'Background Video' ){
			avlo_bg.hide();
			avlo_bg_color.hide();
			avlo_mp4.show();
			avlo_webm.show();
			avlo_ogg.show();
	}else if (av == 'Background Color' ){
			avlo_bg.hide();
			avlo_bg_color.show();
			avlo_mp4.hide();
			avlo_webm.hide();
			avlo_ogg.hide();
	}


	//logo
	$( '#avlo_general_tab_avlo_logo_select_' ).on('change',function(){
		if ( this.value == 'wplogo' ) {
			avlo_logo.hide();
		};
		if ( this.value == 'nologo' ) {
			avlo_logo.hide();
		};
		if ( this.value == 'logo' ) {
			avlo_logo.show();
		};

	});
	//save logo
	var ac = $( '#avlo_general_tab_avlo_logo_select_ option:selected' ).text();
		if ( ac  == 'Wordpress defualt' ){
				avlo_logo.hide();
		}else if ( ac == 'No Logo (even default)' ){
				avlo_logo.hide();
		}else if ( ac == 'Custom Logo' ){
				avlo_logo.show();
		}

	//social
	$( '#avlo_general_tab_avlo_social_active_' ).on('change',function(){
		if ( this.value == 'active' ) {
			avlo_fa.show();
			avlo_tw.show();
			avlo_in.show();
			avlo_yo.show();
			avlo_g.show();
			avlo_pi.show();
			avlo_li.show();
			avlo_dr.show();
			avlo_gi.show();
			avlo_co.show();
		}else{
			avlo_fa.hide();
			avlo_tw.hide();
			avlo_in.hide();
			avlo_yo.hide();
			avlo_g.hide();
			avlo_pi.hide();
			avlo_li.hide();
			avlo_dr.hide();
			avlo_gi.hide();
			avlo_co.hide();
		};
	});
	//save social
	var ax = $( '#avlo_general_tab_avlo_social_active_ option:selected' ).text();
		if ( ax  == 'Active' ){
			avlo_fa.show();
			avlo_tw.show();
			avlo_in.show();
			avlo_yo.show();
			avlo_g.show();
			avlo_pi.show();
			avlo_li.show();
			avlo_dr.show();
			avlo_gi.show();
			avlo_co.show();
		}else if ( ax  == 'Deactive' ){
			avlo_fa.hide();
			avlo_tw.hide();
			avlo_in.hide();
			avlo_yo.hide();
			avlo_g.hide();
			avlo_pi.hide();
			avlo_li.hide();
			avlo_dr.hide();
			avlo_gi.hide();
			avlo_co.hide();
		}
			//form bg 
	$( '#avlo_design_tab_avlo_frm_bg_select_' ).on('change',function(){
		if ( this.value == 'image' ) {
			avlo_frm_co.hide();
			avlo_frm_bg.show();
		}else if (this.value == 'color' ){
			avlo_frm_co.show();
			avlo_frm_bg.hide();
		}else if (this.value == 'defualtc'){
			avlo_frm_co.hide();
			avlo_frm_bg.hide();
		}
	});
	//save form bg
	var az = $( '#avlo_design_tab_avlo_frm_bg_select_ option:selected' ).val();
		if ( az  == 'image' ){
			avlo_frm_co.hide();
			avlo_frm_bg.show();
		}else if ( az  == 'color' ){
			avlo_frm_co.show();
			avlo_frm_bg.hide();
		}else if ( az == 'defualtc' ){
			avlo_frm_co.hide();
			avlo_frm_bg.hide();
		}
	});
})( jQuery );
