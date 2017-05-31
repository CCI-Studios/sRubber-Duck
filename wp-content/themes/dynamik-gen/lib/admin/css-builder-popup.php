<?php
/**
 * Builds the main Custom CSS Editor and Ajax save
 * functionality as well as pulls in the necessary js code
 * required for the Front-end CSS Builder.
 *
 * @package Dynamik
 */
 
/**
 * Build the front-end CSS builder Custom CSS editor form.
 *
 * @since 1.0
 */
function dynamik_css_builder_custom_css()
{
?>
	<div id="dynamik-custom-css-editor"<?php if( dynamik_get_custom_css( 'css_builder_popup_editor_only' ) ) { echo 'style="display:none;"'; } ?>>
		<form action="/" id="css-builder-custom-css-form" name="css-builder-custom-css-form">
		
			<div id="dynamik-css-builder-saved" class="dynamik-update-box"></div>
			<h3 id="css-editor-h3" style="-moz-border-radius: 3px 3px 0px 0px; -webkit-border-radius: 3px 3px 0px 0px; border-radius: 3px 3px 0px 0px;"><?php _e( 'Custom CSS Editor', 'dynamik' ); ?> <span style="display:none;" id="custom-css-popout-link" class="css-editor-popout-links"><?php _e( '[Pop-out &raquo;]', 'dynamik' ); ?></span> <span style="display:none;" id="custom-css-popin-link" class="css-editor-popout-links"><?php _e( '[&laquo; Pop-in]', 'dynamik' ); ?></span> <span style="display:none;" id="custom-css-show-hide-sidebar-link" class="css-editor-popout-links"><?php _e( '[Show/Hide Sidebar]', 'dynamik' ); ?></span></h3>
			<div id="dynamik-custom-css-editor-wrap-inner" class="bg-box">
				
				<input type="hidden" name="action" value="dynamik_css_builder_save" />
				<input type="hidden" name="security" value="<?php echo wp_create_nonce( 'css-builder-popup' ); ?>" />

				<div id="dynamik-floating-save-warning"></div>
			
				<div id="dynamik-floating-save">
					<img id="ajax-save-no-throb" src="<?php echo CHILD_URL . '/lib/css/images/no-throb.png'; ?>" /><img id="ajax-save-throbber" src="<?php echo CHILD_URL . '/lib/css/images/throbber.gif'; ?>" width="16" height="16" /><input type="image" src="<?php echo CHILD_URL . '/lib/css/images/save-changes-x2.png'; ?>" value="<?php _e( 'Save Changes', 'dynamik' ); ?>" class="dynamik-save-button" name="Submit" alt="Save Changes" />
				</div>
				
				<div id="custom-css-builder-nav-css-box">
					<textarea wrap="off" id="dynamik-custom-css" name="dynamik[custom_css]"><?php echo dynamik_get_custom_css( 'custom_css' ); ?></textarea>
				</div>

			</div>
		
		</form>
	</div>
<?php
	if( dynamik_get_custom_css( 'css_builder_popup_editor_only' ) && dynamik_get_settings( 'codemirror_active' ) )
	{
?>
	<script type="text/javascript">
		var atts = {
			lineNumbers: true,
			matchBrackets: true,
			autoCloseBrackets: true,
			mode: "text/x-php",
			indentUnit: 4,
			indentWithTabs: true,
			enterMode: "keep",
			tabMode: "shift"
		};
		var editor = CodeMirror.fromTextArea(document.getElementById("dynamik-custom-css"), atts);
	</script>
<?php
	}
}

add_action( 'wp_ajax_dynamik_css_builder_save', 'dynamik_css_builder_save' );
/**
 * Use ajax to update the Custom CSS based on the posted values.
 *
 * @since 1.0
 */
function dynamik_css_builder_save()
{
	check_ajax_referer( 'css-builder-popup', 'security' );
	
	$update = array(
		'custom_css' => $_POST['dynamik']['custom_css'],
		'css_builder_popup_active' => dynamik_get_custom_css( 'css_builder_popup_active' ),
		'css_builder_popup_editor_only' => dynamik_get_custom_css( 'css_builder_popup_editor_only' ),
		'custom_functions' => dynamik_get_custom_css( 'custom_functions' )
	);
	$update_merged = array_merge( dynamik_custom_css_options_defaults(), $update );
	update_option( 'dynamik_gen_custom_css', $update_merged );
	
	dynamik_write_files( $css = true, $ez = false, $custom = false  );
	
	echo 'Custom CSS Updated';
	exit();
}

add_action( 'wp_head', 'css_builder_popup' );
/**
 * Add scripts and HTML to the <head> that are necessary
 * for the front-end CSS builder to function.
 *
 * @since 1.0
 */
function css_builder_popup()
{
?>
<script type="text/javascript">
var cssBuilderImagesUrl = 'url(<?php echo dynamik_get_stylesheet_location( 'url' ) . 'images'; ?>';
var cssBuilderImagesUrlSingleQuotes = 'url(\'<?php echo dynamik_get_stylesheet_location( 'url' ) . 'images'; ?>';
var cssBuilderImagesUrlDoubleQuotes = 'url("<?php echo dynamik_get_stylesheet_location( 'url' ) . 'images'; ?>';
var cssBuilderLabelsUrl = '<?php echo CHILD_URL . '/lib/css/images/css-builder-element-labels'; ?>';
var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
<?php
	if( dynamik_get_settings( 'html_five_active' ) )
	{ ?>
var cssBtabsSiteInner = '.site-inner';
var cssBtabsSiteHeader = '.site-header';
var cssBtabsNavPrimary = '.nav-primary';
var cssBtabsNavSecondary = '.nav-secondary';
var cssBtabsContent = '.content';
var cssBtabsSidebarPrimary = '.sidebar-primary';
var cssBtabsSidebarSecondary = '.sidebar-secondary';
var cssBtabsSiteFooter = '.site-footer';
	<?php
	}
	else
	{ ?>
var cssBtabsSiteInner = '#inner';
var cssBtabsSiteHeader = '#header';
var cssBtabsNavPrimary = '#nav';
var cssBtabsNavSecondary = '#subnav';
var cssBtabsContent = '#content';
var cssBtabsSidebarPrimary = '#sidebar';
var cssBtabsSidebarSecondary = '#sidebar-alt';
var cssBtabsSiteFooter = '#footer';
	<?php
	} ?>
</script>
<?php
	if( dynamik_get_custom_css( 'css_builder_popup_editor_only' ) )
	{
		echo '<span id="css-builder-custom-css-only"></span>' . "\n";
	}
	else
	{
		echo '<span id="css-builder-custom-css"></span>' . "\n";
	}
	echo '<span id="css-builder-editor-css"></span>' . "\n";
	echo '<span id="css-builder-highlight-css"></span>' . "\n";
	require_once( CHILD_DIR . '/lib/admin/boxes/custom-css-builder-popup.php' );
}

add_action( 'wp_print_styles', 'add_css_builder_popup_styles' );
/**
 * Register and Enqueue the front-end CSS builder stylesheet.
 *
 * @since 1.0
 */
function add_css_builder_popup_styles()
{
	if( is_admin() )
		return;
		
	$css_builder_styles_url = CHILD_URL . '/lib/css/css-builder-popup.css';
	$css_builder_styles_file = CHILD_DIR . '/lib/css/css-builder-popup.css';
	if ( file_exists( $css_builder_styles_file ) )
	{
		wp_register_style( 'css_builder_php_styles', $css_builder_styles_url );
		wp_enqueue_style( 'css_builder_php_styles' );
	}
}

//end lib/admin/css-builder-popup.php