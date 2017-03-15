<?php
/*
Plugin Name: Carbon Field: Text Mask
Description: Extends the base Carbon Fields with a Text Mask field.
Version: 1.0.0
*/

/**
 * Set text domain
 * @see https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
 */
load_plugin_textdomain( 'carbon-field-text_mask', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

/**
 * Hook field initialization
 */
add_action( 'after_setup_theme', 'crb_init_carbon_field_text_mask', 15 );
function crb_init_carbon_field_text_mask() {
	if ( class_exists( 'Carbon_Fields\\Field\\Field' ) ) {
		include_once dirname(__FILE__) . '/Text_Mask_Field.php';
	}
}
