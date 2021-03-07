<?php
/**
 * Request handler class
 * URL FORMAT : /controller/method/params $_GET['url']
 */
namespace App\Libraries;

use App\Libraries\Validation\Sanitizer;

class Request{

    /**
     * Requested uri
     * @param string
     */
    public $uri;

    /**
     * Request method
     * @param string
     */
    public $method;

    /**
     * Requested uri path
     * @param string
     */
    public $path;

    /**
     * Uri array parameters
     * @param string
     */
    public $params = array();
    
    public function __construct(){
        $this->uri = Sanitizer::sanitizeUrl($_SERVER['REQUEST_URI']) ?? '/';
        $this->setMethod();
        $this->setPath();
        $this->setParams();
    }

    /**
     * Set the requested path
     */
    public function setPath(){
        $this->path = parse_url($this->uri, PHP_URL_PATH);
    }

    /**
     * set the request method
     */
    public function setMethod(){
        $this->method = strtolower($_SERVER['REQUEST_METHOD']);
    }

    /**
     * Set Get paramaters
     */
    public function setParams(){
        if($this->method === 'get'){
            foreach($_GET as $key => $value){
                $key = Sanitizer::sanitizeString($key);
                if(filter_has_var(INPUT_GET, $key) && !empty($key)){
                    $this->params[$key] = Sanitizer::sanitizeSpecialChars($value);
                }
            }
        }

        if($this->method === 'post'){
            foreach($_POST as $key => $value){
                $key = Sanitizer::sanitizeString($key);
                if(filter_has_var(INPUT_POST, $key) && !empty($key)){
                    $this->params[$key] = Sanitizer::sanitizeSpecialChars($value);
                }
            }
        }
    }
    
}