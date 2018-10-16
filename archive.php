<?php get_header(); ?>

<div id="archive_template" class="archive_template_post">
	<main>
		<?php 

		the_archive_title();
		the_archive_description();

		if ( have_posts( )){

			while( have_posts() ){
				the_post();
				get_template_part( 'content' );
				the_content();
			}

			the_posts_pagination( array( 

				"next_text" => "Siguiente pagina",
				"prev_text" => "Anterior página"
			 ) );
		}

		 ?>
	</main>
</div>

<?php get_footer(); ?>