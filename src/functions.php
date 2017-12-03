<?php

// register the widgets and sidebars on widgets_init
function wp_andreas225_register_sidebars() {

    //register the sidebars
    register_sidebar(array('name' => 'Main Sidebar', 'id' => 'sidebar-1'));
    register_sidebar(array('name' => 'Right Sidebar', 'id' => 'sidebar-2'));
}
add_action('widgets_init', 'wp_andreas225_register_sidebars');