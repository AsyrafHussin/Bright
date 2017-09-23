<?php

/**
 * Routing
 */
require '../core/Router.php';

$router = new Router();

// Add routes
$router->add('',[
            'controller' => 'Home',
            'action'     => 'index'
        ]);

// Match the requested route
$url = $_SERVER["REQUEST_URI"];

if($router->match($url)){
    echo '<pre>';
            var_dump($router->getParams());
    echo '</pre>';
}else{
    echo "No route found for URL '$url'";
}
