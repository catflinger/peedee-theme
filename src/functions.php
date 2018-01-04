<?php

// register the widgets and sidebars on widgets_init
function pd_register_sidebars() {

    //register the sidebars
    register_sidebar(array('name' => 'Main Sidebar', 'id' => 'sidebar-1'));
    register_sidebar(array('name' => 'Right Sidebar', 'id' => 'sidebar-2'));
}
add_action('widgets_init', 'pd_register_sidebars');

//generates html for a menu option
function pd_make_menu_option($path, $title) {
    $html = '<li class="level1">';
    $html .= '<a href="' . esc_url( site_url($path, 'http') ) . '" title="' . $title . '">';
        $html .= $title;
    $html .= '</a>';

    return $html;
}

// generates the html for the main navigation menu
function pd_default_menu() {
	$html = pd_make_menu_option('', 'Home');
    $html .= pd_make_menu_option('about-2', 'About Fifteensquared');
    $html .= pd_make_menu_option('setters', 'Setters');
    $html .= pd_make_menu_option('bloggers', 'Bloggers');
    $html .= pd_make_menu_option('links', 'Links');
    $html .= pd_make_menu_option('faq', 'Faq');
    $html .= pd_make_menu_option('general-discussion', 'General Discussion');
    $html .= pd_make_menu_option('site-feedback', 'Site Feedback');
    $html .= pd_make_menu_option('site-policy', 'Site Policy');
    $html .= pd_make_menu_option('cookies', 'Cookies');
	echo $html;
} 

/*
The following section is copied and slightly modified from Till Kruss's plugin.  
Many thanks to Till for the use of this code.

Plugin Name: Paste as Plain Text
Plugin URI: http://wordpress.org/plugins/paste-as-plain-text/
Description: Forces the WordPress editor to paste everything as plain text.
Version: 1.0.1
Author: Till Krüss
Author URI: http://till.kruss.me/
License: GPLv3
	License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/
class PeeDeePasteAsPlainText {

        function __construct() {
            add_action( 'init', array( $this, 'init' ) );
        }

        function init() {
            add_filter( 'tiny_mce_before_init', array( $this, 'force_paste_as_plain_text' ) );
            add_filter( 'teeny_mce_before_init', array( $this, 'force_paste_as_plain_text' ) );
            add_filter( 'teeny_mce_plugins', array( $this, 'load_paste_plugin' ) );
            add_filter( 'mce_buttons_2', array( $this, 'remove_button' ) );
        }

        function force_paste_as_plain_text( $mceInit ) {
            global $tinymce_version;

            if ( $tinymce_version[0] < 4 ) {
                    $mceInit[ 'paste_text_sticky' ] = true;
                    $mceInit[ 'paste_text_sticky_default' ] = true;
            } else {
                    $mceInit[ 'paste_as_text' ] = true;
            }
            return $mceInit;
        }

        function load_paste_plugin( $plugins ) {
            return array_merge( $plugins, array( 'paste' ) );
        }

        function remove_button( $buttons ) {
            if( ( $key = array_search( 'pastetext', $buttons ) ) !== false ) {
                    unset( $buttons[ $key ] );
            }
            return $buttons;
        }

}

if ( !is_admin() ) {
    new PeeDeePasteAsPlainText();
}
