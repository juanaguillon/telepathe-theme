<?php 


function telepathe_register_controlls( $wp_customize ){

  $wp_customize->add_control(
    new WP_Customize_Color_Control( $wp_customize, 'telepathe_colors', array(
      "label" => "Color Header/Footer",
      "description" => "Selecciona el color de el Header y el Footer",
      "section" => 'telepathe_mysection'
    ) )
  );
  
}

add_action('customize_register','telepathe_register_controlls');