<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CombinerSeeder extends Seeder
{
    public function run()
    {
        // Llama a las dos seeders para que las ejecute en un solo llamado
        $this->call(InsercionDatosMarcas::class);
        $this->call(RegistrosCategorias::class);
    }
}