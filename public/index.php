<?php

/**
 * Register The Auto Loader from Composer
 */
require __DIR__.'/../vendor/autoload.php';

$router = new Core\Router();

//Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('sub/{controller}/{action}', ['namespace' => 'Sub']);
    
$router->dispatch($_SERVER["REQUEST_URI"]);
