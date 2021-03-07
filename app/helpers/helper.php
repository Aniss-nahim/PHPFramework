<?php
/**
 * help.php define a set of usefull functions
 * to help you develope faster and easaly
 */

/**
 * Get resources from the public folder
 */
function assets($path=''){
    if(isset($_ENV['APP_URL'])){
        return $_ENV['APP_URL'].'/'.$path;
    }
    return $path;
}

/**
 * Yeild view inside a view
 */
function yeild($view){
    if(file_exists('../app/views/'.$view.'-view.php')){
        require '../app/views/'.$view.'-view.php';
    }
}