<?php 

function telepathe_register_sections( $wp_customize ){

  $wp_customize->add_section('telepathe_mysection', array(
    "title" => "Mi sección",
    "description" => "Mi sección predefinida",
    "pirority" => 60
    
  ));
   
}

add_action('customize_register','telepathe_register_sections');