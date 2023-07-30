<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\penjualan;

class penjualanDetail extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function penjualanDetailPenjualan()
    {
        return $this->belongsTo(penjualan::class, 'penjualan_id', 'id');
    }
    public function penjualanDetailProduk()
    {
        return $this->belongsTo(produk::class, 'produk_id', 'id');
    }
}
