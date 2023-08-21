<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\productos;

class ProductoController extends Controller
{
    public function show($categoriaSlug, $productoSlug){
        // Buscar la categoría por su slug
        $categoria = Categoria::where('slug', $categoriaSlug)->firstOrFail();

        // Buscar el producto en la categoría por su slug
        $producto = $categoria->productos()->where('slug', $productoSlug)->firstOrFail();

        return view('productos.producto',compact('categoria', 'producto'));
    }
}
