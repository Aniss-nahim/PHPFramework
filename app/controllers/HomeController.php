<?php

namespace App\Controllers;

use App\Controllers\Controller;

class HomeController extends Controller{
    public function __construct(){
        // load models
    }

    public function index(){
        $this->view('home-view');
    }
    
}

return __NAMESPACE__;