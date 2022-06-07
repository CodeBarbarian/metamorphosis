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
		$Plugin = new HelloWorld();

        View::renderTemplate('Home/index.html', Args: ['message' => HomeModel::getGreeting(), 'plugin_output' => $Plugin->execute()]);
    }
}
