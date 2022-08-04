<?php
namespace App\Controllers;

use Core\Controller;
use Core\View;

/**
 * Framework Controller
 *
 * @version: PHP: 8.1
 *
 * @Framework
 */
class Framework extends Controller {
    /**
     * @return void
     */
    protected function before(): void {
        /**
         * We need to check if we are allowed to use this class
         * should be disabled in a production environment
         */
        if (!\App\Config\ControllerConfig\Framework::ALLOW_FRAMEWORK_SETTINGS) {
            $this->redirect('/home');
        }
    }
    
    /**
     * @return void
     * @throws \ReflectionException
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function indexAction() : void {
        View::renderTemplate('Framework/index.html');
    }
    
    /**
     * @throws \Twig\Error\SyntaxError
     * @throws \ReflectionException
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\LoaderError
     */
    public function settingsAction() : void {
        View::renderTemplate('Framework/settings.html');
    }
}