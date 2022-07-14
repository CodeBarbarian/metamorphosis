<?php

namespace App\Controllers;

use Core\Plugins\HelloWorld\HelloWorld;
use Core\Controller;
use Core\View;

use App\Models\HomeModel;
use Core\System\System;


/**
 * Home controller
 * @version: PHP: 8.1
 *
 * @Home
 */
class Home extends Controller {
    
    /**
     * Show the index page
     *
     * @return void
	 * @throws \Twig\Error\LoaderError
	 * @throws \Twig\Error\RuntimeError
	 * @throws \Twig\Error\SyntaxError|\ReflectionException
	 */
    public function indexAction(): void {
		/**
		 * As an example we have a plugin named HelloWorld, which will print Hello World!
		 * I am not that happy with the plugin system, and kinda would like to redo it some time in the future.
		 * But it is a good start, and should be dynamic enough for some simple use cases.

		$Plugin = new HelloWorld();
		$PluginOutput = $Plugin->execute();
		 */
<<<<<<< HEAD
        
        View::renderTemplate('Home/index.html', Args: ['message' => HomeModel::getGreeting()]);
=======

		$SiteVersion = System::getVersion();
        View::renderTemplate('Home/index.html', Args: ['message' => HomeModel::getGreeting(), 'system_version' => $SiteVersion]);
>>>>>>> 90097999657363f1aef4a1e33166b7c7085ae23d
    }
}
