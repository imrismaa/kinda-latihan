<?php

namespace Database\Factories;

use App\Models\BukuModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BukuModel>
 */
class BukuModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->word(),
            'penulis' => $this->faker->name(),
            'harga' => $this->faker->numberBetween(50000, 200000),
            'tgl_terbit' => $this->faker->date($format='Y-m-d', $max='now')
        ];
    }
}
