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
           'report' => Pelaporan::where('status','0')->orderBy('tgl_bencana', 'desc')->get(),
           'bencana' => Bencana::all(),
           'kecamatan' => Kecamatan::all(),
           'title' => 'Incoming Report'
        ]);
    }

    public function index2()
    {
        return view('userview.histori', [
           'report' => Pelaporan::where('FK_Id_user', auth()->user()->id)->get(),
           'bencana' => Bencana::all(),
           'kecamatan' => Kecamatan::all(),
           'title' => 'My Report'
        ]);
    }

    public function latestNews()
    {
        return view('userview.welcome', [
           'report' => Pelaporan::where('status','1') ->orderBy('tgl_bencana', 'desc')->limit(5)->get(),
           'bencana' => Bencana::all(),
           'kecamatan' => Kecamatan::all(),
           'title' => 'Home'
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

        return view('userview.buatlaporan', [
            'bencana' => $bencana,
            'kecamatan' => $kecamatan,
            'title' => 'buatlaporan'
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
        DB::table('pelaporan')->insert([
        'FK_Id_bencana' => $request->id_bencana,
        'FK_Id_kecamatan' => $request->id_kecamatan,
        'FK_Id_user' => $request->id_pelapor,
        'judul_laporan' => $request->judul_laporan, 
        'isi_laporan' => $request->isi_laporan,
        'tgl_bencana' => $request->tanggal,
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

    public function approve($id){
        DB::table('pelaporan')
            ->where('id', $id)
            ->update(['status' => '1']);

        return redirect('/dashboard-table-report')->with('approved','Laporan Disetujui');
    }

    public function decline($id){
        DB::table('pelaporan')
            ->where('id', $id)
            ->update(['status' => '2']);

        return redirect('/dashboard-table-report')->with('declined','Laporan Ditolak');
    }
}
