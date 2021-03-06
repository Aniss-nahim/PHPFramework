<?php
/**
 * Application core that init the process
 * 
*/
namespace App\Libraries;

use App\Libraries\Router;

class Core {

    public static $router;

    public function __construct(Router $router){
        self::$router = $router;
    }

}