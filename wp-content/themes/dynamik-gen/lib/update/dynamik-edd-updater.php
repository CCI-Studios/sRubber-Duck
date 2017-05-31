<?php
/**
 * This is the Easy Digital Downloads theme licensing
 * and theme update functionality.
 *
 * @package Dynamik
 */

// This is the URL our updater / license checker pings. This should be the URL of the site with EDD installed
define( 'DYN_COBALT_APPS_URL', 'http://cobaltapps.com' );

// The name of your product. This should match the download name in EDD exactly
define( 'DYN_DYNAMIK_WEBSITE_BUILDER', 'Dynamik Website Builder' );

/***********************************************
* This is our updater
***********************************************/

if( !class_exists( 'EDD_SL_Theme_Updater' ) )
{
	// Load our custom theme updater
	include( dirname( __FILE__ ) . '/EDD_SL_Theme_Updater.php' );
}

add_action( 'admin_init', 'dynamik_sl_theme_updater' );
/**
 * Create a new instance of the EDD_SL_Theme_Updater class with a unique set of values.
 *
 * @since 1.6
 */
function dynamik_sl_theme_updater()
{
	$theme_license = trim( get_option( 'dynamik_gen_license_key' ) );

	$edd_updater = new EDD_SL_Theme_Updater( array(
			'remote_api_url' 	=> DYN_COBALT_APPS_URL, 	// Our store URL that is running EDD
			'version' 			=> '1.6', 				// The current theme version we are running
			'license' 			=> $theme_license, 		// The license key (used get_option above to retrieve from DB)
			'item_name' 		=> DYN_DYNAMIK_WEBSITE_BUILDER,	// The name of this theme
			'author'			=> 'The Cobalt Apps Team'	// The author's name
		)
	);
}

/**
 * Build the License Options admin section.
 *
 * @since 1.6
 */
function dynamik_license_options()
{
	$user = wp_get_current_user();
	if( get_the_author_meta( 'hide_dynamik_gen_license_key', $user->ID ) )
		return;

	$license 	= get_option( 'dynamik_gen_license_key' );
	$status 	= get_option( 'dynamik_gen_license_key_status' );
	?>
	<div class="dynamik-optionbox-outer-2col">
		<div class="dynamik-optionbox-inner-2col">
			<h4><?php _e( 'Dynamik License Options', 'dynamik' ); ?> <a href="http://dynamikdocs.cobaltapps.com/article/159-dynamik-license-options" class="tooltip-mark" target="_blank">[?]</a></h4>
			<form method="post" action="options.php">

				<?php settings_fields( 'dynamik_theme_license' ); ?>

				<div class="bg-box">
					<p>
						<?php _e( 'License Key', 'dynamik' ); ?>
						<input id="dynamik_gen_license_key" name="dynamik_gen_license_key" type="password" class="regular-text" value="<?php echo esc_attr( $license ); ?>"/>

						<?php if( false !== $license && $license != '' ) { ?>
							<?php if( $status !== false && $status == 'valid' ) { ?>
								<span style="color:green;"><?php _e('active', 'dynamik' ); ?></span>
								<?php wp_nonce_field( 'edd_dynamik_nonce', 'edd_dynamik_nonce' ); ?>
								<input type="submit" class="button" name="dynamik_license_deactivate" value="<?php _e('Deactivate License', 'dynamik' ); ?>"/>
							<?php } else { ?>
								<span style="color:red;"><?php _e('inactive', 'dynamik' ); ?></span>
								<?php wp_nonce_field( 'edd_dynamik_nonce', 'edd_dynamik_nonce' ); ?>
								<input type="submit" class="button" name="dynamik_license_activate" value="<?php _e('Activate License', 'dynamik' ); ?>"/>
							<?php } ?>
						<?php } ?>

						<input type="submit" name="submit" id="submit" class="button" value="<?php _e( 'Save Changes', 'dynamik' ); ?>" style="margin-bottom:10px !important;"/>
					</p>
				</div>

			</form>
		</div>
	</div>
	<?php
}

add_action( 'admin_init', 'dynamik_register_license_option' );
/**
 * Register the dynamik_theme_license setting.
 *
 * @since 1.6
 */
function dynamik_register_license_option()
{
	// creates our settings in the options table
	register_setting( 'dynamik_theme_license', 'dynamik_gen_license_key', 'dynamik_sanitize_license' );
}

/***********************************************
* Gets rid of the local license status option
* when adding a new one
***********************************************/

/**
 * Sanatize the Dynamik License option.
 *
 * @since 1.6
 */
function dynamik_sanitize_license( $new )
{
	$old = get_option( 'dynamik_gen_license_key' );
	if( $old && $old != $new )
	{
		delete_option( 'dynamik_gen_license_key_status' ); // new license has been entered, so must reactivate
	}
	return $new;
}

/***********************************************
* Illustrates how to activate a license key.
***********************************************/

add_action( 'admin_init', 'dynamik_activate_license' );
/**
 * Attempt to activate the currently set license option value.
 *
 * @since 1.6
 */
function dynamik_activate_license()
{
	if( isset( $_POST['dynamik_license_activate'] ) ) {
	 	if( ! check_admin_referer( 'edd_dynamik_nonce', 'edd_dynamik_nonce' ) )
			return; // get out if we didn't click the Activate button

		global $wp_version;

		$license = trim( get_option( 'dynamik_gen_license_key' ) );

		$api_params = array(
			'edd_action' => 'activate_license',
			'license' => $license,
			'item_name' => urlencode( DYN_DYNAMIK_WEBSITE_BUILDER )
		);

		$response = wp_remote_get( add_query_arg( $api_params, DYN_COBALT_APPS_URL ), array( 'timeout' => 15, 'sslverify' => false ) );

		if ( is_wp_error( $response ) )
			return false;

		$license_data = json_decode( wp_remote_retrieve_body( $response ) );

		// $license_data->license will be either "active" or "inactive"

		update_option( 'dynamik_gen_license_key_status', $license_data->license );
	}
}

/***********************************************
* Illustrates how to deactivate a license key.
* This will descrease the site count
***********************************************/

add_action( 'admin_init', 'dynamik_deactivate_license' );
/**
 * Deactivate the currently active license key.
 *
 * @since 1.6
 */
function dynamik_deactivate_license()
{
	// listen for our activate button to be clicked
	if( isset( $_POST['dynamik_license_deactivate'] ) )
	{
		// run a quick security check
	 	if( ! check_admin_referer( 'edd_dynamik_nonce', 'edd_dynamik_nonce' ) )
			return; // get out if we didn't click the Activate button

		// retrieve the license from the database
		$license = trim( get_option( 'dynamik_gen_license_key' ) );

		// data to send in our API request
		$api_params = array(
			'edd_action'=> 'deactivate_license',
			'license' 	=> $license,
			'item_name' => urlencode( DYN_DYNAMIK_WEBSITE_BUILDER ) // the name of our product in EDD
		);

		// Call the custom API.
		$response = wp_remote_get( add_query_arg( $api_params, DYN_COBALT_APPS_URL ), array( 'timeout' => 15, 'sslverify' => false ) );

		// make sure the response came back okay
		if ( is_wp_error( $response ) )
			return false;

		// decode the license data
		$license_data = json_decode( wp_remote_retrieve_body( $response ) );

		// $license_data->license will be either "deactivated" or "failed"
		if( $license_data->license == 'deactivated' )
			delete_option( 'dynamik_gen_license_key_status' );
	}
}

//end lib/update/dynamik-edd-updater.php