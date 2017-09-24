<?php

/**
 * Twig Template Engine
 */
// require_once dirname(__DIR__) . '/vendor/Twig/lib/Twig/Autoloader.php';

/**
 * Autoload
 */
spl_autoload_register(function($class){
   $root = dirname(__DIR__); // get the parent directory
   $file = $root . '/' . str_replace('\\', '/', $class) . '.php';
   if(is_readable($file)){
        require $file;
   } 
});

$router = new Core\Router();

//Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('sub/{controller}/{action}', ['namespace' => 'Sub']);
    
$router->dispatch($_SERVER["REQUEST_URI"]);
