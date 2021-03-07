<?php
/**
 * Request handler class
 * URL FORMAT : /controller/method/params $_GET['url']
 */
namespace App\Libraries;

class Request{

    public $uri;
    public $method;
    public $path;
    public $params = array();
    
    public function __construct(){
        $this->uri = $_SERVER['REQUEST_URI'] ?? '/';
        $this->getMethod();
        $this->getPath();
        $this->getParams();
    }

    public function getPath(){
        $this->path = parse_url($this->uri, PHP_URL_PATH);
    }

    public function getMethod(){
        $this->method = strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function getParams(){
        $arrayStringParams =  explode("&", parse_url($this->uri, PHP_URL_QUERY));
        if(empty($arrayStringParams)){
            foreach($arrayStringParams as $variable){
                $var = explode("=", $variable);
                $this->params[$var[0]] = $var[1];
            }
        }
    }
    
}