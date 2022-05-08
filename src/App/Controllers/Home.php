<?php

namespace App\Controllers;

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
	 * @throws \Twig\Error\SyntaxError
     */
    public function indexAction(): void {
        View::renderTemplate('Home/index.html', Args: ['message' => HomeModel::getGreeting()]);
    }
}
