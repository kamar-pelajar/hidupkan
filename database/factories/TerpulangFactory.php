<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Terpulang>
 */
class TerpulangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_lengkap' => fake()->name(),
            'asal' => fake()->city(),
            'domisili' => fake()->city(),
            'no_ktp' => fake()->unique()->numerify('################'),
            'email' => fake()->unique()->safeEmail(),
            'no_telp' => fake()->unique()->numerify('##########'),
            'no_telp_whatsapp' => fake()->unique()->numerify('##########'),
            'tanggal_lahir' => fake()->date(),
            'tanggal_meninggal' => fake()->date(),
        ];
    }
}
