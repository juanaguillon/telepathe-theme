<?php get_header(); ?>
<div class="single_post" id="single_post_id">
	<main>
		<?php 

		if ( have_posts() ){
			while ( have_posts()) {
			    the_post();	

					the_content();	

			    if ( has_category() || has_tag() ){
			    	?> 
			    	<div class="cat_and_tag">
			    		<?php 

			    		if ( has_category() ){
			    			?> 
			    			<div class="cat_post">
			    				<span>Categorias</span>
			    				<h3><?php the_category(' - ') ?></h3>
			    			</div>
			    			<?php
			    		}

			    		if ( has_tag() ){
			    			?> 
			    			<div class="tag_post">
			    				<span>Etiquetas</span>
			    				<h3><?php the_tags('',', '); ?></h3>
			    			</div>
			    			<?php
			    		}

			    		 ?>				
			    	</div>
			    	<?php
			    }			

			    if ( comments_open() || get_comments_number(  ) ){
			    	comments_template();
			    }

			    the_post_navigation( array(
			    	"prev_text" => "<span>Anterior Publicacion: Aqui!</span>",
			    	"next_text" => "<span>Siguiente publicacion: Aqui!</span>"
			    ));	


			    
		}	/*Final del while*/
	} /*Final del if*/

		?>
	</main>		
</div>
<?php get_footer(); ?>