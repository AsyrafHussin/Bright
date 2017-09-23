<?php

// Require the controller class
require $_SERVER['DOCUMENT_ROOT'].'/app/Controllers/Posts.php';

/**
 * Routing
 */
require $_SERVER['DOCUMENT_ROOT'].'/core/Router.php';

$router = new Router();

// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
    
$router->dispatch($_SERVER["REQUEST_URI"]);
