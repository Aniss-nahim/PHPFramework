<?php 
/**
 * Requires all files that you need to run your app
 */
use App\Libraries\Core;
use App\Libraries\Router;

// Autoload Classes
require_once realpath("../vendor/autoload.php");

// load config
require_once 'config/config.php';

// load helpers
require_once 'helpers/helper.php';

$init =  new Core(new Router);