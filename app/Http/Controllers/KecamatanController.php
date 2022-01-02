<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboardview.table-kecamatan', [
            'district' => Kecamatan::with(['kota.provinsi'])->get(),
            'title' => 'Kecamatan'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboardview.create.kecamatan', [
            'city'      => Kota::all(),
            'title'     => 'Kota'
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
            'id_kota'   => 'required',
            'nama_kec'     => 'required'
        ]);

        DB::table('kecamatan')->insert([
            'FK_ID_KOTA'   => $validatedData['id_kota'],
            'nama_kecamatan'     => $validatedData['nama_kec']
        ]);

        $request->session()->flash('success','Kecamatan Berhasil Ditambahkan');

        return redirect('/dashboard-table-kecamatan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kecamatan $kecamatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboardview.edit.kecamatan',[
            'district'  => Kecamatan::find($id),
            'city'      => Kota::all(),
            'title'     => 'Kecamatan'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kecamatan $kecamatan)
    {
        $validatedData = $request->validate([
            'id_kota'       => 'required',
            'nama_kec'      => 'required'
        ]);

        DB::table('kecamatan')->where('id',$request->id)->update([
            'FK_ID_KOTA'        => $validatedData['id_kota'],
            'nama_kecamatan'    => $validatedData['nama_kec']
        ]);

        $request->session()->flash('updateDist','Kecamatan Berhasil Diperbarui');

        return redirect('/dashboard-table-kecamatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //
    }
}
