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
