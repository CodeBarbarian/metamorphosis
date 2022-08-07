<?php
namespace App\Controllers;

use App\Models\FrameworkModel;
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
        $Controllers = FrameworkModel::getFrameworkInformation('controllers');
        $Models = FrameworkModel::getFrameworkInformation('models');
        $Plugins = FrameworkModel::getFrameworkInformation('plugins');
        $Policies = FrameworkModel::getFrameworkInformation('policies');
        $Localizations = FrameworkModel::getFrameworkInformation('localization');
        
        View::renderTemplate('Framework/index.html', [
            'controllers' => $Controllers,
            'models' => $Models,
            'plugins' => $Plugins,
            'policies' => $Policies,
            'localizations' => $Localizations
            ]);
    }
    
    public function controllerAction() : void {
        View::renderTemplate('Framework/controllers.html');
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