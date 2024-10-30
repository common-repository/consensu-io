<?php

/**
 * Fired during plugin activation
 *
 * @link       https://integration.consensu.io
 * @since      1.0.0
 *
 * @package    Consensu_Lgpd
 * @subpackage Consensu_Lgpd/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Consensu_Lgpd
 * @subpackage Consensu_Lgpd/includes
 * @author      Consensu.IO <contato@consensu.io>
 */
class Consensu_Lgpd_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		$defaults = array(
            'plugin_ver' => CONSENSU_LGPD_VERSION,
			'client_key' => '', 
			'debug_mode' => false
        );

		if (get_option(CONSENSU_LGPD_OPTION_NAME, false) === false) {
            update_option(CONSENSU_LGPD_OPTION_NAME, $defaults);
        }

	}
}
