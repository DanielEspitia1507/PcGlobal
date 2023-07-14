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
        Schema::create('unidades_compra', function (Blueprint $table) {
            //Llave Primaria (Integer) (-2^31 a 2^31-1)
            $table->integer('id')->primary()->comment("Llave Primaria");

            /* Campos Personalizados */
                $table->integer('id_factura')->nullable()->comment("Fk Id factura");

                $table->unsignedBigInteger("id_unidad")->unique()->nullable()->comment("Fk Id Unidad del producto");
            //

            /* Llaves Foraneas */
                $table->foreign('id_factura')->references('id')->on('facturas_venta');

                $table->foreign('id_unidad')->references('id')->on('unidades_producto');
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unidades_compra');
    }
};
