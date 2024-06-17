<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cerita>
 */
class CeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'terpulang_id' => fake()->numberBetween(1,10),
            'penulis_id' => fake()->numberBetween(1,10),
            'isi_cerita' => fake()->paragraph(),
            'kenal_darimana' => fake()->sentence(),
        ];
    }
}
