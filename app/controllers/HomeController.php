<?php

use App\Controllers\Controller;

class HomeController extends Controller{
    public function __construct(){
         
    }

    public function index(){
        $this->view('home-view', ["name" => "Aniss", "id" => 1]);
    }

    public function post($id){
        echo "id  $id this is method ". __METHOD__;
    }
}