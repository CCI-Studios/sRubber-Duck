<?php
/**
 * This is the initialization file for Dynamik,
 * defining constants, globaling database option arrays
 * and requiring other function files.
 *
 * @package Dynamik
 */
 
/**
 * Define Dynamik child theme constants.
 */
define( 'CHILD_THEME_NAME', 'Dynamik Website Builder' );
define( 'CHILD_THEME_VERSION', '1.6' );

/**
 * Localization.
 */
load_child_theme_textdomain( 'dynamik', apply_filters( 'child_theme_textdomain', CHILD_DIR . '/lib/languages', 'dynamik' ) );

/**
 * Require files.
 */
require_once( CHILD_DIR . '/lib/functions/dynamik-file-paths.php' );
require_once( CHILD_DIR . '/lib/functions/dynamik-options.php' );

/**
 * Define Dynamik child theme constants.
 *
 * Note: Because this constant uses the dynamik_get_settings
 * function it has to be defined AFTER the dynamik-settings.php
 * file is called.
 */
$child_theme_url = dynamik_get_settings( 'affiliate_link' ) != '' ? dynamik_get_settings( 'affiliate_link' ) : 'http://cobaltapps.com/downloads/dynamik-website-builder/';
define( 'CHILD_THEME_URL', $child_theme_url );

/**
 * Create a global to define whether or not the CSS Buidler Popup tool is active.
 */
$dynamik_css_builder_popup = false;

if( dynamik_get_custom_css( 'css_builder_popup_active' ) && current_user_can( 'administrator' ) )
{
	$dynamik_css_builder_popup = true;
}

require_once( CHILD_DIR . '/lib/functions/dynamik-add-styles.php' );
require_once( CHILD_DIR . '/lib/functions/dynamik-functions.php' );
require_once( CHILD_DIR . '/lib/functions/dynamik-navbars.php' );
require_once( CHILD_DIR . '/lib/functions/dynamik-fonts.php' );
require_once( CHILD_DIR . '/lib/functions/dynamik-ez-functions.php' );

if( is_admin() || $dynamik_css_builder_popup )
{
	require_once( CHILD_DIR . '/lib/functions/dynamik-option-lists.php' );
}

if( $dynamik_css_builder_popup )
{
	require_once( CHILD_DIR . '/lib/admin/css-builder-popup.php' );
}

/**
 * Create globals and Require files only needed for admin.
 */
if( is_admin() )
{
	/**
	 * Create globals to define both the folder locations to be written to and their current writable state.
	 */
	$dynamik_folders = array( CHILD_DIR, CHILD_DIR . '/my-templates', dynamik_get_stylesheet_location( 'path', $root = true ), dynamik_get_stylesheet_location( 'path', $root = true ) . 'protected-folders', dynamik_get_skins_folder_path(), dynamik_get_stylesheet_location( 'path' ), dynamik_get_stylesheet_location( 'path' ) . 'images', dynamik_get_stylesheet_location( 'path' ) . 'adminthumbnails', dynamik_get_stylesheet_location( 'path' ) . 'tmp', dynamik_get_stylesheet_location( 'path' ) . 'tmp/images', dynamik_get_stylesheet_location( 'path' ) . 'tmp/images/adminthumbnails' );
	$dynamik_unwritable = false;

	foreach( $dynamik_folders as $dynamik_folder )
	{
		if( is_dir( $dynamik_folder ) && !is_writable( $dynamik_folder ) )
		{
			// Update $dynamik_unwritable global.
			$dynamik_unwritable = true;
		}
	}

	if( defined( 'GENEXT_VERSION' ) )
	{
		add_action( 'admin_notices', 'dynamik_extender_is_active_nag' );
		/**
		 * Build "Extender Is Active" Nag HTML.
		 *
		 * @since 1.2.2
		 */
		function dynamik_extender_is_active_nag()
		{			
			echo '<div id="update-nag">';
			printf( __( '<strong>Genesis Extender & Dynamik Website Builder Are Currently Active!</strong> If you are <a href="%s">transferring settings</a> then do so now, otherwise deactivate <a href="%s">Genesis Extender</a> or <a href="%s">Dynamik Website Builder</a>.', 'dynamik' ), admin_url( 'admin.php?page=dynamik-settings' ), admin_url( 'plugins.php' ), admin_url( 'themes.php' ) );
			echo '</div>';
		}
	}

	require_once( CHILD_DIR . '/lib/functions/dynamik-skins.php' );
	require_once( CHILD_DIR . '/lib/admin/build-menu.php' );
	require_once( CHILD_DIR . '/lib/admin/dynamik-theme-settings.php' );
	require_once( CHILD_DIR . '/lib/admin/dynamik-design-options.php' );
	require_once( CHILD_DIR . '/lib/admin/dynamik-custom-options.php' );
	require_once( CHILD_DIR . '/lib/functions/dynamik-user-meta.php' );
	require_once( CHILD_DIR . '/lib/functions/dynamik-build-styles.php' );
	require_once( CHILD_DIR . '/lib/functions/dynamik-write-files.php' );
	require_once( CHILD_DIR . '/lib/functions/dynamik-image-uploader.php' );
	require_once( CHILD_DIR . '/lib/update/dynamik-edd-updater.php' );
	require_once( CHILD_DIR . '/lib/functions/dynamik-import-export.php' );
	require_once( CHILD_DIR . '/lib/functions/dynamik-ez-structures.php' );
	require_once( CHILD_DIR . '/lib/admin/metaboxes/dynamik-metaboxes.php' );
	require_once( CHILD_DIR . '/lib/functions/dynamik-templates.php' );
	require_once( CHILD_DIR . '/lib/functions/dynamik-labels.php' );
	require_once( CHILD_DIR . '/lib/functions/dynamik-conditionals.php' );
	require_once( CHILD_DIR . '/lib/functions/dynamik-widget-areas.php' );
	require_once( CHILD_DIR . '/lib/functions/dynamik-hook-boxes.php' );
	require_once( CHILD_DIR . '/lib/update/dynamik-update.php' );
}

/**
 * Run if Dynamik was just activated.
 */
if( is_admin() && isset( $_GET['activated'] ) && $pagenow == "themes.php" )
{
	dynamik_activate();
}

/**
 * Require the active Skin Functions file.
 */
dynamik_require_skin_functions_file();

/**
 * Require the Custom Functions file.
 */
dynamik_require_custom_functions_file();

//end lib/init.php