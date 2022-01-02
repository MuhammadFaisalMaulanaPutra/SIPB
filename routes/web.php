<?php

use App\Http\Controllers\BencanaController;
use App\Http\Controllers\DetailKorbanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeConrtoller;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\PelaporanController;
use App\Http\Controllers\Table_UserController;
use App\Http\Controllers\UserController;
use App\Models\Pelaporan;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\RoleController;
use Database\Factories\provinsiFactory;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//ROUTES DASAR
Route::get('/', [PelaporanController::class, 'latestNews']);

Route::get('/about', function () {
    return view('userview.about',[
        'report' => Pelaporan::where('status','1') ->orderBy('tgl_bencana', 'desc')->limit(3)->get(),
        'title' => 'About'
    ]);
});

Route::get('/login', function () {
    return view('userview.login', [
        'title' => 'Login'
    ]);
})->name('login');

Route::get('/daftar', function () {
    return view('userview.daftar',[
        'title' => 'Sign Up'
    ]);
});

Route::get('/artikel', function () {
    return view('userview.artikel', [
        'title' => 'Bencana'
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/createuser', function () {
    return view('createuser');
});


// -------------------------Login--------------------------------

Route::post('/login', [LoginController::class, 'authenticate']) ;

Route::post('/logout', [LoginController::class, 'logout']) ;

// -------------------------User--------------------------------
Route::post('/register', [UserController::class, 'store']) ;

Route::POST('/createe',[UserController::class,'create']);

Route::put ('/updateuser/{id}',[UserController::class,'update']);

// -------------------------Pelaporan--------------------------------
Route::get('/histori', [PelaporanController::class, 'index2']) ;

Route::get('/dashboardhistori',[PelaporanController::class,'histori']);

Route::post('/lapor', [PelaporanController::class, 'store']) ;

Route::get('/laporan', [PelaporanController::class, 'create']);

Route::get ('/histori-{id}',[PelaporanController::class,'edit']);

Route::put ('/edithistori/{id}',[PelaporanController::class,'update']);

// -------------------------TABEL--------------------------------

Route::get('/dashboard-table-user',[UserController::class, 'index'])->middleware('admin');

Route::get('/dashboard-table-role',[RoleController::class, 'index'])->middleware('admin');

Route::get('/dashboard-table-bencana',[BencanaController::class, 'index'])->middleware('admin');

Route::get('/dashboard-table-provinsi', [ProvinsiController::class, 'index'])->middleware('admin');

Route::get('/dashboard-table-kota', [KotaController::class, 'index'])->middleware('admin');

Route::get('/dashboard-table-kecamatan', [KecamatanController::class, 'index'])->middleware('admin');

Route::get('/dashboard-table-report', [PelaporanController::class, 'index'])->middleware('petugas');

Route::get('/dashboard-table-approved', [PelaporanController::class, 'approved'])->middleware('petugas');

Route::get('/dashboard-table-approved-korban-{id}', [DetailKorbanController::class, 'index'])->middleware('petugas');

Route::get('/dashboard-table-user-with-role-{id}',[UserController::class, 'show'])->middleware('admin');

Route::get('/dashboard-table-report-detail-{id}', [PelaporanController::class, 'show'])->middleware('petugas');

//===================crud========================


Route::post('/report/approve/{id}', [PelaporanController::class, 'approve'])->middleware('petugas');

Route::post('/report/decline/{id}', [PelaporanController::class, 'decline'])->middleware('petugas');

Route::post('/report/unapprove/{id}', [PelaporanController::class, 'unapprove'])->middleware('petugas');

Route::delete('/histori/delete/{id}', [PelaporanController::class, 'destroy'])->middleware('auth');



//===================Store=======================
Route::post('/create-provinsi',         [ProvinsiController::class, 'store'])   ->middleware('admin');
Route::post('/create-kota',             [KotaController::class, 'store'])       ->middleware('admin');
Route::post('/create-kecamatan',        [KecamatanController::class, 'store'])  ->middleware('admin');
Route::post('/create-bencana',          [BencanaController::class, 'store'])    ->middleware('admin');
Route::post('/create-role',             [RoleController::class, 'store'])       ->middleware('admin');
//===================Update======================
Route::put('/edit-provinsi-{id}',       [ProvinsiController::class, 'update'])  ->middleware('admin');
Route::put('/edit-kota-{id}',           [KotaController::class, 'update'])      ->middleware('admin');
Route::put('/edit-kecamatan-{id}',      [KecamatanController::class, 'update']) ->middleware('admin');
Route::put('/edit-bencana-{id}',        [BencanaController::class, 'update'])   ->middleware('admin');
Route::put('/edit-role-{id}',           [RoleController::class, 'update'])      ->middleware('admin');
Route::put('/edit-userrole-{id}',       [UserController::class, 'updaterole'])  ->middleware('admin');
//===================Destroy=====================
Route::delete('dashboard-table-provinsi-{id}', [ProvinsiController::class, 'destroy'])->middleware('admin');
//===================Create======================
Route::get('/form-create-provinsi',     [ProvinsiController::class, 'create'])  ->middleware('admin');
Route::get('/form-create-kota',         [KotaController::class, 'create'])      ->middleware('admin');
Route::get('/form-create-kecamatan',    [KecamatanController::class, 'create']) ->middleware('admin');
Route::get('/form-create-bencana',      [BencanaController::class, 'create'])   ->middleware('admin');
Route::get('/form-create-role',         [RoleController::class, 'create'])      ->middleware('admin');
//===================Edit========================
Route::get('/form-edit-provinsi-{id}',  [ProvinsiController::class, 'edit'])    ->middleware('admin');
Route::get('/form-edit-kota-{id}',      [KotaController::class, 'edit'])        ->middleware('admin');
Route::get('/form-edit-kecamatan-{id}', [KecamatanController::class, 'edit'])   ->middleware('admin');
Route::get('/form-edit-bencana-{id}',   [BencanaController::class, 'edit'])     ->middleware('admin');
Route::get('/form-edit-role-{id}',      [RoleController::class, 'edit'])        ->middleware('admin');
Route::get('/form-edit-userrole-{id}',  [UserController::class, 'editrole'])    ->middleware('admin');
