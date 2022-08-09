<?php

namespace App\Config\ControllerConfig;
use Core\Config;

/**
 * Framework Config
 * @version: PHP: 8.1
 *
 * @Framework
 */
class Framework extends Config {
    
    /**
     * Framework settings. Good during development, bad during
     * production.
	 *
	 * @var bool
     */
    const ALLOW_FRAMEWORK_SETTINGS = true;
}
