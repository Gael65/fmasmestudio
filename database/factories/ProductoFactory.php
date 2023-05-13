<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categoria = Categoria::all()->random();
        return [
            'nombre' => fake()->name(),
            'concepto' => Str::random(10),
            'descripcion' => Str::random(25),
            'categoria_id' => $categoria->id,
            'precio' => 99.99
        ];
    }
}
