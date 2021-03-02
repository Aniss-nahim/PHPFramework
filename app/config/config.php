<?php

require_once realpath(dirname(dirname(__DIR__)) . "/vendor/autoload.php");

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(dirname(__DIR__)));
$dotenv->load();

/**
 * Read Values from the .env file
 */
function env($key, $default = ''){
    if(isset($_ENV[$key])){
        return $_ENV[$key];
    }
    return $default;
}

/**
 * Get resources from the public folder
 */
function assets($path=''){
    if(isset($_ENV['APP_URL'])){
        return $_ENV['APP_URL'].'/public/'.$path;
    }
    return $path;
}