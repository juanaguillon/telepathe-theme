<div class="all_content_template">
	<div id="<?php the_ID(); ?>" <?php post_class('page_post'); ?> >
		<?php 

		if ( has_post_thumbnail() ){
			?>
				<div class="publication">
					<a href="<?php the_permalink( ); ?>" title="<?php the_title_attribute(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
				</div>	
			<?php
		}else{
			echo '<h1>Np hay imagen</h1>';
		}

		?>
	</div>
</div>