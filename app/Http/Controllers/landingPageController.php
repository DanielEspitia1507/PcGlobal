<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class landingPageController extends Controller
{
    
    public function index(){
        $list = DB::select('CALL PA_consulta_articulos');
        return view('/landing_page/home',['lista'=>$list]);
    }
    public function proof(){
        return view('proof/proof');
    } 
}
