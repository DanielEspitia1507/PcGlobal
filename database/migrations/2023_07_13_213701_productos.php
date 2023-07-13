<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            //Llave Primaria (Integer) (-2^31 a 2^31-1)
            $table->integer('id')->primary()->comment("Llave Primaria");

            /* Campos Personalizados */

                //Llave Primaria (Integer) (-2^31 a 2^31-1)
                $table->integer("id_marca")->nullable()->comment("Fk Id Marca");

                $table->string("modelo",255)->unique()->nullable()->comment("Modelo del Producto");

                $table->text("descripcion")->unique()->nullable()->comment("Descripcion del Producto");

                $table->string("precio",10)->nullable()->comment("Precio unitario del producto");
            //

            //Campos Create_at y Update_at
            $table->timestamps();

            /* Llaves Foraneas */
                $table->foreign("id_marca")->references("id")->on("marcas");
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
