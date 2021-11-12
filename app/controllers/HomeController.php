<?php

namespace App\Controllers;

use App\Libraries\Request;
use App\Libraries\Validation\Validator;

class HomeController extends Controller{
    public function __construct(){
        
    }

    /**
     * Render view for contact page
     */
    public function contact(){
        $this->view('contact-view');
    }

    /**
     * Submit contact form
     */
    public function store(Request $request){
        
    }
    
}