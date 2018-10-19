<?php 

function telepathe_register_sidebar( ){
  register_sidebar( array( 
    "id" => "my_sidebar",
    "name" => "My Sidebar",
    "description" => "El sidebar de telepathe",
    "class" => "my_sidebar_class"
   ) );
}

function telepathe_supports_theme( ){

	add_theme_support('html5');
	add_theme_support('post-thumbnails');

}

function telepathe_linked_scripts(){
	wp_register_style( 'styles', get_template_directory_uri() . '/styles.css' , '','1.0', 'all'  );
	wp_enqueue_style( 'styles' );
	wp_register_script( 'script', get_template_directory_uri() . '/script.js' , '', '1.0', false );
	wp_enqueue_script( 'script' );
}

add_action('admin_enqueue_scripts', 'telepathe_linked_scripts');

add_action('after_setup_theme','telepathe_supports_theme');
add_action('widgets_init','telepathe_register_sidebar');

