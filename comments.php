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
		<?php
	} /* Finalización de verificación para comentarios*/ ?>
</div>