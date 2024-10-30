<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://integration.consensu.io
 * @since      1.0.0
 *
 * @package    Consensu_Lgpd
 * @subpackage Consensu_Lgpd/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Consensu_Lgpd
 * @subpackage Consensu_Lgpd/includes
 * @author      Consensu.IO <contato@consensu.io>
 */
class Consensu_Lgpd_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		delete_option(CONSENSU_LGPD_OPTION_NAME);
	}

}
