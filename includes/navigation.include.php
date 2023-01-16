<?php

/*
* Navigation discussion
*/
function discussionNavigation(){
    if ( current_user_can( 'manage_options' ) ) {

        // Menu 
        add_menu_page('discussion', 'discussion', 'manage_options', 'discussionDashboard', 'discussionDashboard', '');

        // Style  
        wp_enqueue_style('discussionStyle', discussionUri . '/src/css/style.css'  );

        // Js 
        wp_enqueue_script('discussionScript', discussionUri . '/src/js/script.js'  );

        // Submenu 
        add_submenu_page( 'discussionDashboard', 'Settings', 'Settings', 'manage_options', 'discussionSettings', 'discussionSettings');

    }

} add_action('admin_menu', 'discussionNavigation');


function discussionDashboard(){
  include discussionDir . '/include/panels/dashboard.panel.php';
}
  
function discussionSettings($test = ''){
  include discussionDir . '/include/panels/test.panel.php';
}

