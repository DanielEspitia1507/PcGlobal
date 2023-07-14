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
        $results = DB::select('CALL PA_consulta_articulos');
        $perPage = 20;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $collection = collect($results);
        $currentPageResults = $collection->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $list = new LengthAwarePaginator($currentPageResults, count($collection), $perPage, $currentPage);
        $numeroPaginas = $list->lastPage();

        return view('/landing_page/home', ['lista' => $list, 'numeroPaginas' => $numeroPaginas]);
    }
}
