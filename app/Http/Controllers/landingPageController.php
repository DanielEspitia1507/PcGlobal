<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

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
    public function categoria($categoria)
    {
        // Esta variable lmacena el nombre traducido de la categoría
        $nombreCategoria = '';
    
        // Utilizamos un switch para traducir el nombre de la categoría en función del valor recibido
        switch ($categoria) {
            case 'tg':
                $nombreCategoria = 'Tarjetas Gráficas';
                break;
            case 'proc':
                $nombreCategoria = 'Procesadores';
                break;
            case 'perif':
                $nombreCategoria = 'Periféricos';
                break;
            case 'tm':
                $nombreCategoria = 'Tarjetas Madre';
                break;
            case 'fdp':
                $nombreCategoria = 'Fuentes de Poder';
                break;
            case 'ram':
                $nombreCategoria = "Ram's";
                break;
            case 'almac':
                $nombreCategoria = 'Almacenamiento';
                break;
            case 'case':
                $nombreCategoria = 'Cases';
                break;
            case 'mnt':
                $nombreCategoria = 'Monitores';
                break;
            /*case 'otra_categoria':
                $nombreCategoria = 'Nombre de Otra Categoría';
                break; */
                // Por si se agregan nuevas categorías
            default:
                // Si la categoría no coincide con ninguna opción, se asigna un nombre predeterminado
                $nombreCategoria = 'Categoría Desconocida';
                break;
        }

        // Verificar si el procedimiento almacenado existe para la categoría especificada
        $procedimiento = "PA_consulta_articulos_" . $categoria;
        if (!DB::select("SHOW PROCEDURE STATUS WHERE Db = 'pcglobal' AND Name = '{$procedimiento}'")) {
            // Si el procedimiento almacenado no existe, redireccionamos a la vista junto con el error
            $error = "La categoría no existe.";
            return view('categorias.categoria', ['error' => $error , 'categoria' => $nombreCategoria]);
        } else {
            // Llamamos al procedimiento almacenado correspondiente según la categoría
            $consulta_productos = DB::select("CALL {$procedimiento}");

            // Retornamos la vista '/categorias/categoria', pasando los productos y el nombre de la categoría traducido
            return view('categorias.categoria', ['productos' => $consulta_productos, 'categoria' => $nombreCategoria]);
        }
    }
}