<?php

namespace App\Http\Controllers;

use App\Models\penjualanDetail;
use Illuminate\Http\Request;

class PenjualanDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('penjualanDetail.index', [
            'penjualanDetails' => penjualanDetail::latest('id')->paginate($perPage = 5, $column = ['*'], $pageName = 'penjualanDetail')
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\penjualanDetail  $penjualanDetail
     * @return \Illuminate\Http\Response
     */
    public function show(penjualanDetail $penjualanDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\penjualanDetail  $penjualanDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(penjualanDetail $penjualanDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\penjualanDetail  $penjualanDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, penjualanDetail $penjualanDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\penjualanDetail  $penjualanDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(penjualanDetail $penjualanDetail)
    {
        
    }
}
