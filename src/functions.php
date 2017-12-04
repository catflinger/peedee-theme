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