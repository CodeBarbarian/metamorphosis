<?php

namespace App\Models;

use Core\Model;

/**
 * Framework Model Class
 *
 * @version: PHP: 8.1
 *
 * @FrameworkModel
 */
class FrameworkModel extends Model {
    /**
     * Following methods are under development:
     * - Overview of Controllers
     * - Overview of Models
     * - Overview of Plugins
     * - Overview of Policies
     * - Overview of Files
     * - Overview of Localization
     * - Overview of Helpers
     * - Overview of Configurations
     * - Overview of Objects Set in Scope (Live Stack Trace)
     */
    private static function getContents(string $Pattern, bool $DIRONLY = false, bool $BASEONLY = false): array {
        $Directories = array();
        
        if ($DIRONLY) {
            foreach(glob($Pattern, GLOB_ONLYDIR) as $Directory) {
                $Directories[] = basename($Directory);
            }
        } else {
            foreach(glob($Pattern) as $Directory) {
                $Directories[] = basename($Directory);
            }
        }
        
        return $Directories;
    }
    
    private static function getControllers() : array {
        return static::getContents('../'.\App\Config\Paths::CONTROLLER_DIR.'/*');
    }
    
    private static function getModels() : array {
        return static::getContents('../'.\App\Config\Paths::MODEL_DIR.'/*');
    }
    
    private static function getPlugins() : array {
        return static::getContents('../'.\App\Config\Paths::PLUGIN_DIR.'/*');
    }
    
    private static function getPolicies() : array {
        return static::getContents('../'.\App\Config\Paths::POLICY_DIR.'/*');
    }
    
    private static function getLocalizations() : array {
        return static::getContents('../'.\App\Config\Paths::LOCALIZATION_DIR.'/Languages/*');
    }
    
    public static function getFrameworkInformation(string $Selector) {
        switch ($Selector) {
            case 'controllers':
                return static::getControllers();
                break;
            case 'models':
                return static::getModels();
                break;
            case 'plugins':
                return static::getPlugins();
                break;
            case 'policies':
                return static::getPolicies();
                break;
            case 'localization':
                return static::getLocalizations();
                break;
        }
    }
}