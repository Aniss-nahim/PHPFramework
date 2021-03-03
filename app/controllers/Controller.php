<?php
/**
 * The Main controller whiche all
 * other controllers should extends
*/

namespace App\Controllers;

class Controller{

    public function model($model){
        if(file_exists('../app/models/'.$model.'.php')){
            require_once '../app/models/'.$model.'.php';
            $model = "App\\Models\\".$model;
            return new $model;
        }
    }

    public function view($view, $data = []){
        if(file_exists('../app/views/'.$view.'.php')){
            foreach($data as $key => $value){
                $$key = $value;
            }
            require_once '../app/views/'.$view.'.php';
        }
    }
    
}