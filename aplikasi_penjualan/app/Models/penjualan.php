<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    /**
     * Get all of the comments for the penjualan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pelanggan()
    {
        return $this->belongsTo(pelanggan::class, "pelanggan_id", 'id');
    }

    public function penjualanDetail()
    {
        return $this->hasMany(penjualanDetail::class, 'penjualan_id', 'id');
    }
}
