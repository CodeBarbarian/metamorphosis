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
     * @var string
     */
	const CORE_DIR = 'Core';

	/**
	 * System directory
     * @var string
	 */
	const SYSTEM_DIR = self::CORE_DIR . '/System';
    
    /**
     * Log directory
     * @var string
     */
    const SYSTEM_LOGS = 'logs';
    
    /**
     * Localization Directory
     * @var string
     */
    const LOCALIZATION_DIR = self::CORE_DIR . '/Localization';
    
    const PLUGIN_DIR = self::CORE_DIR . '/Plugins';
    
    /**
     * Language directory
     * @var string
     */
    const LANGUAGE_DIR = self::LOCALIZATION_DIR . '/Languages';
    
    const APPLICATION_DIR = 'App';
    
    const POLICY_DIR = self::CORE_DIR . '/Policies';
    
    const CONTROLLER_DIR = self::APPLICATION_DIR . '/Controllers';
    const MODEL_DIR = self::APPLICATION_DIR . '/Models';
    const VIEW_DIR = self::APPLICATION_DIR . '/Views';
}