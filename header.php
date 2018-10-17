<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo('charset'); ?>" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php 
  wp_title(' | ', true, 'right');
  bloginfo('name');


   ?></title>
  <style type="text/css" media="screen">
  	body{
  		margin-top: 40px;
  	}
  	header{
  		background: red;
  	}
  </style>
  <?php 

  wp_head();

   ?>
</head>
<body <?php body_class(); ?> >
	<header>
		<nav>
			<a href="<?php echo esc_url( home_url('/') ) ?>" title="<?php bloginfo('desription'); ?>"><h3><?php bloginfo('name'); ?></h3></a>
		</nav>
	</header><!-- /header -->
</body>
