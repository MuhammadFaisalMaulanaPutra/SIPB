<?php

namespace App\Http\Controllers;

use App\Models\Bencana;
use App\Models\Pelaporan;
use App\Models\Provinsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('dashboardview.table-provinsi', [
            'province' => Provinsi::all(),
            'title' => 'Provinsi'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboardview.create.provinsi',[
            'title' => 'Provinsi',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_provinsi' => 'required|max:50',
        ]);

        DB::table('provinsi')->insert([
            'nama_provinsi' => $validatedData['nama_provinsi'],
        ]);

        $request->session()->flash('success','Provinsi Berhasil Ditambahkan');

        return redirect('/dashboard-table-provinsi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function show(Provinsi $provinsi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboardview.edit.provinsi',[
            'title' => 'Provinsi',
            'province' => Provinsi::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provinsi $provinsi)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        Provinsi::find($id)->delete();

        $request->session()->flash('deleteProv','Data Provinsi Berhasil Di Hapus');

        return redirect('/dashboard-table-provinsi');
    }
}