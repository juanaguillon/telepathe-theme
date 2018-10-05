<div class="all_content_template">
	<div id="<?php the_ID(); ?>" <?php post_class('page_post'); ?> >
		<?php 

		if ( has_post_thumbnail() ){
			the_post_thumbnail();
		}else{
			echo '<h1>Np hay imagen</h1>';
		}

		?>
	</div>
</div>