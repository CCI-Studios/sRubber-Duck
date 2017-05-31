<?php
/**
 * Builds the Settings Theme Info admin content.
 *
 * @package Dynamik
 */
?>

<div id="dynamik-theme-settings-nav-info-box" class="dynamik-optionbox-outer-1col dynamik-all-options dynamik-options-display">
	<div class="dynamik-optionbox-2col-left-wrap">
<?php	if( !empty( $_GET['notice'] ) )
		{
			if( $_GET['notice'] == 'dynamik-unwritable' )
			{
?>				<div id="notice-box" style="background:#FFFBCC;border:1px solid #E6DB55;color:#555555;text-align:center;margin:0 0 15px;padding:15px;"><strong><?php _e( 'It appears that some of your files/folders are unwritable to Dynamik. Please refer to', 'dynamik' ); ?> <a href="http://dynamiksupport.cobaltapps.com/customer/portal/articles/1235498-does-dynamik-have-any-special-file-permissions-requirements-or-recommendations-" target="_blank"><?php _e( 'THIS KNOWLEDGEABLE ARTICLE', 'dynamik' ); ?></a> <?php _e( 'for a possible solution.', 'dynamik' ); ?></strong></div>
<?php		}
		}
?>		
		<div class="dynamik-optionbox-outer-2col">
			<div class="dynamik-optionbox-inner-2col">
				<h4><?php _e( 'Dynamik General Information', 'dynamik' ); ?></h4>
				<div id="readme-box">
					<h5><?php _e( 'Using The Dynamik [?]Tooltips', 'dynamik' ); ?></h5>
					
					<p style="margin-top:-15px;">
						<?php _e( 'Throughout the entire Dynamik admin interface are [?]Tooltips that link to appropriate knowledge base articles to help clarify and explain how the various options and features work. So if you find an option or setting to be unclear, chances are the nearest Tooltip will provide explanation.', 'dynamik' ); ?>
					</p>
					
					<h5><?php _e( 'Dynamik Theme Updates', 'dynamik' ); ?></h5>
					
					<p style="margin-top:-15px;">
						<?php _e( 'Dynamik will notify you any time an update is available. Dynamik checks automatically for updates every 24 hours, and you can check for updates manually by clicking the "Check Now" button below.', 'dynamik' ); ?>
					</p>
					<p>
						<?php _e( 'A complete backup of your Design and Custom settings is strongly recommended before performing an update.', 'dynamik' ); ?>
					</p>
				</div>
			</div>
		</div>

		<div class="dynamik-optionbox-outer-2col">
			<div class="dynamik-optionbox-inner-2col">
				<h4><?php _e( 'Version Information', 'dynamik' ); ?></h4>
				<div class="bg-box">
					<p>
						<?php _e( 'PHP Version:', 'dynamik' ); ?> <b><code><?php echo PHP_VERSION ?></code></b>
					</p>
					
					<p>
						<?php _e( 'WordPress Version:', 'dynamik' ); ?> <b><code><?php echo bloginfo('version') ?></code></b>
					</p>

					<p>
						<?php _e( 'Genesis Version:', 'dynamik' ); ?> <b><code><?php echo esc_attr( PARENT_THEME_VERSION ) ?></code></b>
					</p>
					
					<p>
						<?php _e( 'Dynamik Version:', 'dynamik' ); ?> <b><code><?php echo esc_attr( CHILD_THEME_VERSION ) ?></code></b>
					</p>
				</div>
			</div>
		</div>
	
	</div>

	<div class="dynamik-optionbox-2col-right-wrap">
	
		<div class="dynamik-optionbox-outer-2col">
			<div class="dynamik-optionbox-inner-2col">
				<h4><?php _e( 'Dynamik Links & Resources', 'dynamik' ); ?></h4>
				<div id="resource-box">
					<h5><?php _e( 'Dynamik Docs & Support', 'dynamik' ); ?></h5>
					
					<p style="margin-top:-15px;">
						<?php _e( '1. Check out the knowledge base:', 'dynamik' ); ?>
					</p>
					<p style="margin-top:-5px;">
						<a href="http://dynamikdocs.cobaltapps.com/" target="_blank">http://dynamikdocs.cobaltapps.com/</a>
					</p>

					<p>
						<?php _e( '2. Use the form to email support on the "My Account" page:', 'dynamik' ); ?>
					</p>
					<p style="margin-top:-5px;">
						<a href="http://cobaltapps.com/my-account/" target="_blank">http://cobaltapps.com/my-account/</a>
					</p>
					
					<h5><?php _e( 'Make Money Promoting Dynamik', 'dynamik' ); ?></h5>
					
					<p style="margin-top:-15px;">
						<?php _e( 'To help promote Dynamik and get a share of all sales you help to generate, join our affiliate program:', 'dynamik' ); ?>
					</p>
					<p style="margin-top:-5px;">
						<a href="http://cobaltapps.com/affiliates/" target="_blank">http://cobaltapps.com/affiliates/</a>
					</p>
				</div>
			</div>
		</div>
		
		<?php dynamik_license_options(); ?>

	</div>
</div>