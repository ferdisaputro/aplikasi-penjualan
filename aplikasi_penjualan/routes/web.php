<?php

use App\Models\produk;
use App\Models\supplier;
use App\Models\pelanggan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PenjualanDetailController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $page = 5;
    return view('index', [
        'produks' => produk::latest('id')->with('produkSupplier')->paginate($perPage = $page, $columns = ['*'], $pageName= 'produk'),
        'suppliers' => supplier::latest('nama')->get(),
        'pelanggans' => pelanggan::latest('id')->paginate($perPage = $page, $columns = ['*'], $pageName = 'pelanggan'),
        'suppliers' => supplier::latest('id')->paginate($perPage = $page, $column = ['*'], $pageName = 'supplier')
    ]);
});



Route::resource('/pelanggan', PelangganController::class);

Route::resource('/produk', ProdukController::class);

Route::resource('/penjualan', PenjualanController::class);

Route::resource('/penjualanDetail', PenjualanDetailController::class);

Route::resource('/supplier', SupplierController::class);