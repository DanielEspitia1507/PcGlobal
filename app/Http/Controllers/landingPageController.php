<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

class landingPageController extends Controller
{
    /* 
        Nombre Metodo:

        Objetivo:
    */
    public function index()
    {
        return view('/landing_page/home');
    }
    public function tg()
    {
        $consulta_productos = DB::table('productos')->get();
        return view('/categorias/tarjetas_graficas',['productos'=>$consulta_productos]);
    }
}
