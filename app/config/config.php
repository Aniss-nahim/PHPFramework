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