<?php 

function thelepathe_register_sidebar( ){
  register_sidebar( array( 
    "id" => "my_sidebar",
    "name" => "My Sidebar",
    "description" => "El sidebar de telepathe",
    "class" => "my_sidebar_class"
   ) );
}


add_action('widgets_init','thelepathe_register_sidebar');

