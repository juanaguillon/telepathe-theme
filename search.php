<?php get_header(); ?>

<section id="search_template" class="search_template_post">
	<main>
		<?php 

		if ( have_posts() ){
			?> 
			<h1>Resultados de búsqueda: <?php echo get_search_query(); ?></h1>
			<?php
			while( have_posts() ){
				the_post();

				get_template_part('content');
			}
			the_posts_pagination( array( 

				"next_text" => "Siguiente pagina",
				"prev_text" => "Anterior página"
			 ) );
		}else{
			?> 
			<h1>No existen post, intenta buscar con otras palabras</h1>
			<?php echo get_search_form(); 
		}



		 ?>
	</main>
</section>

<?php get_footer(); ?>