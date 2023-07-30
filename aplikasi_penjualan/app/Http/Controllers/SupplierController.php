<?php

namespace App\Http\Controllers;

use App\Models\supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('supplier.index', [
            'suppliers' => supplier::latest('id')->paginate($perPage = 10, $column = ['*'], $pageName = 'supplier')
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
        $credentials = $request->validate([
            'nama' => 'required|min:3',
            'telepon' => 'required|numeric|min:8',
            'alamat' => 'required',
        ]);

        if (supplier::create($credentials)) {
            return back()->with('success', "$request->nama Berhasil di tambahkan");
        }
        return back()->with('error', "Terjadi error pada saat proses input $request->nama");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(supplier $supplier)
    {
        return view('supplier.edit', [
            'supplier' => $supplier,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, supplier $supplier)
    {
        $credentials = $request->validate([
            'nama' => 'required|min:3',
            'telepon' => 'required|numeric|min:8',
            'alamat' => 'required',
        ]);
        $supplier->update($credentials);
        if ($supplier->wasChanged()) {
            return redirect('/supplier')->with('success', 'Data berhasil diupdate');
        } else {
            return back()->with('info', 'Tidak ada perubahan data');
        }
        return back()->with('error', 'Terjadi error saat proses update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(supplier $supplier)
    {
        if ($supplier->delete()) {
            return back()->with('success', "$supplier->nama Berhasil dihapus dari list supplier");
        }
        return back()->with('error', "Terjadi error saat proses penghapusan data");
    }
}
