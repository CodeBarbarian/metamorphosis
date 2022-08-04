<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;

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
	    View::renderTemplate('Home/index.html', Args: ["framework_version" => System::getVersion()]);
    }
    
    /**
     * Show the Plugins page
     *
     * @throws \Twig\Error\SyntaxError
     * @throws \ReflectionException
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\LoaderError
     */
    public function pluginsAction(): void {
        View::renderTemplate('Home/plugins.html');
    }
    
    /**
     * Show the policies page
     *
     * @throws \Twig\Error\SyntaxError
     * @throws \ReflectionException
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\LoaderError
     */
    public function policiesAction(): void {
        View::renderTemplate('Home/policies.html');
    }
    
    /**
     * Show the localization page
     *
     * @throws \Twig\Error\SyntaxError
     * @throws \ReflectionException
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\LoaderError
     */
    public function localizationAction(): void {
        View::renderTemplate('Home/localization.html');
    }
    
    /**
     * Show the configurations page
     *
     * @throws \Twig\Error\SyntaxError
     * @throws \ReflectionException
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\LoaderError
     */
    public function configurationsAction(): void {
        View::renderTemplate('Home/configurations.html');
    }
    
    /**
     * Show the routing page
     *
     * @throws \Twig\Error\SyntaxError
     * @throws \ReflectionException
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\LoaderError
     */
    public function routingAction(): void {
        View::renderTemplate('Home/routing.html');
    }
}
