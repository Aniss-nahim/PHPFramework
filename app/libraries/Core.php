<?php
/**
 * Application core that init the process
 * 
*/
namespace App\Libraries;

use App\Libraries\Router;

class Core {

    public static $router;

    /**
     * Core constructor
     * @param Router
     */
    public function __construct(Router $router = null){
        self::$router = $router;
    }

    /**
     * Use a specific router object 
     * @param Router
     */
    public static function use(Router $router){
        self::$router = $router;
    }

    /**
     * Init the core process
     */
    public function init(){
        // resolve route
        self::$router->processRoute();
    }
}