<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }
    public function proof(){
        return view('proof/proof');
    } 
}
