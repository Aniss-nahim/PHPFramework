<?php

define('ROOT_APP', dirname(__DIR__));

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