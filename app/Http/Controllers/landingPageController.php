<?php

namespace App\Http\Controllers;

class landingPageController extends Controller
{
    
    public function index(){
        return view('landing_page.home');
    }
     
}
