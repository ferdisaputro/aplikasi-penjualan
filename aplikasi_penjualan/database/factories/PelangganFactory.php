<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pelanggan>
 */
class PelangganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender = ['pria', 'wanita'];
        return [
            'nama' => $this->faker->name(),
            'jenis_kelamin' => $gender[mt_rand(0, 1)],
            'telepon' => '081231512351',
            'alamat' => $this->faker->address(),
        ];
    }
}
