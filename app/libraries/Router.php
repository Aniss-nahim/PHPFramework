<?php
/**
 * Router engine class, register routes and there assoicative callbacks
 * @author Aniss Nahim
 * @license MIT
 */
namespace App\Libraries;

class Router{

    /**
     * Routes Map
     */
    protected $routes = [];

    /**
     * Register a GET route
     * @param String
     * @param Closur
     * @return void
     */
    public function get($path, Closur $callback){
        $routes['get'][$path] = $callback;
    }

    /**
     * Register a POST route
     * @param String
     * @param Closur
     * @return void
     */
    public function post($path, Closur $callback){
        $routes['post'][$path] = $callback;
    }
}