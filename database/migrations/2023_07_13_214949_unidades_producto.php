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
        Schema::create('unidades_producto', function (Blueprint $table) {
            //Llave Primaria (Unsigned Big Integer) (-2^63 a 2^63-1)
            $table->id()->comment("Llave Primaria");

            /* Campos Personalizados */
                $table->integer("id_producto")->nullable()->comment("Fk Id producto");

                $table->string("serial",255)->unique()->nullable()->comment("Serial Unidad del producto");

                $table->integer('id_factura')->nullable()->comment('Id factura de compra del producto');
            //

            //Campos Create_at y Update_at
            $table->timestamps();

            /* Llaves Foraneas */
                $table->foreign("id_producto")->references("id")->on("productos");

                $table->foreign('id_factura')->references("id")->on('facturas_compra');
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unidades_producto');
    }
};
