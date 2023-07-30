<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\penjualan>
 */
class PenjualanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'keterangan' => $this->faker->paragraph(),
            'pelanggan_id' => mt_rand(0, 9),
            'total' => mt_rand(10000, 100000)
        ];
    }
}
