<?php

namespace App\Config;

use Core\Config;

/**
 * Database Config
 * @version: PHP: 8.1
 *
 * @Database
 */
class Database extends Config {
    /**
     * Database host
     * @var string
     */
    const DB_HOST = 'localhost';
    
    /**
     * Database name
     * @var string
     */
    const DB_NAME = 'metamorphosis';
    
    /**
     * Database user
     * @var string
     */
    const DB_USER = 'metamorphosis';
    
    /**
     * Database password
     * @var string
     */
    const DB_PASSWORD = 'metamorphosis';
}