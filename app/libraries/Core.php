<?php
/**
 * process the URL and call the propriate resources
 * URL FORMAT : /controller/method/params
*/

class Core {
    protected $currentController = 'Home';
    protected $currentMethod = 'index';
    protected $params = array();

    public function __construct(){
        $route = $this->getUrl();
        $this->loadController( isset($route[0]) ?  $route[0] : $this->currentController );
        unset($route[0]);
        $this->loadMethod( isset($route[1]) ?  $route[1] : $this->currentMethod );
        unset($route[1]);
        $this->loadParameters($route);
        unset($route);
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    public function getUrl(){
        if(isset($_GET['url'])){
            $url = filter_var(
                rtrim($_GET['url'], "/"), 
                FILTER_SANITIZE_URL
            );
            $urlArray = explode('/', $url);
            return $urlArray;
        }
    }

    public function loadController($controller){
        if(file_exists('../app/controllers/'.ucwords($controller).'Controller.php')){
            $this->currentController = ucwords($controller).'Controller';
            require_once '../app/controllers/'.$this->currentController.'.php';
            $controller = "App\\Controllers\\".$this->currentController;
            $this->currentController = new $controller;
        }else{
            require_once '../app/views/404.php';
            die();
        }   
    }

    public function loadMethod($method){
        if(method_exists($this->currentController, $method)){
            $this->currentMethod = $method;
        }else{
            require_once '../app/views/404.php';
            die();
        } 
    }

    public function loadParameters($route){
        $this->params = $route ? array_values($route) : array();
    }
}