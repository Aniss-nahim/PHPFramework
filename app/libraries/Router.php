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
    protected static $routes = [];

    /**
     * Request Object with current request Inforamtions
     * @param Request
     */
    protected $request;

    public function __construct(){
        $this->request = new Request;
    }

    /**
     * Resolve a request
     */
    public function processRoute(){
        $path = $this->request->path;
        $method = $this->request->method;
        $callback = self::$routes[$method][$path] ?? false;
        
        if($callback === false){
            App::respondWith(404);
            echo $this->render('errors/404');
            die();
        }

        if(is_string($callback)){
            echo $this->render($callback);
            return;
        }
        
        if(is_array($callback)){
            $controller = $callback[0];
            $callback[0] = new $controller;
        }

        return call_user_func($callback, $this->request);
    }

    /**
     * Render view HTML
     * @param srting
     */
    public function render($view, $params = []){
        $appLayout = $this->cacheLayout('app-view');
        $viewContent = $this->cacheLayout($view, $params);
        return str_replace('{{content}}', $viewContent, $appLayout);
    }

    /**
     * Cache a view content
     */
    private function cacheLayout($view, $params = []){
        foreach($params as $key => $value){
            $$key = $value;
        }
        ob_start();
        include_once App::$rootApp."/views/$view.php";
        return ob_get_clean();
    }

    /**
     * Register a GET route
     * @param String
     * @param Closure | string | Array
     * @return void
     */
    public static function get($path, $callback){
        self::$routes['get'][$path] = $callback;
    }

    /**
     * Register a POST route
     * @param String
     * @param Closure | string | Array
     * @return void
     */
    public static function post($path, $callback){
        self::$routes['post'][$path] = $callback;
    }
}