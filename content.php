<div class="all_content_template">
	<div id="<?php the_ID(); ?>" <?php post_class('page_post'); ?> >
		<?php 

		if ( has_post_thumbnail() ){
			?>
				<div class="publication">
					<a href="<?php the_permalink( ); ?>" title="<?php the_title_attribute(); ?>">
						<?php the_post_thumbnail() ?>
					</a>
				</div>
			<?php
		}

		?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>

		<?php 

		if ( comments_open() ){
			?> 
			<div class="comment_poup">
				<?php comments_popup_link();?>
			</div>
			<?php
		}

		if ( current_user_can( 'edit_posts' ) ){
			?> 
			<div class="edit_this_post">
				<?php edit_post_link( 'Editar este Post'); ?>
			</div>
			<?php
		}

		 ?>
	</div> <!-- div.phpid -->
</div>