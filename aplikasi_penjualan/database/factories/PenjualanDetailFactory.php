<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\penjualan_detail>
 */
class PenjualanDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'penjualan_id' => mt_rand(0, 9),
            'produk_id' => mt_rand(0, 9),
            'kuantitas' => mt_rand(0, 10)
        ];
    }
}
