<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\supplier;

class produk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function produkSupplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }
}
