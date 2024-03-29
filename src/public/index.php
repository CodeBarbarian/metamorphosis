<?php
/**
 * Composer
 */
require dirname(__DIR__) . '/vendor/autoload.php';

use App\Application;

/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');

/**
 * Sessions
 */
session_start();

/**
 * Routing
 */
$Router = new Core\Router();

/**
 * Default Route
 */
$Router->add('{controller}/{action}');

/**
 * Add the routes for the Home Controller and the index action
 * */
$Router->add('', ['controller' => 'About', 'action' => 'index']);
$Router->add('home', ['controller' => 'About', 'action' => 'index']);

// For development use only
$Router->add('development/cache/clear', ['controller' => 'Development', 'action' => 'cacheclear']);

/**
 * Execute the dispatch to allow navigation and use the QUERY_STRING for pathing
 * */
$Router->dispatch($_SERVER['QUERY_STRING']);

