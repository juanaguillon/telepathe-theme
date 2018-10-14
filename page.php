<?php get_header(); ?>
<div class="page_post" id="page_post_id">
	<main>
		<?php 
		if ( have_posts() ): 
 			while ( have_posts() ) :
 			 the_post();
 			
 			?>
 			<div id='post-<?php the_ID(); ?>' <?php post_class( 'post_page'); ?> >
 				<?php if ( has_post_thumbnail() ) : ?>	
					<div class="thumdail_post">
					<?php the_post_thumbnail( 'medium'); ?>
					</div> 				
 				<?php endif; ?>

		 		<div class="post_header_title">
		 			<h2 class="post_title"><?php the_title(); ?></h2>
		 		</div>

		 		<div class="post_content">
		 			<?php the_content(); ?>		 				
		 		</div>

		 		<?php 

		 		wp_link_pages(
		 			array(
		 				"before" => "<div class='page_pagination'>",
		 				"after" => "</div>",
		 				"link_before" => "<span>",
		 				"link_after" => "</span>",
		 				"separator" => " - ",
		 				"next_or_number" => "next"
		 			)
		 		);

		 		 if ( comments_open() || get_comments_number(  ) ){
			    	comments_template();
			    }

		 		 ?>


			</div>
		 	<?php 
		 	endwhile;
		 	endif;
		 	 ?>
	</main>
</div>
<?php get_footer(); ?>