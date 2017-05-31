<?php
/**
 * Builds the Theme Settings admin page.
 *
 * @package Dynamik
 */
 
/**
 * Build the Dynamik Theme Settings admin page.
 *
 * @since 1.0
 */
function dynamik_theme_settings()
{
	$user = wp_get_current_user();
?>
	<div class="wrap">
		
		<div id="dynamik-settings-saved" class="dynamik-update-box"></div>
		
		<?php
		if( !empty( $_POST['action'] ) && $_POST['action'] == 'reset' )
		{
			update_option( 'dynamik_gen_theme_settings', dynamik_theme_settings_defaults() );
			dynamik_write_files( $css = true, $ez = false, $custom = false );
			dynamik_get_settings( null, $args = array( 'cached' => false, 'array' => false ) );
			dynamik_protect_folders();
		?>
			<script type="text/javascript">jQuery(document).ready(function($){ $('#dynamik-settings-saved').html('Theme Settings Reset').css("position", "fixed").fadeIn('slow');window.setTimeout(function(){$('#dynamik-settings-saved').fadeOut( 'slow' );}, 2222); });</script>
		<?php
		}

		if( !empty( $_GET['activetab'] ) )
		{ ?>
			<script type="text/javascript">jQuery(document).ready(function($) { $('#<?php echo $_GET['activetab']; ?>').click(); });</script>	
		<?php
		} ?>
		
		<div id="icon-options-general" class="icon32"></div>
		
		<h2 id="dynamik-admin-heading"><?php _e( 'Dynamik - Theme Settings', 'dynamik' ); ?></h2>
		
		<div id="dynamik-admin-wrap">
			
			<form action="/" id="theme-settings-form" name="theme-settings-form">
			
				<input type="hidden" name="action" value="dynamik_theme_settings_save" />
				<input type="hidden" name="security" value="<?php echo wp_create_nonce( 'theme-settings' ); ?>" />
			
				<div id="dynamik-floating-save">
					<img id="ajax-save-no-throb" src="<?php echo CHILD_URL . '/lib/css/images/no-throb.png'; ?>" style="margin-bottom:11px;" /><img id="ajax-save-throbber" src="<?php echo CHILD_URL . '/lib/css/images/throbber.gif'; ?>" width="16" height="16" style="display:none;margin-bottom:11px;" /><input type="image" src="<?php echo CHILD_URL . '/lib/css/images/save-changes-x2.png'; ?>" value="<?php _e( 'Save Changes', 'dynamik' ); ?>" class="dynamik-save-button" name="Submit" alt="Save Changes" />
				</div>
					
				<div id="dynamik-theme-settings-nav" class="dynamik-admin-nav">
					<ul>
						<li id="dynamik-theme-settings-nav-info" class="dynamik-options-nav-all dynamik-options-nav-active"><a href="#">Child Theme Info</a></li><li id="dynamik-theme-settings-nav-general" class="dynamik-options-nav-all"><a href="#">General Settings</a></li><li id="dynamik-theme-settings-nav-import-export" class="dynamik-options-nav-all"><a class="dynamik-options-nav-last" href="#">Import / Export</a></li>
					</ul>
				</div>
				
				<div class="dynamik-theme-settings-wrap">
					<?php require_once( CHILD_DIR . '/lib/admin/boxes/settings-general.php' ); ?>
				</div>
			
			</form>
			
			<div class="dynamik-theme-settings-wrap">
				<?php require_once( CHILD_DIR . '/lib/admin/boxes/settings-theme-info.php' ); ?>
				<?php require_once( CHILD_DIR . '/lib/admin/boxes/settings-import-export.php' ); ?>
			</div>
			
			<div id="dynamik-admin-footer">
				<p>
					<a href="http://cobaltapps.com" target="_blank">CobaltApps.com</a> | <a href="http://dynamikdocs.cobaltapps.com/" target="_blank">Docs</a> | <a href="http://cobaltapps.com/my-account/" target="_blank">My Account</a> | <a href="http://cobaltapps.com/forum/" target="_blank">Community Forum</a> | <a href="http://cobaltapps.com/affiliates/" target="_blank">Affiliates</a> &middot;
					<a><span id="show-options-reset" class="dynamik-custom-fonts-button button" style="margin:0; float:none !important;"><?php _e( 'Theme Settings Reset', 'dynamik' ); ?></span></a><a href="http://dynamikdocs.cobaltapps.com/article/152-theme-settings-reset" class="tooltip-mark" target="_blank">[?]</a>
				</p>
			</div>
			
			<div style="display:none; width:160px; border:none; background:none; margin:0 auto; padding:0; float:none; position:inherit;" id="show-options-reset-box" class="dynamik-custom-fonts-box">
				<form style="float:left;" id="dynamik-reset-theme-settings" method="post">
					<input style="background:#D54E21; width:160px !important; color:#FFFFFF !important; -webkit-box-shadow:none; box-shadow:none;" type="submit" value="<?php _e( 'Reset Theme Settings', 'dynamik' ); ?>" class="dynamik-reset button" name="Submit" onClick='return confirm("<?php _e( 'Are you sure your want to reset your Dynamik Theme Settings?', 'dynamik' ); ?>")'/><input type="hidden" name="action" value="reset" />
				</form>
			</div>
		</div>
	</div> <!-- Close Wrap -->
<?php
}

add_action( 'wp_ajax_dynamik_theme_settings_save', 'dynamik_theme_settings_save' );
/**
 * Use ajax to update the Custom Options based on the posted values.
 *
 * @since 1.0
 */
function dynamik_theme_settings_save()
{
	check_ajax_referer( 'theme-settings', 'security' );
	
	$update = $_POST['dynamik'];
	update_option( 'dynamik_gen_theme_settings', $update );
	
	dynamik_write_files( $css = true, $ez = false, $custom = false );
	dynamik_protect_folders();
	
	echo 'Theme Settings Updated';
	exit();
}

/**
 * Create an array of Theme Settings default values.
 *
 * @since 1.0
 * @return an array of Theme Settings default values.
 */
function dynamik_theme_settings_defaults( $defaults = true, $import = false )
{	
	$defaults = array(
		'remove_all_page_titles' => ( !$defaults && !empty( $import['remove_all_page_titles'] ) ) ? 1 : 0,
		'remove_page_titles_ids' => '',
		'include_inpost_cpt_all' => ( !$defaults && !empty( $import['include_inpost_cpt_all'] ) ) ? 1 : 0,
		'include_inpost_cpt_names' => '',
		'post_formats_active' => ( !$defaults && !empty( $import['post_formats_active'] ) ) ? 1 : 0,
		'protected_folders' => '',
		'responsive_enabled' => ( $defaults || !empty( $import['responsive_enabled'] ) ) ? 1 : 0,
		'design_options_control' => 'kitchen_sink',
		'affiliate_link' => '',
		'custom_image_size_one_mode' => '',
		'custom_image_size_one_width' => '',
		'custom_image_size_one_height' => '',
		'custom_image_size_two_mode' => '',
		'custom_image_size_two_width' => '',
		'custom_image_size_two_height' => '',
		'custom_image_size_three_mode' => '',
		'custom_image_size_three_width' => '',
		'custom_image_size_three_height' => '',
		'custom_image_size_four_mode' => '',
		'custom_image_size_four_width' => '',
		'custom_image_size_four_height' => '',
		'custom_image_size_five_mode' => '',
		'custom_image_size_five_width' => '',
		'custom_image_size_five_height' => '',
		'protocol_relative_urls' => ( !$defaults && !empty( $import['protocol_relative_urls'] ) ) ? 1 : 0,
		'codemirror_active' => ( $defaults || !empty( $import['codemirror_active'] ) ) ? 1 : 0,
		'bootstrap_column_classes_active' => ( $defaults || !empty( $import['bootstrap_column_classes_active'] ) ) ? 1 : 0,
		'html_five_active' => ( $defaults || !empty( $import['html_five_active'] ) ) ? 1 : 0,
		'fancy_dropdowns_active' => ( $defaults || !empty( $import['fancy_dropdowns_active'] ) ) ? 1 : 0
	);
	
	return apply_filters( 'dynamik_theme_settings_defaults', $defaults );
}

//end lib/admin/dynamik-theme-settings.php