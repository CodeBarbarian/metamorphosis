<?php

namespace App\Controllers;

use Core\Controller;
use Core\Plugins\TinyTemplate\TinyTemplate;
use Core\View;
use Core\Token;

/**
 * About Controller
 *
 * @version: PHP: 8.1
 *
 * @About
 */
class Development extends Controller {

    public function indexAction() : void {
        View::renderTemplate('Development/index.html');
    }

    public function cacheclearAction() : void {
        $CacheDirectory = dirname(__DIR__) . '/Cache/';
        TinyTemplate::ClearCache($CacheDirectory);
        self::redirect("/");
    }
}