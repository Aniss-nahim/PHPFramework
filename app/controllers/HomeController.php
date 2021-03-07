<?php

namespace App\Controllers;

use App\Libraries\Request;

class HomeController extends Controller{
    public function __construct(){
        
    }

    public function index(){
        $this->view('home-view', ['data'=> 'This is working good !']);
    }

    public function store(Request $request){
        
    }
    
}