<?php
// phpcs:ignoreFile
/**
 * Merlin WP configuration file.
 *
 * @package   Merlin WP
 * @version   @@pkg.version
 * @link      https://merlinwp.com/
 * @author    Rich Tabor, from ThemeBeans.com & the team at ProteusThemes.com
 * @copyright Copyright (c) 2018, Merlin WP of Inventionn LLC
 * @license   Licensed GPLv3 for Open Source Use
 */

if ( ! class_exists( 'Merlin' ) ) {
    return;
}

/**
 * Set directory locations, text strings, and settings.
 */
$wizard = new Merlin(

    $config = array(
        'directory'            => 'merlin', // Location / directory where Merlin WP is placed in your theme.
        'merlin_url'           => 'globalstudy_lms_demo_installer', // The wp-admin page slug where Merlin WP loads.
        'parent_slug'          => 'globalstudy_lms_demo_installer', // The wp-admin parent page slug for the admin menu item.
        'capability'           => 'manage_options', // The capability required for this menu to be displayed to the user.
        'child_action_btn_url' => 'https://developer.wordpress.org/themes/advanced-topics/child-themes/', // URL for the 'child-action-link'.
        'dev_mode'             => true, // Enable development mode for testing.
        'license_step'         => false, // EDD license activation step.
        'license_required'     => false, // Require the license activation step.
        'license_help_url'     => '', // URL for the 'license-tooltip'.
        'edd_remote_api_url'   => '', // EDD_Theme_Updater_Admin remote_api_url.
        'edd_item_name'        => '', // EDD_Theme_Updater_Admin item_name.
        'edd_theme_slug'       => '', // EDD_Theme_Updater_Admin item_slug.
        'ready_big_button_url' => '/', // Link for the big button on the ready step.
    ),
    $strings = array(
        'admin-menu'               => esc_html__( 'GlobalStudy Setup', 'globalstudy' ),

        /* translators: 1: Title Tag 2: Theme Name 3: Closing Title Tag */
        'title%s%s%s%s'            => esc_html__( '%1$s%2$s Themes &lsaquo; globalstudy Setup: %3$s%4$s', 'globalstudy' ),
        'return-to-dashboard'      => esc_html__( 'Return to the dashboard', 'globalstudy' ),
        'ignore'                   => esc_html__( 'Disable this wizard', 'globalstudy' ),

        'btn-skip'                 => esc_html__( 'Skip', 'globalstudy' ),
        'btn-next'                 => esc_html__( 'Next', 'globalstudy' ),
        'btn-start'                => esc_html__( 'Start', 'globalstudy' ),
        'btn-no'                   => esc_html__( 'Cancel', 'globalstudy' ),
        'btn-plugins-install'      => esc_html__( 'Install', 'globalstudy' ),
        'btn-child-install'        => esc_html__( 'Install', 'globalstudy' ),
        'btn-content-install'      => esc_html__( 'Install', 'globalstudy' ),
        'btn-import'               => esc_html__( 'Import', 'globalstudy' ),
        'btn-license-activate'     => esc_html__( 'Activate', 'globalstudy' ),
        'btn-license-skip'         => esc_html__( 'Later', 'globalstudy' ),

        /* translators: Theme Name */
        'license-header%s'         => esc_html__( 'Activate %s', 'globalstudy' ),
        /* translators: Theme Name */
        'license-header-success%s' => esc_html__( '%s is Activated', 'globalstudy' ),
        /* translators: Theme Name */
        'license%s'                => esc_html__( 'Enter your license key to enable remote updates and theme support.', 'globalstudy' ),
        'license-label'            => esc_html__( 'License key', 'globalstudy' ),
        'license-success%s'        => esc_html__( 'globalstudy is already registered, so you can go to the next step!', 'globalstudy' ),
        'license-json-success%s'   => esc_html__( 'globalstudy is activated! Remote updates and theme support are enabled.', 'globalstudy' ),
        'license-tooltip'          => esc_html__( 'Need help?', 'globalstudy' ),

        /* translators: Theme Name */
        'welcome-header%s'         => esc_html__( 'Welcome to %s', 'globalstudy' ),
        'welcome-header-success%s' => esc_html__( 'Hi. Welcome back', 'globalstudy' ),
        'welcome%s'                => esc_html__( 'This wizard will set up your Masterstudy LMS theme, install plugins, and import demo content. It is optional & should take only a few minutes.', 'globalstudy' ),
        'welcome-success%s'        => esc_html__( 'You may have already run this starter Theme setup wizard. If you would like to proceed anyway, click on the "Start" button below.', 'globalstudy' ),

        'child-header'             => esc_html__( 'Install Child Theme', 'globalstudy' ),
        'child-header-success'     => esc_html__( 'You\'re good to go!', 'globalstudy' ),
        'child'                    => esc_html__( 'Let\'s build and activate a Child Theme so you may easily make changes to the theme.', 'globalstudy' ),
        'child-success%s'          => esc_html__( 'Your child theme has already been installed and is now activated, if it wasn\'t already.', 'globalstudy' ),
        'child-action-link'        => esc_html__( 'Learn about Child Themes', 'globalstudy' ),
        'child-json-success%s'     => esc_html__( 'Awesome. globalstudy theme has already been installed and is now activated.', 'globalstudy' ),
        'child-json-already%s'     => esc_html__( 'Awesome. globalstudy theme has been created and is now activated.', 'globalstudy' ),

        'plugins-header'           => esc_html__( 'Install Plugins', 'globalstudy' ),
        'plugins-header-success'   => esc_html__( 'You\'re up to speed!', 'globalstudy' ),
        'plugins'                  => esc_html__( 'Let\'s install some essential WordPress plugins to get your site up to speed.', 'globalstudy' ),
        'plugins-success%s'        => esc_html__( 'The required WordPress plugins are all installed and up to date. Press "Next" to continue the setup wizard.', 'globalstudy' ),
        'plugins-action-link'      => esc_html__( 'Advanced', 'globalstudy' ),

        'import-header'            => esc_html__( 'Import Demo Content', 'globalstudy' ),
        'import'                   => esc_html__( 'Let\'s import demo content to your website, to help you get familiar with the theme.', 'globalstudy' ),
        'import-action-link'       => esc_html__( 'Advanced', 'globalstudy' ),

        'ready-header'             => esc_html__( 'All done. Have fun!', 'globalstudy' ),

        /* translators: Theme Author */
        'ready%s'                  => esc_html__( 'Your theme has been all set up. Enjoy your new theme by %s.', 'globalstudy' ),
        'ready-action-link'        => esc_html__( 'Extras', 'globalstudy' ),
        'ready-big-button'         => esc_html__( 'View your website', 'globalstudy' ),
        'lms-big-button'           => esc_html__( 'Setup MasterStudy Plugin', 'globalstudy' ),
    )
);


/**
 * Demo import
 */

if ( ! function_exists( 'globalstudy_demo_import_files' ) ) {
    function globalstudy_demo_import_files() {

            $demo  = array(
            array(
                'import_file_name' => esc_html__( 'Demo Content', 'globalstudy' ),
                'import_file_url' => MS_LMS_GLOBALSTUDY_THEME_URI . '/inc/sample_data/demo.xml',
                'import_widget_file_url' => MS_LMS_GLOBALSTUDY_THEME_URI . '/inc/sample_data/demo.wie',
                'import_customizer_file_url' => MS_LMS_GLOBALSTUDY_THEME_URI . '/inc/sample_data/demo.dat',
                'preview_url' => '#',
            ),
        );
            return $demo;
    }
}
add_filter( 'merlin_import_files', 'globalstudy_demo_import_files' );
add_filter( 'pt-ocdi/import_files', 'globalstudy_demo_import_files' );

/**
 * Disable regenerate thumbnails
 */
add_filter( 'globalstudy_merlin_regenerate_thumbnails_in_content_import', '__return_false' );
add_filter( 'pt-ocdi/regenerate_thumbnails_in_content_import', '__return_false' );
