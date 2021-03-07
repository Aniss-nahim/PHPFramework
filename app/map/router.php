<?php 

/**
 * Routing base file application
 * All  routes should be registred here
 */
use App\Libraries\Router;

Router::get('/','home-view');

Router::get('/contact', function(){
    echo 'contact page';
});

Router::post('/', function (){
    echo 'This is post method';
});