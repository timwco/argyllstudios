<?php
/*
	Custom White Label
	Copyright 2010 Argyll Studios
*/


// Remove Dashboard Widgets & Add Custom Dashboard
function as_remove_dw() {
   global $wp_meta_boxes;
   unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
   unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
   unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
   unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
   unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
   unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
   unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
   //unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
}

// custom logo login
function as_custom_login() {
	echo '<style type="text/css">
	h1 a { background-image:url('.get_bloginfo('template_directory').'/images/custom_login.png) !important; margin-bottom: 10px; }
	</style>
	';
}

// Remove Nav Items
function as_remove_navitems() {
	global $menu;
	$restricted = array(__('Links'), __('Comments'), __('Tools'));
	end ($menu);
	while (prev($menu)){
		$value = explode(' ',$menu[key($menu)][0]);
		if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
	}
}


// Run Functions
add_action('login_head', 'as_custom_login');
add_action('wp_dashboard_setup', 'as_remove_dw');
add_action('admin_menu', 'as_remove_navitems');