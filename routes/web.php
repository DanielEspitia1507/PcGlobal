<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\landingPageController;
use Illuminate\Support\Facades\Route;

/*
    Nombre Archivo: web.php

    Manifiesto:

        Landing Page:
            1. Home
            2. Categorias
        --

        Auth:
            1. Registro
            2. Ruta de redireccion
            3. Login (Ruta proporcionada por Fortify)
        --

    --
*/

/*
    Nota: La landing page al requerir informacion actualizada de la base de datos, se emplea un controlador el cual realizara dichos procesos
*/
    Route::controller(landingPageController::class)->group(function(){
        //Vista: Home
        Route::get('/', 'index')->name('index');

        //Vista: Categorias
        Route::get('/categorias/tg', 'tg')->name('tarjetas_graficas');
    });
//

//Rutas de Autenticacion para usuarios que no hayan iniciado sesion (guest)
    Route::middleware(['guest'])->group(function () {

        //Consultar/Solicitar vista de registro de clientes
        Route::get('/register', [authController::class,'registerView'])->name('registerView');

        //Enviar datos del formulario de registro al controlador correspondiente
        Route::post('/resgister', [authController::class,'clientRegister'])->name("clientRegister");
    });
//

//Rutas accesibles unicamente por usuarios logueados (auth)
    Route::middleware(['auth'])->group(function () {

        //Ruta encargada de realizar la redireccion al dashboard segun el rol del usuario
        Route::get('/redirect',[authController::class,'redirect']);
    });
//
