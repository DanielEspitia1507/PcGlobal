<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        /*
            Nombre Procedimiento: PA_consulta_articulos
    
            Objetivo: XXX-XXX
        */
        DB::unprepared('
            CREATE PROCEDURE PA_consulta_articulos()
            BEGIN
                SELECT
                    productos.id AS "id",
                    modelo AS "Nombre",
                    precio AS "Precio",
                    imagen AS "Imágen",
                    nombre AS "Marca",
                    nombre_categoria AS "Categoría",
                    unidades_producto.id AS "Cantidad"
                FROM
                    productos
                    INNER JOIN marcas ON productos.id_marca = marcas.id
                    INNER JOIN categorias ON productos.id_categoria = categorias.id
                    INNER JOIN unidades_producto ON productos.id = unidades_producto.id_producto;
            END
        ');
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Borrar el procedimiento PA_consultar_articulos
        DB::unprepared('DROP PROCEDURE IF EXISTS PA_consulta_articulos');
    }
};
