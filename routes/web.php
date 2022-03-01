<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::get('/', function () {
    return view('auth.login',[
        "title" => "Home"
    ]);
})->middleware('auth');

Auth::routes();
Route::group(['middleware' => 'auth:web'], function() {
    Route::get('/', function() {
        if(Auth::user()->roles->pluck('name')[0] == 'admin') {
            return redirect('/user');
        } else if(Auth::user()->roles->pluck('name')[0] == 'auditor') {
            return redirect('/audit');
        } else {
            return redirect('/dashboard');
        }
    });

    Route::group(['middleware' => ['role:admin']], function () {
        Route::get('/user', [AdminController::class, 'index']);
        Route::get('/prodi', [AdminController::class, 'prodi']);
    });
    
    Route::group(['middleware' => ['role:perwakilan']], function () {
        Route::get('/dashboard', [HomeController::class, 'index']);

        Route::get('/identitas-pengusul', [IdentitasPengusulController::class, 'index']);

        Route::get('/tata-pamong-tata-kelola-kerjasama', [TataPamongController::class, 'index']);

        Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

        Route::get('/sdm', [SdmController::class, 'index']);

        Route::get('/profil-dosen', [ProfilDosenController::class, 'index']);

        Route::get('/kinerja-dosen', [KinerjaDosenController::class, 'index']);

        Route::get('/keuangan-sarana-prasarana', [KeuanganSaranaPrasaranaController::class, 'index']);

        Route::get('/pendidikan', [PendidikanController::class, 'index']);

        Route::get('/penelitian', [PenelitianController::class, 'index']);

        Route::get('/pkm', [PengabdianController::class, 'index']);

        Route::get('/luaran-capaian-tridharma', [LuaranController::class, 'index']);

        Route::get('/matrik', [MatriksController::class, 'index']);
    });
});