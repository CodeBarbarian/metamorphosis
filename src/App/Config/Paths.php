<?php

namespace App\Config;

use Core\Config;

/**
 * Paths Config
 * @version: PHP: 8.1
 *
 * @Paths
 */
class Paths extends Config {
	/**
	 * Public Root
	 */
	const PUBLIC_ROOT = "./";

	public static function getWebRoot() : string {
		return ((\App\Config\Site::SECURE_SERVER_COMMUNICATION) ? "https://" : "http://") . $_SERVER['HTTP_HOST'];
	}
}