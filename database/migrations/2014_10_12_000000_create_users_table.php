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
        Schema::create('users', function (Blueprint $table) {
            //Llave Primaria (Unsigned Big Integer) (-2^63 a 2^63-1)
            $table->id()->comment("Llave Primaria");

            /* Campos Personalizados */
                $table->string('nombres',30)->nullable()->comment("Nombres");

                $table->string('apellidos',30)->nullable()->comment("Apellidos");

                $table->integer('id_sexo')->nullable()->comment("Id Sexo");

                $table->integer("id_tip_doc")->nullable()->comment("Id tipo documento");

                $table->string("num_doc",15)->unique()->nullable()->comment("Numero de Documento");

                $table->string("num_tel",10)->unique()->nullable()->comment("Numero Telefonico");

                $table->date("fecha_nacimiento")->nullable()->comment("Fecha de Nacimiento");

                $table->string("direccion",255)->comment("Direccion de Vivienda");

                $table->string('email',255)->unique()->nullable()->comment("Correo Electronico");

                $table->string('password',255)->unique()->nullable()->comment("Contraseña Hasheada");

                $table->timestamp('email_verified_at')->nullable()->comment("Fecha y Hora validacion de correo electronico");

                $table->rememberToken()->comment("Token 'recuerdame'");

                $table->integer('id_estado')->nullable()->comment("Id estado cuenta");
            //

            //Campos Create_at y Update_at
            $table->timestamps();

            /* Llaves Foraneas */
                $table->foreign('id_sexo')->references('id')->on("sexos");

                $table->foreign('id_tip_doc')->references('id')->on("tipos_documento");

                $table->foreign('id_estado')->references('id')->on('estados');
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
