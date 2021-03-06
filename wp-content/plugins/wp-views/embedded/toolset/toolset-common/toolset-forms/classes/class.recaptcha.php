<?php

require_once 'class.textfield.php';


class WPToolset_Field_Recaptcha extends WPToolset_Field_Textfield {

	private $pubkey = '';
	private $privkey = '';

	public function init() {

		$attr = $this->getAttr();

		//Site Key
		$this->pubkey = isset( $attr['public_key'] ) ? $attr['public_key'] : '';

		//Secret Key
		$this->privkey = isset( $attr['private_key'] ) ? $attr['private_key'] : '';

		global $sitepress;

		// get_user_locale() was introduced in WordPress 4.7
		$locale = ( function_exists( 'get_user_locale' ) ? get_user_locale() : get_locale() );
		$lang = substr( $locale, 0, 2 );

		if ( isset( $sitepress ) ) {
			if ( isset( $_GET['source_lang'] ) ) {
				$src_lang = sanitize_text_field( $_GET['source_lang'] );
			} else {
				$src_lang = $sitepress->get_current_language();
			}
			if ( isset( $_GET['lang'] ) ) {
				$lang = sanitize_text_field( $_GET['lang'] );
			} else {
				$lang = $src_lang;
			}
		}

		wp_enqueue_script( 'wpt-cred-recaptcha', '//www.google.com/recaptcha/api.js?hl=' . $lang );
	}

	public static function registerStyles() {

	}

	public function enqueueScripts() {

	}

	public function enqueueStyles() {

	}

	public function metaform() {
		$form = array();

		$capture = '';
		if ( $this->pubkey || ! is_admin() ) {
			try {
				$capture = '<div class="g-recaptcha" data-sitekey="' . $this->pubkey . '"></div><div class="recaptcha_error" style="color:#aa0000;display:none;">' . __( 'Please validate reCAPTCHA', 'wpv-views' ) . '</div>';
			} catch( Exception $e ) {
				// https://icanlocalize.basecamphq.com/projects/7393061-toolset/todo_items/188424989/comments
				if ( current_user_can( 'manage_options' ) ) {
					$id_field = $this->getId();
					$text = 'Caught exception: ' . $e->getMessage();
					$capture = "<label id=\"lbl_$id_field\" class=\"wpt-form-error\">$text</label><div style=\"clear:both;\"></div>";
				}
			}
		}

		$form[] = array(
			'#type' => 'textfield',
			'#title' => '',
			'#name' => '_recaptcha',
			'#value' => '',
			'#attributes' => array( 'style' => 'display:none;' ),
			'#before' => $capture
		);

		return $form;
	}

}
