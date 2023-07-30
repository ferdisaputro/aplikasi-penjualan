<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\pelanggan;
use App\Models\pembayaran;
use App\Models\penjualan;
use App\Models\penjualanDetail;
use App\Models\produk;
use App\Models\supplier;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Pelanggan::factory(10)->create();
        pembayaran::factory(10)->create();
        penjualan::factory(10)->create();
        penjualanDetail::factory(10)->create();
        produk::factory(10)->create();
        supplier::factory(10)->create();
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
