<?php 

if ( post_password_required() ){
	return;
}

 ?>

<div id="comments_template">
	<?php if ( have_comments() ){
		?> 
		<h3>
			<?php 
			printf( _n(
				'Mostrando %s comentario ',
				'Mostrando %s comentarios',
				get_comments_number(  ),
				"telepathe"
			), get_comments_number() );

			 ?>
		</h3>

		<ul class="comments_list">
			<?php 

			wp_list_comments( array(
				"style" => "ul",
				"short_ping" => true,
				"avatar_size" => 65
			));
			 ?>
		</ul>

		<div class="comments_pagination">
			<?php 

			the_comments_pagination( array(
				"prev_text" => "Anterio Pagina",
				"next_text" => "Siguioente Pagina",
				"before_page_number" => "<span class='link_pageniation_comment'>",
				"after_page_number" => "</span>",
				"screen_reader_text" => "Paginacion de Comentarios"
			) );

			 ?>
		</div>


		<?php

		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type() , 'comments') ){
			echo '<p>No se adminten comentarios</p>';

		}
		comment_form();

	} /* Finalización de verificación para comentarios*/ ?>
</div>