<?php

namespace App\Controllers;

class HomeController extends Controller{
    public function __construct(){
        
    }

    public function index(){
        $this->view('home-view', ['data'=> 'This is working good !']);
    }

    public function store(){
        echo  'this is the post method !';
    }
    
}