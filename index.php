<?php 

get_header();

?>
<div class="all_content">

<?php 

  if ( have_posts( ) ){
    if( is_home() ){
      while ( have_posts( ) ){
        the_post( );

        get_template_part('content');
      }
    }
  }else{
    echo "No hay posts";
  }

  $exists_sidebar = get_option('telepathe_exists_sidebar', false );

  if( $exists_sidebar == 'on' ){

    get_sidebar();
  }
  
  

?>

</div>
<?php get_footer(); ?>