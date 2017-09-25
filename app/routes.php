<?php

/**
 * Routes
 */

$router = new Bright\Routing\Router();

//Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('sub/{controller}/{action}', ['namespace' => 'Sub']);
    
$router->dispatch();