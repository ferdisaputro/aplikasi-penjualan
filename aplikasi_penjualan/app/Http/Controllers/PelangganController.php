<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pelanggan.index', [
            'pelanggans' => Pelanggan::latest('id')->paginate($perPage = 10, $columns = ['*'], $pageName = 'pelanggan'),
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
     * @param  \App\Http\Requests\StorepelangganRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $pelanggan = $request->validate([
            'nama' => 'required|min:3',
            'jenis_kelamin' => 'required',
            'telepon' => 'required|numeric|min:10',
            'alamat' => 'required|min:5',
        ]);
        
        
        if (Pelanggan::create($pelanggan)) {
            return back()->with('success', "$request->nama telah terdaftar sebagai pelanggan");
        }
        return back()->with('success', 'gagal dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function show(pelanggan $pelanggan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit(pelanggan $pelanggan)
    {
        return view('pelanggan.edit', [
            'pelanggan' => $pelanggan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepelangganRequest  $request
     * @param  \App\Models\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pelanggan $pelanggan)
    {
        // dd($request->all(), $pelanggan);
        $pelangganUpdate = $request->validate([
            'nama' => 'required|min:3',
            'jenis_kelamin' => 'required',
            'telepon' => 'required|numeric|min:10',
            'alamat' => 'required|min:5',
        ]);

        if ($pelanggan->update($pelangganUpdate)) {
            return back()->with('success', "Data berhasil diupdate");
        }
        return back()->with('error', "Data gagal diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pelanggan $pelanggan)
    {
        // dd($pelanggan);
        if ($pelanggan->delete()) {
            return back()->with('info', "$pelanggan->nama Berhasil dihapus dari data pelanggan");
        }
        return back()->with('error', 'Terjadi error dalam proses menghapus data');
    }
}
