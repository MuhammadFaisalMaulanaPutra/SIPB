<?php

namespace App\Http\Controllers;

use App\Models\Bencana;
use App\Models\DetailKorban;
use App\Models\Pelaporan;
use Illuminate\Http\Request;

class DetailKorbanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view('dashboardview.table-korban', [
            'victim' => DetailKorban::where('FK_Id_laporan', $id)->get(),
            'bencana' => Pelaporan::find($id)->judul_laporan,
            'title' => 'Korban'
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
     * @param  \App\Models\DetailKorban  $detailKorban
     * @return \Illuminate\Http\Response
     */
    public function show(DetailKorban $detailKorban)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailKorban  $detailKorban
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailKorban $detailKorban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetailKorban  $detailKorban
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailKorban $detailKorban)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailKorban  $detailKorban
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailKorban $detailKorban)
    {
        //
    }
}
