<?php

use App\Http\Controllers\landingPageController;
use Illuminate\Support\Facades\Route;

/*
    Nombre Archivo: web.php

    Objetivo: Este archivo contendra todas las rutas correspondientes a la landing page del sitio web
    
    Nota: Al requerir información de la BD se usara el controlador "landingPageController" para realizar dichas consultas

    Vistas disponibles:

        1. Home
        2. 

    --
*/

Route::controller(landingPageController::class)->group(function(){
    //Vista principal o Home
    Route::get('/', 'index')->name('index');
    Route::get('/categorias/tg', 'tg')->name('tarjetas_graficas');
});

Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/test', function () {
        return "hola";
    });
});