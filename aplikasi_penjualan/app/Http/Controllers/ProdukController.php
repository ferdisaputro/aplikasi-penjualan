<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\supplier;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('produk.index', [
            'produks' => produk::latest('id')->with('produkSupplier')->paginate($perPage = 10, $columns = ['*'], $pageName= 'produk'),
            'suppliers' => supplier::latest('nama')->get()
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
        $produk = $request->validate([
            'kode_produk' => 'unique:produks',
            'nama_produk' => 'required|min:3',
            'harga' => 'required',
            'stok' => 'required|numeric',
            'satuan' => 'required',
            'supplier_id' => 'required'
        ]);
        $produk = array_replace($produk, ['harga' => str_replace(',', '', $request->harga)]);
        // dd($produk);
        
        if (produk::create($produk)) {
            return back()->with('success', "$request->nama_produk Berhasil ditambahkan");
        }
        return back()->with('error', "Error saat menambahkan $request->nama_produk");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(produk $produk)
    {
        return view('produk.edit', [
            'produk' => $produk,
            'suppliers' => supplier::latest('nama')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, produk $produk)
    {
        // dd($produk->isDirty());
        $validation = [
            'nama_produk' => 'required|min:3',
            'harga' => 'required',
            'stok' => 'required|numeric',
            'satuan' => 'required',
            'supplier_id' => 'required'
        ];
        if ($request->kode_produk !== $produk->kode_produk) {
            $validation['kode_produk'] = 'required|unique:produks';
        }
        $produkUpdate = $request->validate($validation);
        $produkUpdate = array_replace($produkUpdate, ['harga' => str_replace(',', '', $request->harga)]);
        $produk->update($produkUpdate);
        if ($produk->wasChanged()) {
            return back()->with('success', "Produk telah berhasil di update");
        } else {
            return back()->with('info', "Tidak terdapat perubahan");
        }
        return back()->with('error', "Gagal dalam mengupdate produk");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(produk $produk)
    {
        if ($produk->delete()) {
            return back()->with('info', "$produk->nama_produk berhasil dihapus dari list produk");
        }
    }
}
