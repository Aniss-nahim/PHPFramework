<?php

/**
 * Application singleton class
 */
namespace App\Libraries;

class App{
    /**
     * Application root path
     * @param string
     */
    public static $rootApp ;

    /**
     * Application core
     * @param Core
     */
    private static $core;

    /**
     * Application response object for handling client responses
     * @param Response
     */
    public $response;

    /**
     * Application holder
     * @param App
     */
    public static $application;

    /**
     * Application constructor
     * @param string
     * @param Router
     */
    private function __construct(string $root, Router $router = null){
        self::$rootApp = $root;
        self::$core = new Core($router);
        $this->response = new Response;
    }

    /**
     * singleton class getter
     * @param string
     * @param Router
     */
    public static function create(string $root, Router $router = null){
        if(!isset(self::$application)){
            self::$application = new App($root, $router);
        }
        return self::$application;
    }

    /**
     * Use a specific router object 
     * @param Router
     */
    public static function use(Router $router){
        self::$core->use($router);
    }

    /**
     * Start the application
     */
    public function start(){
        self::$core->init();
    }

    /**
     * Response code setter
     */
    public static function respondWith(int $code){
        self::$application->response->setStatus($code);
    }
}