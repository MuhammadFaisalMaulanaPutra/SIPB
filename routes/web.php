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

Route::get('/laporan', [PelaporanController::class, 'create']);

Route::get('/histori', [PelaporanController::class, 'index2']) ;

Route::get('/dashboard',[UserController::class,'index']);

Route::get('/dashboardhistori',[PelaporanController::class,'histori']);

Route::post('/register', [UserController::class, 'store']) ;

Route::post('/login', [LoginController::class, 'authenticate']) ;

Route::post('/logout', [LoginController::class, 'logout']) ;

Route::post('/lapor', [PelaporanController::class, 'store']) ;

Route::get('/create',[UserController::class,'show_create']);

Route::POST('/createe',[UserController::class,'create']);

Route::get ('/edituser/{id}',[UserController::class,'show_edit']);

Route::put ('/updateuser/{id}',[UserController::class,'update']);

Route::get ('/edithistori/{id}',[PelaporanController::class,'show_edit']);

Route::put ('/updatehistori/{id}',[PelaporanController::class,'update']);

Route::delete('/dashboard/delete/{id}',[UserController::class,'destroy']);

Route::delete('/dashboardhistori/delete/{id}',[PelaporanController::class,'destroy']);

// -------------------------TABEL--------------------------------

Route::get('/dashboard-table-user',[UserController::class, 'index'])->middleware('auth');

Route::get('/dashboard-table-role',[RoleController::class, 'index'])->middleware('auth');

Route::get('/dashboard-table-bencana',[BencanaController::class, 'index'])->middleware('auth');

Route::get('/dashboard-table-provinsi', [ProvinsiController::class, 'index'])->middleware('auth');

Route::get('/dashboard-table-kota', [KotaController::class, 'index'])->middleware('auth');

Route::get('/dashboard-table-kecamatan', [KecamatanController::class, 'index'])->middleware('auth');

Route::get('/dashboard-table-report', [PelaporanController::class, 'index'])->middleware('auth');

Route::get('/dashboard-table-approved', [PelaporanController::class, 'approved'])->middleware('auth');

Route::get('/dashboard-table-approved-korban-{id}', [DetailKorbanController::class, 'index'])->middleware('auth');


//===================crud========================

Route::post('/report/approve/{id}', [PelaporanController::class, 'approve'])->middleware('auth');

Route::post('/report/decline/{id}', [PelaporanController::class, 'decline'])->middleware('auth');
