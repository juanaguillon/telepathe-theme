<?php 

function telepathe_register_sidebar( ){
  register_sidebar( array( 
    "id" => "my_sidebar",
    "name" => "My Sidebar",
    "description" => "El sidebar de telepathe",
    "class" => "my_sidebar_class"
   ) );
}

function telepathe_nav_menus(){

	register_nav_menus( array(
		'primary_menu' => "Menu Primario",
		'secondary_menu' => "Menu Secundario"
	));

}

function telepathe_include(){
	require 'custom/sections.php';
	require 'custom/settings.php';
	require 'custom/controlls.php';
	require 'inc/menu.php';
}
function telepathe_supports_theme( ){

	add_theme_support('html5');
	add_theme_support('post-thumbnails');
	add_theme_support("woocommerce");

}

function telepathe_setup( ){
	telepathe_supports_theme( );
	telepathe_nav_menus();
	telepathe_include();

}

function telepathe_linked_scripts(){
	wp_register_style( 'styles', get_template_directory_uri() . '/styles.css' , '','1.0', 'all'  );
	wp_enqueue_style( 'styles' );
	wp_register_script( 'script', get_template_directory_uri() . '/script.js' , '', '1.0', false );
	wp_enqueue_script( 'script' );
}

function telepathe_customize_live(){
	wp_enqueue_script('telepathe_customzize_live', get_template_directory_uri() . '/custom/theme-customize.js', array('jquery') , '1.0', true);
}

add_action('admin_enqueue_scripts', 'telepathe_linked_scripts');
add_action('customize_preview_init','telepathe_customize_live');
add_action('after_setup_theme','telepathe_setup');
add_action('widgets_init','telepathe_register_sidebar');

