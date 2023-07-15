<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /* Ejecucion Seeders (Ejecucion en Cascada) */
        $this->call([

            //Llenado tabla marcas
            InsercionDatosMarcas::class,

            //Llenado tabla categorias
            RegistrosCategorias::class

            
        ]);

    }
}
