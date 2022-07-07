<?php

namespace App\Controllers;

use Core\Plugins\HelloWorld\HelloWorld;
use Core\Controller;
use Core\View;

use App\Models\HomeModel;

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


        View::renderTemplate('Home/index.html', Args: ['message' => HomeModel::getGreeting()]);
    }
}
