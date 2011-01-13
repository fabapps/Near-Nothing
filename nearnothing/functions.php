<?php

/* sidebar */
if ( function_exists('register_sidebar') )
    register_sidebar(array('description' => 'Left Sidebar'));

/* nav menus */
if ( function_exists( 'register_nav_menu' ) ) {
	register_nav_menu('header_nav', __('Header Navigation Menu'));
	register_nav_menu('footer_nav', __('Footer Navigation Menu'));	
}

/* automatic feed links */
add_theme_support('automatic-feed-links');

?>