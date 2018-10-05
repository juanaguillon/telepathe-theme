<?php 

function thelepathe_register_sidebar( ){
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

add_action('after_setup_theme','telepathe_supports_theme');
add_action('widgets_init','thelepathe_register_sidebar');

