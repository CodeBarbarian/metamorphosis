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

    public function indexAction() : void {
        View::renderTemplate('About/index.html');
    }

    public function pluginsAction() : void {
        View::renderTemplate('About/plugins.html');
    }

    public function policiesAction() : void {
        View::renderTemplate('About/policies.html');
    }

    public function localizationAction() : void {
        View::renderTemplate('About/localization.html');
    }

    public function configurationsAction() : void {
        View::renderTemplate('About/configurations.html');
    }
    public function routingAction() : void {
        View::renderTemplate('About/routing.html');
    }
}