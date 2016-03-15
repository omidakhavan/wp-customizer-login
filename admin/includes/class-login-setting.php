<?php
/**
 * WordPress settings API demo class
 *
 * @author Tareq Hasan
 */
require_once AVLO_DIR . 'admin/includes/class-settings-api.php' ; 

class Avlo_Settings {
    private $settings_api;
    function __construct() {
        $this->settings_api = new Avlo_Settings_Api;
        add_action( 'admin_init', array($this, 'admin_init') );
        add_action( 'admin_menu', array($this, 'admin_menu') );
    }
    function admin_init() {
        //set the settings
        $this->settings_api->set_sections( $this->get_settings_sections() );
        $this->settings_api->set_fields( $this->get_settings_fields() );
        //initialize settings
        $this->settings_api->admin_init();
    }
    function admin_menu() {
        add_menu_page( 'Login Form Customizer ', 'Wp Login', 'manage_options', 'wp-login-form', array($this, 'plugin_page'),'dashicons-smiley',78
);
    }
    function get_settings_sections() {
        $sections = array(
            array(
                'id' => 'avlo_general_tab',
                'title' => __( 'General Settings', 'avlo_lofrm' )
            ),
            array(
                'id' => 'avlo_design_tab',
                'title' => __( 'Style Settings', 'avlo_lofrm' )
            ),
            array(
                'id' => 'avlo_url_tab',
                'title' => __( 'Login Url', 'avlo_lofrm' )
            )
        );
        return $sections;
    }
    /**
     * Returns all the settings fields
     *
     * @return array settings fields
     */
    function get_settings_fields() {
        $settings_fields = array(
            'avlo_general_tab' => array(
                array(
                    'name'              => 'avlo_div00_txt',
                    'label'             => __( '<span class="avlo_div_txt" > Activation </span>', 'avlo_lofrm' ),
                    'desc'              => __( '<hr>', 'avlo_lofrm' ),
                    'type'              => 'html',
                    'default'           => ''
                ),
                array(
                    'name'              => 'avlo_active',
                    'label'             => __( 'Plugin Activation', 'avlo_lofrm' ),
                    'type'              => 'radio',
                    'options'           => array(
                        'active'     => 'Active',
                        'deactive'   => 'Deactive'
                )),
                array(
                    'name'              => 'avlo_div0_txt',
                    'label'             => __( '<span class="avlo_div_txt" > Background </span>', 'avlo_lofrm' ),
                    'desc'              => __( '<hr>', 'avlo_lofrm' ),
                    'type'              => 'html',
                    'default'           => ''
                ),
                array(
                    'name'              => 'avlo_bg_select',
                    'label'             => __( 'Login form background style', 'avlo_lofrm' ),
                    'type'              => 'select',
                    'options'           => array(
                        'nobg'       => 'No Background',
                        'image'      => 'Background Image',
                        'video'      => 'Background Video',
                        'color'      => 'Background Color'
                    )
                ),
                array(
                    'name'              => 'avlo_bg',
                    'label'             => __( 'Background', 'avlo_lofrm' ),
                    'desc'              => __( 'Choose background for your login page', 'avlo_lofrm' ),
                    'type'              => 'file',
                    'default'           => ''
                ),
                array(
                    'name'              => 'avlo_bg_mp4',
                    'label'             => __( 'Background Video', 'avlo_lofrm' ),
                    'desc'              => __( 'Mp4', 'avlo_lofrm' ),
                    'type'              => 'file',
                    'default'           => ''
                ),
                array(
                    'name'              => 'avlo_bg_webm',
                    'label'             => __( 'Background Video', 'avlo_lofrm' ),
                    'desc'              => __( 'Webm', 'avlo_lofrm' ),
                    'type'              => 'file',
                    'default'           => ''
                ),
                array(
                    'name'              => 'avlo_bg_ogg',
                    'label'             => __( 'Background Video', 'avlo_lofrm' ),
                    'desc'              => __( 'Ogg', 'avlo_lofrm' ),
                    'type'              => 'file',
                    'default'           => ''
                ),
                array(
                    'name'              => 'avlo_bg_color',
                    'label'             => __( 'Background Color', 'avlo_lofrm' ),
                    'desc'              => __( 'Pick login form background color ', 'avlo_lofrm' ),
                    'type'              => 'color',
                    'default'           => ''
                ),
                array(
                    'name'              => 'avlo_div1_txt',
                    'label'             => __( '<span class="avlo_div_txt" > Logo </span>', 'avlo_lofrm' ),
                    'desc'              => __( '<hr>', 'avlo_lofrm' ),
                    'type'              => 'html',
                    'default'           => ''
                ),
                array(
                    'name'              => 'avlo_logo_select',
                    'label'             => __( 'Login form logo style', 'avlo_lofrm' ),
                    'type'              => 'select',
                    'options'           => array(
                        'wplogo'      => 'Wordpress defualt',
                        'nologo'      => 'No Logo (even default)',
                        'logo'        => 'Custom Logo',
                        'video'       => 'video logo'  
                    )
                ),
                array(
                    'name'              => 'avlo_logo',
                    'label'             => __( 'Logo', 'avlo_lofrm' ),
                    'desc'              => __( 'Choose custom logo for your login page', 'avlo_lofrm' ),
                    'type'              => 'file',
                    'default'           => ''
                ),
                array(
                    'name'              => 'avlo_div2_txt',
                    'label'             => __( '<span class="avlo_div_txt" > Footer </span>', 'avlo_lofrm' ),
                    'desc'              => __( '<hr>', 'avlo_lofrm' ),
                    'type'              => 'html',
                    'default'           => ''
                ),
                array(
                    'name'              => 'avlo_social_active',
                    'label'             => __( 'Social Icons', 'avlo_lofrm' ),
                    'type'              => 'select',
                    'options'           => array(
                        'deactive'     => 'Deactive',
                        'active'       => 'Active'
                )),
                array(
                    'name'              => 'avlo_so_color',
                    'label'             => __( 'Color', 'avlo_lofrm' ),
                    'type'              => 'color',
                    'default'           => ''
                ),
                array(
                    'name'              => 'avlo_social_fa',
                    'label'             => __( 'Facebook', 'avlo_lofrm' ),
                    'type'              => 'text',
                    'default'           => ''
                ),
                array(
                    'name'              => 'avlo_social_tw',
                    'label'             => __( 'Twitter', 'avlo_lofrm' ),
                    'type'              => 'text',
                    'default'           => ''
                ),
                array(
                    'name'              => 'avlo_social_in',
                    'label'             => __( 'Instagram', 'avlo_lofrm' ),
                    'type'              => 'text',
                    'default'           => ''
                ),
                array(
                    'name'              => 'avlo_social_yo',
                    'label'             => __( 'You Tube', 'avlo_lofrm' ),
                    'type'              => 'text',
                    'default'           => ''
                ),
                array(
                    'name'              => 'avlo_social_g',
                    'label'             => __( 'Google +', 'avlo_lofrm' ),
                    'type'              => 'text',
                    'default'           => ''
                ),
                array(
                    'name'              => 'avlo_social_pi',
                    'label'             => __( 'Pinterest', 'avlo_lofrm' ),
                    'type'              => 'text',
                    'default'           => ''
                ),
                array(
                    'name'              => 'avlo_social_li',
                    'label'             => __( 'Linked In', 'avlo_lofrm' ),
                    'type'              => 'text',
                    'default'           => ''
                ),
                array(
                    'name'              => 'avlo_social_dr',
                    'label'             => __( 'Dribbble', 'avlo_lofrm' ),
                    'type'              => 'text',
                    'default'           => ''
                ),
                array(
                    'name'              => 'avlo_social_gi',
                    'label'             => __( 'Github', 'avlo_lofrm' ),
                    'type'              => 'text',
                    'default'           => ''
                ),
 
            ),
            'avlo_design_tab' => array(
                array(
                    'name'              => 'avlo_div031_txt',
                    'label'             => __( '<span class="avlo_div_txt" > Form Background </span>', 'avlo_lofrm' ),
                    'desc'              => __( '<hr>', 'avlo_lofrm' ),
                    'type'              => 'html',
                    'default'           => ''
                ),
                array(
                    'name'              => 'avlo_frm_bg_select',
                    'label'             => __( 'Form background', 'avlo_lofrm' ),
                    'type'              => 'select',
                    'options'           => array(
                        'defualtc'   => 'Wordpress defualt',
                        'image'      => 'Image',
                        'color'      => 'color'
                    )
                ),
                array(
                    'name'              => 'avlo_form_bg',
                    'label'             => __( 'Background', 'avlo_lofrm' ),
                    'desc'              => __( 'Choose custom background for your form', 'avlo_lofrm' ),
                    'type'              => 'file',
                    'default'           => ''
                ),
                array(
                    'name'              => 'avlo_form_co',
                    'label'             => __( 'Form color', 'avlo_lofrm' ),
                    'type'              => 'color',
                    'default'           => ''
                ),
                array(
                    'name'              => 'avlo_div3_txt',
                    'label'             => __( '<span class="avlo_div_txt" > Form Layout </span>', 'avlo_lofrm' ),
                    'desc'              => __( '<hr>', 'avlo_lofrm' ),
                    'type'              => 'html',
                    'default'           => ''
                ),
                array(
                    'name'              => 'avlo_log_wid',
                    'label'             => __( 'Login Form Width', 'avlo_lofrm' ),
                    'desc'              => __( ' (Px)', 'avlo_lofrm' ),
                    'type'              => 'text',
                    'default'           => ''
                ),
                array(
                    'name'              => 'avlo_log_hei',
                    'label'             => __( 'Login Form Height', 'avlo_lofrm' ),
                    'desc'              => __( ' (Px)', 'avlo_lofrm' ),
                    'type'              => 'text',
                    'default'           => ''
                ),
                array(
                    'name'              => 'avlo_log_color',
                    'label'             => __( 'Login Form Border Color', 'avlo_lofrm' ),
                    'type'              => 'color',
                    'default'           => ''
                ),
                array(
                    'name'              => 'avlo_log_radius',
                    'label'             => __( 'Login Form Border Radius', 'avlo_lofrm' ),
                    'desc'              => __( ' (Px)', 'avlo_lofrm' ),
                    'type'              => 'text',
                    'default'           => ''
                ),
                array(
                    'name'              => 'avlo_div4_txt',
                    'label'             => __( '<span class="avlo_div_txt" >Form Skin </span>', 'avlo_lofrm' ),
                    'desc'              => __( '<hr>', 'avlo_lofrm' ),
                    'type'              => 'html',
                    'default'           => ''
                ),
                array(
                    'name'              => 'avlo_skin_select',
                    'label'             => __( 'Login Skin', 'avlo_lofrm' ),
                    'type'              => 'select',
                    'options'           => array(
                        'default'     => 'Defualt',
                        'style1'      => 'style1',
                        'style2'      => 'style2',
                        'style3'      => 'style3',
                        'style4'      => 'style4'
                    )
                ),
            ), 
            'avlo_url_tab' => array(
                array(
                    'name'              => 'avlo_login_url',
                    'label'             => __( 'Login Url', 'avlo_lofrm' ),
                    'type'              => 'text',
                    'default'           => '/wp-login.php'
                ),
                array(
                    'name'              => 'avlo_reg_url',
                    'label'             => __( 'Registration Url', 'avlo_lofrm' ),
                    'type'              => 'text',
                    'default'           => '/wp-login.php?action=register'
                ),
                array(
                    'name'              => 'avlo_lost_url',
                    'label'             => __( 'Lost Password Url', 'avlo_lofrm' ),
                    'type'              => 'text',
                    'default'           => '/wp-login.php?action=lostpassword'
                ),
                array(
                    'name'              => 'avlo_logout_url',
                    'label'             => __( 'Logout Url', 'avlo_lofrm' ),
                    'type'              => 'text',
                    'default'           => '/wp-login.php?action=logout'
                ),
                array(
                    'name'              => 'login_headertitle',
                    'label'             => __( 'Login Hedare Title', 'avlo_lofrm' ),
                    'type'              => 'text',
                    'default'           => ''
                ),
                array(
                    'name'              => 'redirect_login',
                    'label'             => __( 'Login redirect', 'avlo_lofrm' ),
                    'type'              => 'text',
                    'default'           => ''
                ),
                array(
                    'name'              => 'redirect_logout',
                    'label'             => __( 'Logout redirect', 'avlo_lofrm' ),
                    'type'              => 'text',
                    'default'           => ''
                ),
            ),              
        );
        return $settings_fields;
    }
    function plugin_page() {
        echo '<div class="wrap">';
        $this->settings_api->show_navigation();
        $this->settings_api->show_forms();
        echo '</div>';
    }
    /**
     * Get all the pages
     *
     * @return array page names with key value pairs
     */
    function get_pages() {
        $pages = get_pages();
        $pages_options = array();
        if ( $pages ) {
            foreach ($pages as $page) {
                $pages_options[$page->ID] = $page->post_title;
            }
        }
        return $pages_options;
    }
}


