<?php get_header(); ?>
<div id="wrapper" class="wrapper">
	<div class="page-404 not-found">
		<div class="page-content">
			<div class="page-error">
				<?php esc_html_e( '404', 'globalstudy' ); ?>
			</div>
			<h1 class="page-title">
				<?php esc_html_e( 'The page you’re looking for doesn’t exist', 'globalstudy' ); ?>
			</h1>
			<a href="<?php echo esc_url( get_home_url( '/' ) ); ?>" class="globalstudy-button">
				<?php esc_html_e( 'Home page', 'globalstudy' ); ?>
			</a>
		</div>
	</div>
</div>
<?php
	wp_footer();
