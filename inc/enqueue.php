<?php
// phpcs:ignoreFile

if ( ! function_exists( 'globalstudy_styles_and_scripts' ) && ! is_admin() ) {
	function globalstudy_styles_and_scripts() {

		/*Styles*/
		wp_enqueue_style( 'globalstudy-style', get_stylesheet_uri(), array(), MS_LMS_GLOBALSTUDY_THEME_VERSION );
		wp_enqueue_style( 'globalstudy-base', MS_LMS_GLOBALSTUDY_THEME_URI . '/assets/css/style.css', array(), MS_LMS_GLOBALSTUDY_THEME_VERSION );
		wp_enqueue_style( 'google-fonts', globalstudy_theme_fonts(), array(), MS_LMS_GLOBALSTUDY_THEME_VERSION );

		wp_add_inline_style( 'globalstudy-style', globalstudy_color_styles() );

		wp_register_style( 'globalstudy-404', MS_LMS_GLOBALSTUDY_THEME_URI . '/assets/css/components/pages/404.css', array(), MS_LMS_GLOBALSTUDY_THEME_VERSION );
		wp_register_style( 'globalstudy-navigation', MS_LMS_GLOBALSTUDY_THEME_URI . '/assets/css/components/header/navigation.css', array(), MS_LMS_GLOBALSTUDY_THEME_VERSION );
		wp_enqueue_script( 'globalstudy-header', MS_LMS_GLOBALSTUDY_THEME_URI . '/assets/js/components/header/header.js', array( 'jquery' ), MS_LMS_GLOBALSTUDY_THEME_VERSION );
		wp_enqueue_style( 'globalstudy-navigation' );
		wp_register_style( 'globalstudy-single-post', MS_LMS_GLOBALSTUDY_THEME_URI . '/assets/css/components/post/single/single-post.css', array(), MS_LMS_GLOBALSTUDY_THEME_VERSION );
		wp_register_style( 'globalstudy-posts-list', MS_LMS_GLOBALSTUDY_THEME_URI . '/assets/css/components/post/archive/posts-list.css', array(), MS_LMS_GLOBALSTUDY_THEME_VERSION );
		wp_register_style( 'globalstudy-search-list', MS_LMS_GLOBALSTUDY_THEME_URI . '/assets/css/components/pages/search.css', array(), MS_LMS_GLOBALSTUDY_THEME_VERSION );
		wp_register_style( 'globalstudy-comments', MS_LMS_GLOBALSTUDY_THEME_URI . '/assets/css/components/comments/comments.css', array(), MS_LMS_GLOBALSTUDY_THEME_VERSION );

		wp_enqueue_style( 'liner-icons', MS_LMS_GLOBALSTUDY_THEME_URI . '/assets/icons/linearicons/linear-icons.css', array(), MS_LMS_GLOBALSTUDY_THEME_VERSION );
		wp_enqueue_style( 'starter-icons', MS_LMS_GLOBALSTUDY_THEME_URI . '/assets/icons/starter-icons/style.css', array(), MS_LMS_GLOBALSTUDY_THEME_VERSION );

		if ( is_single() ) {
			wp_enqueue_style( 'globalstudy-single-post' );
		}

		if ( ( is_archive() || is_author() || is_category() || is_tag() || is_home() ) && 'post' === get_post_type() ) {
			wp_enqueue_style( 'globalstudy-posts-list' );
		}

		if ( is_search() ) {
			wp_enqueue_style( 'globalstudy-search-list' );
		}

		if ( is_404() ) {
			wp_enqueue_style( 'globalstudy-404' );
		}

		if ( is_singular() ) {
			wp_enqueue_script( 'comment-reply' );
			wp_enqueue_style( 'globalstudy-comments' );
		}

	}
}

add_action( 'wp_enqueue_scripts', 'globalstudy_styles_and_scripts' );

if ( ! function_exists( 'globalstudy_move_jquery_into_footer' ) ) {
	function globalstudy_move_jquery_into_footer( $wp_scripts ) {

		if ( is_admin() ) {
			return;
		}

		$wp_scripts->add_data( 'jquery', 'group', 1 );
		$wp_scripts->add_data( 'jquery-core', 'group', 1 );
		$wp_scripts->add_data( 'jquery-migrate', 'group', 1 );
	}
}

add_action( 'wp_default_scripts', 'globalstudy_move_jquery_into_footer' );
function globalstudy_generate_theme_option_css() {

	$inline_preloader_color  = get_theme_mod( 'ms_lms_loader_customizer_color_primary_' );
	$outline_color_preloader = get_theme_mod( 'ms_lms_loader_customizer_color_secondary_' );

	if ( ! empty( $inline_preloader_color ) ) :
		?>
		<style type="text/css" id="ms_lms_globalstudy-theme-option-css">
			.ms_lms_loader {
				border-color: <?php echo esc_attr__( $outline_color_preloader ); ?> <?php echo esc_attr__( $outline_color_preloader ); ?> transparent transparent;
			}
			.ms_lms_loader::before, .ms_lms_loader::after {
				border-color: transparent transparent<?php echo esc_attr__( $inline_preloader_color ); ?> <?php echo esc_attr__( $inline_preloader_color ); ?>;
			}
		</style>
		<?php

	endif;
}

add_action( 'wp_head', 'globalstudy_generate_theme_option_css' );
