<?php

namespace App;

use Core\Router;

class Application {

    public static $Router = null;
    public static function initialize() {
        self::$Router = new Router();
    }
}