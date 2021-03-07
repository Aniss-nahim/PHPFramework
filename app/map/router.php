<?php 

/**
 * Routing base file application
 * All  routes should be registred here
 */
use App\Libraries\Router;

Router::get('/', 'home-view');

Router::get('/home', 'home-view');

Router::get('/about', 'about-view');

Router::get('/contact',['App\Controllers\HomeController', 'contact'] );

Router::post('/contact', ['App\Controllers\HomeController', 'store']);