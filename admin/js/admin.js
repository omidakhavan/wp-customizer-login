(function( $ ) {
	'use strict';
$(document).ready(function(){

	var avlo_bg 		=	$('#avlo_general_tab_avlo_bg_').closest('tr').hide();
	var avlo_bg_color   =	$('#avlo_general_tab_avlo_bg_color_').closest('tr').hide();
	var avlo_logo 		=	$('#avlo_general_tab_avlo_logo_').closest('tr').hide();
	var avlo_txt_logo   =	$('#avlo_general_tab_avlo_logo_txt_').closest('tr').hide();
	var avlo_fa         =	$('#avlo_general_tab_avlo_social_fa_').closest('tr').hide();
	var avlo_tw 		=	$('#avlo_general_tab_avlo_social_tw_').closest('tr').hide();
	var avlo_in 		= 	$('#avlo_general_tab_avlo_social_in_').closest('tr').hide();
	var avlo_yo 		=	$('#avlo_general_tab_avlo_social_yo_').closest('tr').hide();
	var avlo_g 			=	$('#avlo_general_tab_avlo_social_g_').closest('tr').hide();
	var avlo_pi 	    =	$('#avlo_general_tab_avlo_social_pi_').closest('tr').hide();
	var avlo_li 		=	$('#avlo_general_tab_avlo_social_li_').closest('tr').hide();
	var avlo_dr 		=	$('#avlo_general_tab_avlo_social_dr_').closest('tr').hide();
	var avlo_gi 		=	$('#avlo_general_tab_avlo_social_gi_').closest('tr').hide();

	//background
	$('#avlo_general_tab_avlo_bg_select_').on('change',function(){ 
		if ( this.value == 'image' ) {
			avlo_bg.show();
			avlo_bg_color.hide();
		};
		if ( this.value == 'color' ) {
			avlo_bg.hide();
			avlo_bg_color.show();
		};
		if ( this.value == 'video' ) {
			avlo_bg.hide();
			avlo_bg_color.hide();
		};
		if ( this.value == 'nobg' ) {
			avlo_bg.hide();
			avlo_bg_color.hide();
		};
	});
	//save bg
	var sr = $( '#avlo_general_tab_avlo_bg_select_ option:selected' ).text();
	if ( sr  == 'No Background' ){
			avlo_bg.hide();
			avlo_bg_color.hide();
	}else if ( sr == 'Background Image' ){
			avlo_bg.show();
			avlo_bg_color.hide();
	}else if ( sr == 'Background Video' ){
			avlo_bg.hide();
			avlo_bg_color.hide();
	}else if (sr == 'Background Color' ){
			avlo_bg.hide();
			avlo_bg_color.show();
	}


	//logo
	$( '#avlo_general_tab_avlo_logo_select_' ).on('change',function(){
		if ( this.value == 'wplogo' ) {
			avlo_logo.hide();
			avlo_txt_logo.hide();
		};
		if ( this.value == 'nologo' ) {
			avlo_logo.hide();
			avlo_txt_logo.hide();
		};
		if ( this.value == 'logo' ) {
			avlo_logo.show();
			avlo_txt_logo.hide();
		};
		if ( this.value == 'text' ) {
			avlo_logo.hide();
			avlo_txt_logo.show();
		};
	});
	//save logo
	var sr = $( '#avlo_general_tab_avlo_logo_select_ option:selected' ).text();
		if ( sr  == 'Wordpress defualt' ){
				avlo_logo.hide();
				avlo_txt_logo.hide();
		}else if ( sr == 'No Logo (even default)' ){
				avlo_logo.hide();
				avlo_txt_logo.hide();
		}else if ( sr == 'Custom Logo' ){
				avlo_logo.show();
				avlo_txt_logo.hide();
		}else if (sr == 'Text Instead Logo' ){
				avlo_logo.hide();
				avlo_txt_logo.show();
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
		};
	});
	//save social
	var sr = $( '#avlo_general_tab_avlo_social_active_ option:selected' ).text();
		if ( sr  == 'Active' ){
			avlo_fa.show();
			avlo_tw.show();
			avlo_in.show();
			avlo_yo.show();
			avlo_g.show();
			avlo_pi.show();
			avlo_li.show();
			avlo_dr.show();
			avlo_gi.show();
		}else if ( sr  == 'Deactive' ){
			avlo_fa.hide();
			avlo_tw.hide();
			avlo_in.hide();
			avlo_yo.hide();
			avlo_g.hide();
			avlo_pi.hide();
			avlo_li.hide();
			avlo_dr.hide();
			avlo_gi.hide();
		}	
	});
})( jQuery );
