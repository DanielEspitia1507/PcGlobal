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
    // Array asociativo para traducir el nombre de la categoría
    private $categoriasTraducidas = [
        'tg' => 'Tarjetas Gráficas',
        'proc' => 'Procesadores',
        'perif' => 'Periféricos',
        'tm' => 'Tarjetas Madre',
        'fdp' => 'Fuentes de Poder',
        'ram' => "Ram's",
        'almac' => 'Almacenamiento',
        'case' => 'Cases',
        'mnt' => 'Monitores',
        // Acá se agregan más categorías dado el caso
    ];

    /**
     * Método para obtener el nombre traducido de la categoría
     */
    private function obtenerNombreCategoria($categoria)
    {
        return $this->categoriasTraducidas[$categoria] ?? 'Categoría Desconocida';
    }

    /**
     * Método para verificar la existencia del procedimiento almacenado
     */
    private function existeProcedimientoAlmacenado($categoria)
    {
        $procedimiento = "PA_consulta_articulos_" . $categoria;
        return DB::select("SHOW PROCEDURE STATUS WHERE Db = 'pcglobal' AND Name = '{$procedimiento}'");
    }

    /**
     * Método para mostrar la vista de categoría
     */
    public function categoria($categoria)
    {
        // Verificar si el procedimiento almacenado existe para la categoría especificada
        if (!$this->existeProcedimientoAlmacenado($categoria)) {
            // Si el procedimiento almacenado no existe, redireccionamos a la vista junto con el error
            $error = "La categoría no existe.";
            return view('categorias.categoria', ['error' => $error, 'categoria' => $this->obtenerNombreCategoria($categoria)]);
        } else {
            // Llamamos al procedimiento almacenado correspondiente según la categoría
            $procedimiento = "PA_consulta_articulos_" . $categoria;
            $consulta_productos = DB::select("CALL {$procedimiento}");

            // Retornamos la vista '/categorias/categoria', pasando los productos y el nombre de la categoría traducido
            return view('categorias.categoria', ['productos' => $consulta_productos, 'categoria' => $this->obtenerNombreCategoria($categoria)]);
        }
    }
}