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
        Schema::create('facturas_venta', function (Blueprint $table) {
            //Llave Primaria (Integer) (-2^31 a 2^31-1)
            $table->integer('id')->primary()->comment("Llave Primaria");

            /* Campos Personalizados */
                $table->datetime("fecha_venta")->unique()->nullable()->comment("Fecha y Hora ejecucion venta");

                $table->integer('id_cliente')->nullable()->comment("Id Cliente");

                $table->string("subtotal",10)->comment("Subtotal Factura");

                $table->string("iva",10)->comment("Valor IVA");

                $table->string("total",10)->comment("Valor Total");
            //

            //Campos Create_at y Update_at
            $table->timestamps();

            /* Llaves Foraneas */
                $table->foreign("id_cliente")->references('id')->on("users");
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas_venta');
    }
};
