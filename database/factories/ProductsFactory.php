<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nama' => $this->faker->name,
            'harga' => $this->faker->randomNumber(5),
            'gambar' => $this->faker->image(public_path('images'), 640, 480, null, false),
            'status' => $this->faker->randomElement(['1', '0']),
            'stok' => $this->faker->randomNumber(2),
        ];
    }
}
