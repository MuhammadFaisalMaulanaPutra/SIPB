<?php

namespace App\Http\Controllers;

use App\Models\Bencana;
use App\Models\Kategori_Bencana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BencanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboardview.table-bencana', [
            'bencana' => Bencana::with('kategori_bencana')->get(),
            'title' => 'Bencana'
         ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboardview.create.bencana', [
            'category'    => Kategori_Bencana::all(),
            'title'     => 'Bencana'
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
            'id_katben'    => 'required',
            'nama_bencana' => 'required'
        ]);

        DB::table('bencana')->insert([
            'FK_ID_kategori_bencana'    => $validatedData['id_katben'],
            'nama_bencana'            => $validatedData['nama_bencana']
        ]);

        $request->session()->flash('success','Bencana Berhasil Ditambahkan');

        return redirect('/dashboard-table-bencana');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bencana  $bencana
     * @return \Illuminate\Http\Response
     */
    public function show(Bencana $bencana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bencana  $bencana
     * @return \Illuminate\Http\Response
     */
    public function edit($id){

        return view('dashboardview.edit.bencana', [
            'bencana'      => Bencana::find($id),
            'category'     => Kategori_Bencana::all(),
            'title'        => 'Bencana'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kota  $kota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'id_katben'    => 'required',
            'nama_bencana' => 'required'
        ]);

        DB::table('bencana')->where('id',$request->id)->update([
            'FK_ID_kategori_bencana'    => $validatedData['id_katben'],
            'nama_bencana'            => $validatedData['nama_bencana']
        ]);

        $request->session()->flash('update','Bencana Berhasil DiPerbarui');

        return redirect('/dashboard-table-bencana');
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
