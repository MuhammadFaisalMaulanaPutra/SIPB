<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Provinsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboardview.table-kota', [
            'city' => Kota::with('provinsi')->get(),
            'title' => 'Kota'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboardview.create.kota',[
            'province'  => Provinsi::all(),
            'title'     => 'Kota',
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
            'id_provinsi'   => 'required',
            'nama_kota'     => 'required'
        ]);

        DB::table('kota')->insert([
            'FK_ID_PROVINSI'   => $validatedData['id_provinsi'],
            'nama_kota'     => $validatedData['nama_kota']
        ]);

        $request->session()->flash('success','Kota Berhasil Ditambahkan');

        return redirect('/dashboard-table-kota');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function show(Kota $kota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboardview.edit.kota',[
            'city'      => Kota::find($id),
            'province'  => Provinsi::all(),
            'title'     => 'Kota'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kota $kota)
    {
        $validatedData = $request->validate([
            'id_provinsi'   => 'required',
            'nama_kota'     => 'required'
        ]);

        DB::table('kota')->where('id',$request->id)->update([
            'FK_ID_PROVINSI'   => $validatedData['id_provinsi'],
            'nama_kota'     => $validatedData['nama_kota']
        ]);

        $request->session()->flash('update','Kota Berhasil Diperbarui');

        return redirect('/dashboard-table-kota');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //
    }
}
