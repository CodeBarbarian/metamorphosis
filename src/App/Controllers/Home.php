<?php

namespace App\Controllers;

use Core\Plugins\HelloWorld\HelloWorld ;
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
		 */
		$Plugin = new HelloWorld();
		$PluginOutput = $Plugin->execute();

        View::renderTemplate('Home/index.html', Args: ['message' => HomeModel::getGreeting(), 'plugin_output' => $PluginOutput]);
    }
}
