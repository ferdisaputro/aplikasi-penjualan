<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $satuan = ['pcs', 'botol', 'liter', 'pak'];
        return [
            'kode_produk' => mt_rand(100, 999),
            'nama_produk' => $this->faker->word(),
            'harga' => mt_rand(1000, 100000),
            'stok' => mt_rand(1000, 100000),
            'satuan' => $satuan[mt_rand(0, 3)],
            'supplier_id' => mt_rand(0, 9)
        ];
    }
}
