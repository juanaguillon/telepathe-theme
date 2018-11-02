<?php 

require 'content-menu.php';

function telepathe_menu_admin( ){

  function telepathe_echo (){
    echo 'Hola a todos';
  }
  add_menu_page('Admin Menu', 'Telepathe' , 'manage_options' , 'telepathe_menu1' , 'telepathe_content' , 'dashicons-lock' , 20);

  // add_submenu_page( 'telepathe_menu1' , 'Submenu telepathe' , 'Telepathe Sub' , 'manage_options' , 'telepathe_submenu1' , 'telepathe_echo' );
  
}
add_action('admin_menu','telepathe_menu_admin');