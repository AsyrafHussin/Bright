<?php

/**
 * Routes
 */
 use Bright\Routing\Route;

// Example get method
 Route::get('/hello', function() {
  echo 'Hello world!';
}); 

// Example post method
 Route::post('/post', function() {
  echo 'Testing post';
});

// Example pass the namespace path to a controller
Route::get('/', 'App\Controllers\Home@index');
Route::get('/home/(:any)', 'App\Controllers\Home@test');

// Runs callback for the given request
Route::dispatch();




