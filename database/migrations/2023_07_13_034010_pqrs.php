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
        Schema::create('pqrs', function (Blueprint $table) {
            //Llave Primaria (Unsigned Big Integer) (-2^63 a 2^63-1)
            $table->id()->comment("Llave Primaria");

            /* Campos Personalizados */
                $table->integer('id_cliente')->nullable()->comment("Id Cliente");

                $table->integer("id_trabajador")->nullable()->comment("Id Trabajador");

                $table->integer("id_estado")->nullable()->comment("Id estado PQRS");

                $table->string("descripcion",255)->unique()->nullable()->comment("Descripcion de la PQRS");

                $table->string("respuesta",255)->nullable()->comment("Respuesta del Trabajador a la PQRS");
            //

            //Campos Create_at y Update_at
            $table->timestamps();

            /* Llaves Foraneas*/

                $table->foreign("id_cliente")->references("id")->on("users");

                $table->foreign("id_trabajador")->references("id")->on("users");

                $table->foreign("id_estado")->references("id")->on("estados");
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pqrs');
    }
};
