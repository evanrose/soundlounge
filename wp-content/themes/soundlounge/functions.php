<?php

register_nav_menus();



/**
@ Enqueue Scripts and Styles
*/
function sl_enqueue_scripts() {
	
	wp_enqueue_style( 'css', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js', 0, 0, 0 );
	wp_enqueue_script( 'js', get_template_directory_uri() . '/bower_components/modernizr/modernizr.js', 0, 0, 0 );
	wp_enqueue_script( 'js', get_template_directory_uri() . '/js/scripts.js', 0, 0, true );

}
add_action( 'wp_enqueue_scripts', 'sl_enqueue_scripts' );

/**
@ Function Nav Menu
*/
function sl_nav_menu() {

	$args = array();
	$args = array( 
		'menu' => 'Nav Menu', 
		'menu_class' => 'right', 
		'menu_id' => '',
		'container' => '',
    );
	return $nav_menu = wp_nav_menu( $args );
}

/**
@ Filter "active" to current nav item
*/
add_filter('nav_menu_css_class' , 'sl_nav_class' , 10 , 2);
function sl_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}