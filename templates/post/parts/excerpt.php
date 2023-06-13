<?php if ( get_the_excerpt() ) : ?>
	<div class="post-excerpt">
		<?php
		if ( strpos( $post->post_content, '<!--more-->' ) ) {
			the_content();
		} else {
			echo esc_html( globalstudy_minimize_word( get_the_excerpt(), '180' ) );
		}
		?>
	</div>
	<?php
		endif;
