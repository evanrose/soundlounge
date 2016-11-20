<?php

register_nav_menus();
add_theme_support( 'post-thumbnails' ); 
show_admin_bar( 0 );

add_image_size( 'horizontal', 768, 440, 1 ); 
add_image_size( 'vertical', 768, 1038, 1 );
add_image_size( 'square', 768, 768, 1 );

/**
@ Enqueue Scripts and Styles
*/
function sl_enqueue_scripts() {
	
	//HEADER
	wp_enqueue_style( 'css', get_template_directory_uri() . '/stylesheets/app.css' );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/bower_components/modernizr/modernizr.js', 0, 0, 0 );

	//FOOTER
	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/bower_components/foundation/js/foundation.js', 0, 0, 1 );
	//wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/isotope.pkgd.js', 0, 0, 1 );
	wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', 0, 0, 1 );

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
function sl_nav_class ($classes, $item) {

	if ( is_singular( 'project' ) && 'Work' == $item->title ) {
		$classes[] = 'current-menu-item';
	}
	if ( is_singular( 'person' ) && 'People' == $item->title ) {
		$classes[] = 'current-menu-item';
	}
    if ( in_array( 'current-menu-item', $classes ) ){
        $classes[] = 'active ';
    }
    return $classes;
}
add_filter('nav_menu_css_class' , 'sl_nav_class' , 10 , 2);

/**
@ Add widget area for dropdown
*/

function sl_menu_item_classes( $classes, $item, $args ) {
	if( 'header' !== $args->theme_location )
		return $classes;
	if( ( is_singular( 'post' ) || is_category() || is_tag() ) && 'Blog' == $item->title )
		$classes[] = 'current-menu-item';
		
	if( ( is_singular( 'code' ) || is_tax( 'code-tag' ) ) && 'Code' == $item->title )
		$classes[] = 'current-menu-item';
		
	if( is_singular( 'projects' ) && 'Case Studies' == $item->title )
		$classes[] = 'current-menu-item';
		
	return array_unique( $classes );
}
add_filter( 'nav_menu_css_class', 'sl_menu_item_classes', 10, 3 );

/**
@ Add pagename to body class
*/

//Page Slug Body Class
function sl_add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
}
add_filter( 'body_class', 'sl_add_slug_body_class' );

/**
@ Check orientation
*/

function check_orientation( $w, $h ) {

	if ( $w > $h ) {
		$o = 'horizontal';
	}
	elseif ( $w < $h ) {
		$o = 'vertical';
	}
	else {
		$o = 'square';
	}

	return $o;
}

/**
@ Check if position is in array
*/

function contains($str, array $arr)
{
    foreach( $arr as $a ) {
        if ( stripos( $a, $str ) !== false ) return true;
    }
    return false;
}