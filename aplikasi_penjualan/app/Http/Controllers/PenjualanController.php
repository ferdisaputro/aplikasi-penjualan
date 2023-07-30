<?php

namespace App\Http\Controllers;

use App\Models\penjualan;
use App\Models\produk;
use App\Models\penjualanDetail;
use App\Models\pelanggan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('penjualan.index', [
            'produks' => produk::get(),
            'pelanggans' => pelanggan::get(),
            'penjualans' => penjualan::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $penjualan = penjualan::create(["pelanggan_id" => $request->id, 'keterangan' => $request->keterangan]);
        if ($penjualan) {
            foreach ($request->produk as $produk) {
                if (!$produk['kode_produk']) {
                    continue;
                }
                $produkId = explode('|', $produk['kode_produk'])[0];
                $hargaSatuan = explode('|', $produk['kode_produk'])[1];
                $jumlah = $hargaSatuan * $produk['kuantitas'];
                penjualanDetail::create(['penjualan_id' => $penjualan->id, 'produk_id' => $produkId, 'kuantitas' => $produk['kuantitas'],'total' => $jumlah]);
            }
            if ($penjualan->update(['total' => $penjualan->penjualanDetail->sum('total')])) {
                return back()->with('success', 'Data penjualan berhasil di buat');
            }
        }
        return back()->with('error', 'Terjadi error');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function show(penjualan $penjualan)
    {
        return view('penjualan.penjualan', [
            'penjualan' => $penjualan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit(penjualan $penjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, penjualan $penjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy(penjualan $penjualan)
    {
        if ($penjualan->penjualanDetail) {
            foreach ($penjualan->penjualanDetail as $penjualanDetail) {
                $penjualanDetail->delete();
            }
        }
        if ($penjualan->delete()) {
            return back()->with('success', "Penjualan dengan id $penjualanDetail->id berhasil dihapus");
        }
        return back()->with('error', "Gagal menghapus data dengan id penjualan $penjualanDetail->id");
    }
}
