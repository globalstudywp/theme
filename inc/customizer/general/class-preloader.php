<?php
/**
 * Handles layout customization
 *
 * @package Globalstudy
 */

namespace Globalstudy\customizer\General;

use WP_Customize_Control;
use WP_Customize_Color_Control;

defined( 'ABSPATH' ) || exit;

/**
 * Layout class
 */
class Preloader {

	/**
	 * Register
	 *
	 * @param WP_Customize_Manager $wp_customize theme customizer object.
	 */
	public function register( $wp_customize ) {

		$wp_customize->add_section(
			'ms_lms_globalstudy_preloader_section',
			array(
				'panel'       => 'ms_lms_globalstudy_customizer_panel',
				'title'       => esc_html__( 'Preloader', 'globalstudy' ),
				'description' => esc_html__( 'Preloader Settings', 'globalstudy' ),
				'priority'    => 3,
			)
		);
		$wp_customize->add_setting(
			'ms_lms_globalstudy_preloader_',
			array(
				'title'             => esc_html__( 'Enable Preloader', 'globalstudy' ),
				'sanitize_callback' => 'wp_filter_nohtml_kses',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'ms_lms_globalstudy_preloader_',
				array(
					'label'             => esc_html__( 'Enable Preloader', 'globalstudy' ),
					'type'              => 'checkbox',
					'section'           => 'ms_lms_globalstudy_preloader_section',
					'sanitize_callback' => 'globalstudy_sanitize_checkbox',
				)
			)
		);
		// Add Settings
		$wp_customize->add_setting(
			'ms_lms_loader_customizer_color_primary_',
			array(
				'default'           => '#04bfbf',
				'sanitize_callback' => 'sanitize_hex_color',
			)
		);

		$wp_customize->add_setting(
			'ms_lms_loader_customizer_color_secondary_',
			array(
				'default'           => '#45ace0',
				'sanitize_callback' => 'sanitize_hex_color',
			)
		);

		// Add Controls
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'ms_lms_loader_customizer_color_primary_',
				array(
					'label'    => esc_html__( 'Preloader Outline Color', 'globalstudy' ),
					'section'  => 'ms_lms_globalstudy_preloader_section',
					'settings' => 'ms_lms_loader_customizer_color_primary_',
				)
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'ms_lms_loader_customizer_color_secondary_',
				array(
					'label'    => esc_html__( 'Preloader Inline Color', 'globalstudy' ),
					'section'  => 'ms_lms_globalstudy_preloader_section',
					'settings' => 'ms_lms_loader_customizer_color_secondary_',
				)
			)
		);

	}
}
