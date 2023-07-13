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
            //Llave Primaria (Integer) (-2^31 a 2^31-1)
            $table->integer('id')->primary();

            /* Campos Personalizados*/
                $table->string("nombre",20)->unique()->nullable()->comment("Nombre Area");
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
