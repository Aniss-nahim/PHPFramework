<?php 

/**
 * Routing base file application
 * All  routes should be registred here
 */
use App\Libraries\Router;
use App\Controllers\HomeController;

Router::get('/',['App\Controllers\HomeController', 'index']);

Router::get('/contact', function(){
    echo 'contact page';
});

Router::get('/about', 'home-view');

Router::post('/', [HomeController::class, 'store']);