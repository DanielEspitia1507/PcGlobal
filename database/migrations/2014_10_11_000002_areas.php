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
        Schema::create('areas', function (Blueprint $table) {
            /* 
                Nombre campo: id
                Tipo: Llave Primaria

                Caracteristicas:
                    1.unsignedInteger -> Valores enteros de -2^31 a 2^31-1

                    2.Unsigned -> No acepta valores Negativos

                    3.auto_increment -> Valores Auto Incrementales
                //
            */
            $table->increments('id')->comment("Llave Primaria");

            /* Campos Personalizados*/
                $table->string("nombre",20)->unique()->comment("Nombre Area");
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('areas');
    }
};
