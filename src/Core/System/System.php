<?php

namespace Core\System;

class System {
    /**
     * Get the framework version from the version.dat file
     * @todo: test function properly.
     * @return string|bool
     */
    public static function getVersion() : string|bool {
        if (file_exists('./version.dat') && is_readable('./version.dat')) {
            $File = fopen('./version.dat', 'r');
            $Version = fgets($File);
            fclose($File);
            
            return $Version;
        }
        return false;
    }
}