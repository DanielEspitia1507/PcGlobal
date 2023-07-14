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
        Schema::create('direcciones', function (Blueprint $table) {
            //Llave Primaria (Integer) (-2^31 a 2^31-1)
            $table->integer('id')->primary()->comment("Llave Primaria");

            /* Campos Personalizados */
                $table->integer('id_cliente')->nullable()->comment("Fk id Cliente");

                $table->text("direccion")->nullable()->comment("Direccion cliente");
            //

            //Campos Create_at y Update_at
            $table->timestamps();

            /* Llaves Foreanos */ 
                $table->foreign('id_cliente')->references('id')->on("users");
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direcciones');
    }
};
