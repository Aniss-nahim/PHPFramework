<?php 
/**
 * Requires all files that you need to run your app
 */
use App\Libraries\App;
use App\Libraries\Router;

// Autoload Classes
require_once realpath("../vendor/autoload.php");

// load config
require_once 'config/config.php';

// load helpers
require_once 'helpers/helper.php';

//Reister routes
require_once 'map/router.php';

$app = App::create(ROOT_APP);
$router = new Router;

$app->use($router);

$app->start();
