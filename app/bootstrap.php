<?php 
/**
 * Requires all files that you need to run your app
 */

// load config
require_once 'config/config.php';

// load helpers
require_once 'helpers/helper.php';

// base controller
require_once 'controllers/Controller.php';

require_once 'models/Model.php';

//load libraries
spl_autoload_register(function($className){
    if(file_exists('../app/libraries/'.$className.'.php')){
        require_once 'libraries/'.$className.'.php';
    }
});
