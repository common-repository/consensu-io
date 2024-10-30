<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://integration.consensu.io
 * @since      1.0.0
 *
 * @package    Consensu_Lgpd
 * @subpackage Consensu_Lgpd/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Consensu_Lgpd
 * @subpackage Consensu_Lgpd/includes
 * @author      Consensu.IO <contato@consensu.io>
 */
class Consensu_Lgpd_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'consensu-lgpd',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
