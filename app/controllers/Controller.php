<?php
/**
 * The Main controller whiche all
 * other controllers should extends
*/

namespace App\Controllers;
use App\Libraries\App;

class Controller{

    public function model($model){
        if(file_exists('../app/models/'.$model.'.php')){
            $namespace = require_once '../app/models/'.$model.'.php';
            $model = $namespace."\\".$model;
            return new $model;
        }
    }

    public function view($view, $data = []){
        echo App::router()->render($view, $data);
    }
}