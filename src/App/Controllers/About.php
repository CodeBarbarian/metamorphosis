<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;

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
    public static function indexAction() : void {
        View::renderTemplate('About/index.html');
    }
    
    /**
     * @throws \Twig\Error\SyntaxError
     * @throws \ReflectionException
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\LoaderError
     */
    public static function pluginsAction() : void {
        View::renderTemplate('About/plugins.html');
    }
    
    /**
     * @throws \Twig\Error\SyntaxError
     * @throws \ReflectionException
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\LoaderError
     */
    public static function policiesAction() : void {
        View::renderTemplate('About/policies.html');
    }
    
    /**
     * @throws \Twig\Error\SyntaxError
     * @throws \ReflectionException
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\LoaderError
     */
    public static function localizationAction() : void {
        View::renderTemplate('About/localization.html');
    }
    
    /**
     * @throws \Twig\Error\SyntaxError
     * @throws \ReflectionException
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\LoaderError
     */
    public static function configurationsAction() : void {
        View::renderTemplate('About/configurations.html');
    }
    
    /**
     * @throws \Twig\Error\SyntaxError
     * @throws \ReflectionException
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\LoaderError
     */
    public static function routingAction() : void {
        View::renderTemplate('About/routing.html');
    }
}