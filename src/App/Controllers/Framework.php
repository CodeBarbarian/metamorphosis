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
    protected function before(): void {
        /**
         * We need to check if we are allowed to use this class
         * should be disabled in a production environment
         */
        if (!\App\Config\ControllerConfig\Framework::ALLOW_FRAMEWORK_SETTINGS) {
            $this->redirect('/home');
        }
    }
    
    public function indexAction() : void {
        View::renderTemplate('Framework/index.html');
    }
    
    public function settingsAction() : void {
    
    }
}