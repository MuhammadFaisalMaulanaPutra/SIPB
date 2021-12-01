<?php

namespace App\Http\Controllers;


use App\Models\Bencana;
use App\Models\Kecamatan;
use App\Models\Pelaporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class PelaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboardview.table-pelaporan', [
           'report' => Pelaporan::where('status','0')->get(),
           'title' => 'Incoming Report'
        ]);
    }

    public function approved()
    {
        return view('dashboardview.table-pelaporan-disetujui', [
            'report' => Pelaporan::where('status','1')->get(),
            'title' => 'Approved Report'
         ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bencana = Bencana::all();
        $kecamatan = Kecamatan::all();

        return view('userview.welcome', [
            'bencana' => $bencana,
            'kecamatan' => $kecamatan,
            'title' => 'Home'
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
        DB::table('pelaporans')->insert([
        'FK_id_bencana' => $request->id_bencana,
        'FK_id_user' => $request->id_bencana,
        'judul_laporan' => $request->judul_laporan, 
        'isi_laporan' => $request->isi_laporan,
        'FK_id_kecamatan' => $request->id_bencana,
        'waktu_bencana' => $request ->waktu,
        'status' => 0,
        ]);
        
        return redirect('/histori');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelaporan  $pelaporan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelaporan $pelaporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelaporan  $pelaporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelaporan $pelaporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelaporan  $pelaporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelaporan $pelaporan)
    {
        DB::table('pelaporan')->where('id',$request->id)->update([
            'FK_id_bencana' => $request->id_bencana,
            'FK_id_user' => $request->id_bencana,
            'judul_laporan' => $request->judul_laporan, 
            'isi_laporan' => $request->isi_laporan,
            'FK_id_kecamatan' => $request->id_bencana,
            'waktu_bencana' => $request ->waktu,
            'status' => 0,
            ]);
            return redirect('/dashboardhistori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelaporan  $pelaporan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelaporan = Pelaporan::find($id);
        $pelaporan->delete();

        return redirect('/dashboardhistori');
    }
    public function show_edit($id){
        // dd(User::findOrFail($id));
        return view ( 'edithistori', [
            'pelaporan'=> Pelaporan::findOrFail($id)
            // 'user'=> User::where('id',$id)->get()
            
        ]);
    
    }
}
