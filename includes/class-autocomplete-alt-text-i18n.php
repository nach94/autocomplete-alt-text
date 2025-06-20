<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://helloeveryone.me/
 * @since      1.0.0
 *
 * @package    Autocomplete_Alt_Text
 * @subpackage Autocomplete_Alt_Text/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Autocomplete_Alt_Text
 * @subpackage Autocomplete_Alt_Text/includes
 * @author     Hello Everyone <hola@helloeveryone.me>
 */
class Autocomplete_Alt_Text_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'autocomplete-alt-text',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
