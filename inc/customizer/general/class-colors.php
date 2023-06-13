<?php
/**
 * Handles color customization
 *
 * @package Lms_Globalstudy
 */

namespace Globalstudy\customizer\General;

use WP_Customize_Color_Control;

defined( 'ABSPATH' ) || exit;

/**
 * Colors class
 */
class Colors {

	/**
	 * Register
	 *
	 * @param WP_Customize_Manager $wp_customize theme customizer object.
	 */
	public function register( $wp_customize ) {

		$wp_customize->add_section(
			'ms_lms_globalstudy_colors_section',
			array(
				'panel'       => 'ms_lms_globalstudy_customizer_panel',
				'title'       => esc_html__( 'Colors', 'globalstudy' ),
				'description' => esc_html__( 'Colors Settings', 'globalstudy' ),
				'priority'    => 3,
			)
		);

		$wp_customize->add_setting(
			'ms_lms_globalstudy_primary_color',
			array(
				'title'             => esc_html__( 'Primary Color', 'globalstudy' ),
				'transport'         => 'postMessage',
				'default'           => '#f54a24',
				'sanitize_callback' => 'sanitize_hex_color',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'ms_lms_globalstudy_primary_color',
				array(
					'label'   => esc_html__( 'Primary Color', 'globalstudy' ),
					'section' => 'ms_lms_globalstudy_colors_section',
				)
			)
		);
		$wp_customize->add_setting(
			'ms_lms_globalstudy_secondary_color',
			array(
				'title'             => esc_html__( 'Secondary Color', 'globalstudy' ),
				'transport'         => 'postMessage',
				'default'           => '#f54a24',
				'sanitize_callback' => 'sanitize_hex_color',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'ms_lms_globalstudy_secondary_color',
				array(
					'label'   => esc_html__( 'Secondary Color', 'globalstudy' ),
					'section' => 'ms_lms_globalstudy_colors_section',
				)
			)
		);
		$wp_customize->add_setting(
			'ms_lms_globalstudy_link_color',
			array(
				'title'             => esc_html__( 'Link Hover Color', 'globalstudy' ),
				'transport'         => 'postMessage',
				'default'           => '#ef1300',
				'sanitize_callback' => 'sanitize_hex_color',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'ms_lms_globalstudy_link_color',
				array(
					'label'   => esc_html__( 'Link Hover Color', 'globalstudy' ),
					'section' => 'ms_lms_globalstudy_colors_section',
				)
			)
		);
	}
}
