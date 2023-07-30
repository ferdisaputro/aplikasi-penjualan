<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pembayaran>
 */
class PembayaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $tunai = ['tunai', 'edc', 'transfer'];
        return [
            'tanggal_bayar' => now(),
            'total' => mt_rand(10000, 100000),
            'tunai' => $tunai[mt_rand(0, 2)],
        ];
    }
}
