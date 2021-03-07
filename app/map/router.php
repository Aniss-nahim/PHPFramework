<?php 

/**
 * Routing base file application
 * All  routes should be registred here
 */
use App\Libraries\Router;

Router::get('/', 'home-view');

Router::get('/home', 'home-view');

Router::get('/contact',['App\Controllers\HomeController', 'contact'] );

Router::get('/about', 'about-view');

Router::post('/', ['App\Controllers\HomeController', 'store']);