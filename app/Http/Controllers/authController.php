<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function registerView(){
        return view("auth.register");
    }

    /*
        Nombre Metodo: redirect

        Objetivo: Validar el rol del usuario y realizar su respectiva redirección al dashboard correspondiente
    */
    public function redirect(){

        //Obtener toda la información del usuario autenticado
        $info_usuario=User::find(Auth::user()->id);

        //Obtener todos los roles que tenga el usuario y seleccionar el primero
        $rol=$info_usuario->getRoleNames()[0];

        /*
            Explicación: Según el rol recuperado, se realizará la respectiva redirección a su dashboard correspondiente

            Nota: A causa de que el personal administrativo empleara siempre el mismo dashboard, se agrupan sus case, para que evitar repetir codigo innecesario
        */
        switch($rol){
            case "gerente":

            break;

            case "coordinador_inventario":

            break;

            case "analista_inventario":

            break;

            case "servicio_cliente":

            break;

            case "cliente":
                return redirect()->route("clients.dashboard");
            break;
        }

    }
}
