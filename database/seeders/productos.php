<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Productos extends Seeder
{
    public function run()
    {
        // Ruta del archivo CSV. La función (database_path) devuelve la ruta absoluta a la carpeta "database" del proyecto.
        $csvFilePath = database_path('data/productos.csv');
        // Abre el archivo CSV, la 'r' indica que el archivo CSV se abrirá en modo de solo lectura.
        $file = fopen($csvFilePath, 'r');

        // Lee cada línea del archivo CSV
        while (($data = fgetcsv($file)) !== false) {
            // Omitir la primera columna vacía, iniciar desde la columna 1
            $marca = trim($data[1]);
            $categoria = trim($data[2]);
            $modelo = trim($data[3]);
            $imagen = trim($data[4]);
            $desc = trim($data[5]);
            $precio = trim($data[6]);

            // Realiza una inserción en la tabla "productos" solo si la marca no está vacía
            if (!empty($marca)) {
                DB::table('productos')->insert([
                    'id_marca' => $marca,
                    'id_categoria' => $categoria,
                    'modelo' => $modelo,
                    'imagen' => $imagen,
                    'descripcion' => $desc,
                    'precio' => $precio,
                ]);
            }
        }

        // Cierra el archivo CSV
        fclose($file);
    }
}