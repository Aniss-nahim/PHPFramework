<?php

use App\Controllers\Controller;

class HomeController extends Controller{
    public function __construct(){
         $this->userModel = $this->model('User');
    }

    public function index(){
        $users = $this->userModel->all();
        $this->view('home-view', ["users" => $users]);
    }

    public function post($id){
        echo "id  $id this is method ". __METHOD__;
    }
}