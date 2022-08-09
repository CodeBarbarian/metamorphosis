<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;
use Core\Token;

/**
 * About Controller
 *
 * @version: PHP: 8.1
 *
 * @About
 */
class About extends Controller {
    /**
     * @throws \Twig\Error\SyntaxError
     * @throws \ReflectionException
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\LoaderError
     */
    public function indexAction() : void {
        View::renderTemplate('About/index.html');
    }
    
    /**
     * @throws \Twig\Error\SyntaxError
     * @throws \ReflectionException
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\LoaderError
     */
    public function pluginsAction() : void {
        View::renderTemplate('About/plugins.html');
    }
    
    /**
     * @throws \Twig\Error\SyntaxError
     * @throws \ReflectionException
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\LoaderError
     */
    public function policiesAction() : void {
        View::renderTemplate('About/policies.html');
    }
    
    /**
     * @throws \Twig\Error\SyntaxError
     * @throws \ReflectionException
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\LoaderError
     */
    public function localizationAction() : void {
        View::renderTemplate('About/localization.html');
    }
    
    /**
     * @throws \Twig\Error\SyntaxError
     * @throws \ReflectionException
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\LoaderError
     */
    public function configurationsAction() : void {
        View::renderTemplate('About/configurations.html');
    }
    
    /**
     * @throws \Twig\Error\SyntaxError
     * @throws \ReflectionException
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\LoaderError
     */
    public function routingAction() : void {
        View::renderTemplate('About/routing.html');
    }
}