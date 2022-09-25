<?php

namespace Database\Factories;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        return [
            //
            'nombre' => $this->faker->sentence(2),
            'descripcion' => $this->faker->sentence(20),
            'precio' => $this->faker->numberBetween(100,2000),
            //'cover_img' => $this->faker::name(),
        ];
    }
}
