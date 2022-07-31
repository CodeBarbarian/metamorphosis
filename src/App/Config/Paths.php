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
	 * Get HTTP HOST, with correct SSL settings
	 *
	 * @return string
	 */
	public static function SITE_ROOT() : string {
		return ((Site::SECURE_SERVER_COMMUNICATION) ? "https://" : "http://") . $_SERVER['HTTP_HOST'];
	}
    
    /**
     * Core directory
     */
	const CORE_DIR = 'Core';

	/**
	 * System directory
	 */
	const SYSTEM_DIR = self::CORE_DIR . '/System';
    
    /**
     * Log directory
     */
    const SYSTEM_LOGS = 'logs';
}