<?php
/**
 * Builds the Custom CSS admin content.
 *
 * @package Dynamik
 */
?>

<div id="dynamik-custom-options-nav-css-box" class="dynamik-optionbox-outer-1col dynamik-all-options dynamik-options-display">
	<div class="dynamik-optionbox-inner-1col">
		<h3 style="margin-bottom:15px;"><?php _e( 'Custom CSS', 'dynamik' ); ?>
		<span style="color:#777777;">( <?php _e( 'Activate Front-end CSS Builder', 'dynamik' ); ?>
		<input type="checkbox" id="dynamik-css-builder-popup-active" name="dynamik[css_builder_popup_active]" value="1" <?php if( checked( 1, dynamik_get_custom_css( 'css_builder_popup_active' ) ) ); ?> />
		<span id="dynamik-css-builder-popup-editor-only-wrap"<?php if( !dynamik_get_custom_css( 'css_builder_popup_active' ) ) { echo 'style="display:none;"'; } ?>><?php _e( 'Editor Only', 'dynamik' ); ?>
		<input type="checkbox" id="dynamik-css-builder-popup-editor-only" name="dynamik[css_builder_popup_editor_only]" value="1" <?php if( checked( 1, dynamik_get_custom_css( 'css_builder_popup_editor_only' ) ) ); ?> /></span> )</span>
		<a href="http://dynamikdocs.cobaltapps.com/article/64-custom-css" class="tooltip-mark" target="_blank">[?]</a></h3>
		
		<div style="display:none;" id="css-builder-click-to-view">
			<a href="<?php echo home_url(); ?>" target="_blank"><?php _e( 'Click To View Front-end', 'dynamik' ); ?></a>
		</div>
		
		<div id="dynamik-custom-css-admin-p" class="dynamik-custom-option">
			<p style="margin:0;">
				<textarea wrap="off" id="dynamik-custom-css" class="dynamik-tabby-textarea" name="dynamik[custom_css]" rows="20"><?php echo esc_textarea( dynamik_get_custom_css( 'custom_css' ) ); ?></textarea>
			</p>
		</div>
	</div>
</div>