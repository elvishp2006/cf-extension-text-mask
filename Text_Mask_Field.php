<?php

namespace Carbon_Fields\Field;

class Text_Mask_Field extends Text_Field {
	/**
	 * Mask of this field.
	 *
	 * @see set_required()
	 * @var bool
	 **/
	protected $mask = '';
	/**
	 * jQuery mask options.
	 *
	 * @see set_required()
	 * @var bool
	 **/
	protected $mask_options = array();

	/**
	 * Set a mask format on this field
	 *
	 * @param string $mask
	 * @param array $options
	 * @return object $this
	 **/
	public function set_mask( $mask, $options = array() ) {
		$this->mask = $mask;
		$this->mask_options = $options;
		return $this;
	}

	/**
	 * Return mask format on this field
	 *
	 * @return string
	 **/
	public function get_mask() {
		return $this->mask;
	}
	/**
	 * Return jQuery mask options
	 *
	 * @return array
	 **/
	public function get_mask_options()
	{
		return $this->mask_options;
	}

	/**
	 * to_json()
	 *
	 * You can use this method to modify the field properties that are added to the JSON object.
	 * The JSON object is used by the Backbone Model and the Underscore template.
	 *
	 * @param bool $load  Should the value be loaded from the database or use the value from the current instance.
	 * @return array
	 */
	public function to_json( $load ) {
		$field_data = parent::to_json( $load ); // do not delete

		$field_data = array_merge( $field_data, array(
			'mask' => $this->get_mask(),
			'mask_options' => $this->get_mask_options(),
		) );

		return $field_data;
	}

	/**
	 * admin_enqueue_scripts()
	 *
	 * This method is called in the admin_enqueue_scripts action. It is called once per field type.
	 * Use this method to enqueue CSS + JavaScript files.
	 *
	 */
	public static function admin_enqueue_scripts() {
		$dir = plugin_dir_url( __FILE__ );

		# Enqueue JS
		wp_enqueue_script( 'carbon-field-text-mask', $dir . 'js/field.js', array( 'carbon-fields' ) );
		wp_enqueue_script( 'carbon-jquery-mask', $dir . 'js/jquery.mask.js' );
	}
}
