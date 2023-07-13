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
        Schema::create('estados', function (Blueprint $table) {
            //Llave Primaria (Integer) (-2^31 a 2^31-1)
            $table->integer('id')->primary();

            /* Campos Personalziados */
                $table->string("nombre",20)->unique()->nullable()->comment("Nombre Estado");

                $table->integer("id_area")->nullable()->comment("Id Area");
            //

            /* Llaves Foraneas */
                $table->foreign("id_area")->references('id')->on('areas');
            //

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estados');
    }
};
