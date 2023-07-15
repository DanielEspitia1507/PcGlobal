<?php

namespace App\Http\Controllers;

class authController extends Controller
{
    public function registerView(){
        return view("auth.register");
    }
}
