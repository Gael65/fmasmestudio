<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            'nombre' => 'F + M estudio',
            'descripcion' => 'Arquitectura, interiorismo y construcción. Nos dedicamos a realizar el proyecto arquitectónico de tus sueños.'
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Librettura',
            'descripcion' => 'Personalizamos tu sueño en madera. Nos dedicamos a diseñar tu imagen en vectores para imprimir en madera.'
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Concrettura',
            'descripcion' => 'Personalizamos tu sueño en concreto. Nos dedicamos a fabricar tu idea y plasmarla en un objeto hecho con concreto.'
        ]);
    }
}
