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
  get_sidebar();
  

?>

</div>
<?php get_footer(); ?>