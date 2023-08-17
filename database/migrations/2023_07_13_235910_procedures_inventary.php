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
            Nombre Procedimientos: Procedimientos para la consulta de productos según su categoría
            Objetivo: Seccionar las consultas mediante sus categorías
        */

        /*
            Nombre Procedimiento: PA_consulta_articulos_tg
    
            Objetivo: Hacer una consulta de los productos en dónde la categoría seleccionada es la de las tarjetas gráficas
        */
        DB::unprepared('
            CREATE PROCEDURE PA_consulta_articulos_tg()
            BEGIN
                SELECT
                    productos.id AS "id",
                    modelo AS "Nombre",
                    precio AS "Precio",
                    imagen AS "Imágen",
                    nombre AS "Marca",
                    nombre_categoria AS "Categoría"
                FROM
                    productos
                    INNER JOIN marcas ON productos.id_marca = marcas.id
                    INNER JOIN categorias ON productos.id_categoria = categorias.id

                    WHERE id_categoria = 1;
            END
        ');

        /*
            Nombre Procedimiento: PA_consulta_articulos_proc

            Objetivo: Hacer una consulta de los productos en dónde la categoría seleccionada es la de los procesadores
        */
        DB::unprepared('
            CREATE PROCEDURE PA_consulta_articulos_proc()
            BEGIN
                SELECT
                    productos.id AS "id",
                    modelo AS "Nombre",
                    precio AS "Precio",
                    imagen AS "Imágen",
                    nombre AS "Marca",
                    nombre_categoria AS "Categoría"
                FROM
                    productos
                    INNER JOIN marcas ON productos.id_marca = marcas.id
                    INNER JOIN categorias ON productos.id_categoria = categorias.id

                    WHERE id_categoria = 2;
            END
        ');
        /*
            Nombre Procedimiento: PA_consulta_articulos_almac

            Objetivo: Hacer una consulta de los productos en dónde la categoría seleccionada es la de los almacenamientos
        */
        DB::unprepared('
            CREATE PROCEDURE PA_consulta_articulos_almac()
            BEGIN
            SELECT
                productos.id AS "id",
                modelo AS "Nombre",
                precio AS "Precio",
                imagen AS "Imágen",
                nombre AS "Marca",
                nombre_categoria AS "Categoría"
            FROM
                productos
                INNER JOIN marcas ON productos.id_marca = marcas.id
                INNER JOIN categorias ON productos.id_categoria = categorias.id

                WHERE id_categoria = 3;
        END
        ');
        /*
            Nombre Procedimiento: PA_consulta_articulos_ram

            Objetivo: Hacer una consulta de los productos en dónde la categoría seleccionada es la de las ram
        */
        DB::unprepared('
            CREATE PROCEDURE PA_consulta_articulos_ram()
            BEGIN
            SELECT
                productos.id AS "id",
                modelo AS "Nombre",
                precio AS "Precio",
                imagen AS "Imágen",
                nombre AS "Marca",
                nombre_categoria AS "Categoría"
            FROM
                productos
                INNER JOIN marcas ON productos.id_marca = marcas.id
                INNER JOIN categorias ON productos.id_categoria = categorias.id

                WHERE id_categoria = 4;
        END
        ');
        /*
            Nombre Procedimiento: PA_consulta_articulos_mnt

            Objetivo: Hacer una consulta de los productos en dónde la categoría seleccionada es la de los monitores
        */

        DB::unprepared('
        CREATE PROCEDURE PA_consulta_articulos_mnt()
        BEGIN
        SELECT
            productos.id AS "id",
            modelo AS "Nombre",
            precio AS "Precio",
            imagen AS "Imágen",
            nombre AS "Marca",
            nombre_categoria AS "Categoría"
        FROM
            productos
            INNER JOIN marcas ON productos.id_marca = marcas.id
            INNER JOIN categorias ON productos.id_categoria = categorias.id

            WHERE id_categoria = 5;
        END
        ');
        /*
            Nombre Procedimiento: PA_consulta_articulos_tm

            Objetivo: Hacer una consulta de los productos en dónde la categoría seleccionada es la de las tarjetas madre
        */ 
        DB::unprepared('
        CREATE PROCEDURE PA_consulta_articulos_tm()
        BEGIN
        SELECT
            productos.id AS "id",
            modelo AS "Nombre",
            precio AS "Precio",
            imagen AS "Imágen",
            nombre AS "Marca",
            nombre_categoria AS "Categoría"
        FROM
            productos
            INNER JOIN marcas ON productos.id_marca = marcas.id
            INNER JOIN categorias ON productos.id_categoria = categorias.id

            WHERE id_categoria = 6;
        END
        ');
        /*
            Nombre Procedimiento: PA_consulta_articulos_case

            Objetivo: Hacer una consulta de los productos en dónde la categoría seleccionada es la de los cases
        */ 
        DB::unprepared('
        CREATE PROCEDURE PA_consulta_articulos_case()
        BEGIN
        SELECT
            productos.id AS "id",
            modelo AS "Nombre",
            precio AS "Precio",
            imagen AS "Imágen",
            nombre AS "Marca",
            nombre_categoria AS "Categoría"
        FROM
            productos
            INNER JOIN marcas ON productos.id_marca = marcas.id
            INNER JOIN categorias ON productos.id_categoria = categorias.id

            WHERE id_categoria = 7;
        END
        ');        
        /*
            Nombre Procedimiento: PA_consulta_articulos_perif

            Objetivo: Hacer una consulta de los productos en dónde la categoría seleccionada es la de los periféricos
        */
        DB::unprepared('
            CREATE PROCEDURE PA_consulta_articulos_perif()
            BEGIN
            SELECT
                productos.id AS "id",
                modelo AS "Nombre",
                precio AS "Precio",
                imagen AS "Imágen",
                nombre AS "Marca",
                nombre_categoria AS "Categoría"
            FROM
                productos
                INNER JOIN marcas ON productos.id_marca = marcas.id
                INNER JOIN categorias ON productos.id_categoria = categorias.id

                WHERE id_categoria = 8;
        END
        ');   
        /*
            Nombre Procedimiento: PA_consulta_articulos_fpd

            Objetivo: Hacer una consulta de los productos en dónde la categoría seleccionada es la de las fuentes de poder
        */     
        DB::unprepared('
        CREATE PROCEDURE PA_consulta_articulos_fdp()
        BEGIN
        SELECT
            productos.id AS "id",
            modelo AS "Nombre",
            precio AS "Precio",
            imagen AS "Imágen",
            nombre AS "Marca",
            nombre_categoria AS "Categoría"
        FROM
            productos
            INNER JOIN marcas ON productos.id_marca = marcas.id
            INNER JOIN categorias ON productos.id_categoria = categorias.id

            WHERE id_categoria = 9;
        END
        ');
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Borrar los procedimientos almacenados
        DB::unprepared('DROP PROCEDURE IF EXISTS PA_consulta_articulos_tg');
        DB::unprepared('DROP PROCEDURE IF EXISTS PA_consulta_articulos_proc');
        DB::unprepared('DROP PROCEDURE IF EXISTS PA_consulta_articulos_almac');
        DB::unprepared('DROP PROCEDURE IF EXISTS PA_consulta_articulos_ram');
        DB::unprepared('DROP PROCEDURE IF EXISTS PA_consulta_articulos_mnt');
        DB::unprepared('DROP PROCEDURE IF EXISTS PA_consulta_articulos_tm');
        DB::unprepared('DROP PROCEDURE IF EXISTS PA_consulta_articulos_case');
        DB::unprepared('DROP PROCEDURE IF EXISTS PA_consulta_articulos_perif');
        DB::unprepared('DROP PROCEDURE IF EXISTS PA_consulta_articulos_fdp');
    }
};
