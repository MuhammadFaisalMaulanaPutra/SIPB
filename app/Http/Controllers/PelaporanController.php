<?php

namespace App\Http\Controllers;


use App\Models\Bencana;
use App\Models\Kecamatan;
use App\Models\Pelaporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
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
           'title' => 'Incoming Report',
           'counter' => 1
        ]);
    }

    public function index2()
    {
        return view('userview.histori', [
           'report' => Pelaporan::where('FK_Id_user', auth()->user()->id)->orderBy('tgl_bencana', 'desc')->get(),
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
            'report' => Pelaporan::where('status','1')->orderBy('tgl_bencana', 'desc')->get(),
            'title' => 'Approved Report',
            'counter' => 1
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
            'title' => 'Laporkan'
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
        
        //return $request->file('image')->store('post-image');

        $validatedData = $request->validate([
            'id_bencana'    => 'required',
            'id_kecamatan'  => 'required',
            'id_pelapor'    => 'required',
            'judul_laporan' => 'required',
            'isi_laporan'   => 'required',
            'tanggal'       => 'required',
            'waktu'         => 'required',
            'image'         => 'image|file|max:1024',
        ]);
// -------------------------Picture--------------------------------

        // $img = $validatedData['image'];
        // $fileName = $img->getClientOriginalName();
        // $img = str_replace('data:image/png;base64','', $img);

        // $img = base64_decode($img);

        // Storage::disk('public')-> put($fileName, $img);

// -----------------------------------------------------------------
$file = $request->file('image');
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $file->move($target_dir,$file->getClientOriginalName());
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
          $check = getimagesize($_FILES["image"]["tmp_name"]);
          if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
          } else {
            echo "File is not an image.";
            $uploadOk = 0;
          }
        };

// -------------------------create--------------------------------
        DB::table('pelaporan')->insert([
        'FK_Id_bencana'     => $validatedData['id_bencana'],
        'FK_Id_kecamatan'   => $validatedData['id_kecamatan'],
        'FK_Id_user'        => $validatedData['id_pelapor'],
        'judul_laporan'     => $validatedData['judul_laporan'], 
        'isi_laporan'       => $validatedData['isi_laporan'],
        'tgl_bencana'       => $validatedData['tanggal'],
        'waktu_bencana'     => $validatedData['waktu'],
        'status'            => 0,
        
        //  'image'             => $fileName,
        'image'             => basename($_FILES["image"]["name"]),
        
        ]);
        
    
    return redirect('/histori');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelaporan  $pelaporan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboardview.show-detail', [
            'report'=> Pelaporan::find($id),
            'title' => 'Detail'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelaporan  $pelaporan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bencana = Bencana::all();
        $kecamatan = Kecamatan::all();

        return view('userview.editlaporan', [
            'report' => Pelaporan::find($id),
            'bencana' => $bencana,
            'kecamatan' => $kecamatan,
            'title' => $id,
            'image' => $_FILES,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelaporan  $pelaporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'id_bencana'    => 'required',
            'id_kecamatan'  => 'required',
            'id_pelapor'    => 'required',
            'judul_laporan' => 'required',
            'isi_laporan'   => 'required',
            'tanggal'       => 'required',
            'waktu'         => 'required',
            'image'         => 'image|file|max:1024',
        ]);






        $file = $request->file('image');
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $file->move($target_dir,$file->getClientOriginalName());
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
          $check = getimagesize($_FILES["image"]["tmp_name"]);
          if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
          } else {
            echo "File is not an image.";
            $uploadOk = 0;
          }
        };

// -------------------------update--------------------------------
        DB::table('pelaporan')->where('id',$request->id)->update([
            'FK_Id_bencana'     => $validatedData['id_bencana'],
            'FK_Id_kecamatan'   => $validatedData['id_kecamatan'],
            'FK_Id_user'        => $validatedData['id_pelapor'],
            'judul_laporan'     => $validatedData['judul_laporan'], 
            'isi_laporan'       => $validatedData['isi_laporan'],
            'tgl_bencana'       => $validatedData['tanggal'],
            'waktu_bencana'     => $validatedData['waktu'],
            'status'            => 0,
            'image'             => basename($_FILES["image"]["name"]),
        ]);
        return redirect('/histori');
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

        return redirect('/histori');
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

    public function unapprove($id){
        DB::table('pelaporan')
            ->where('id', $id)
            ->update(['status' => '0']);

        return redirect('/dashboard-table-approved')->with('unapprove','Laporan Batal Disetujui');
    }
}
