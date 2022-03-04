<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SdmController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LuaranController;
use App\Http\Controllers\SimulasiController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PenelitianController;
use App\Http\Controllers\PengabdianController;
use App\Http\Controllers\TataPamongController;
use App\Http\Controllers\ProfilDosenController;
use App\Http\Controllers\KinerjaDosenController;
use App\Http\Controllers\TabMahasiswaController;
use App\Http\Controllers\IdentitasPengusulController;
use App\Http\Controllers\KeuanganSaranaPrasaranaController;

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
        Route::post('/tata-pamong-tata-kelola-kerjasama', [TataPamongController::class, 'store']);
        Route::put('/tata-pamong-tata-kelola-kerjasama/{id}', [TataPamongController::class, 'update']);
        Route::get('/tata-pamong-tata-kelola-kerjasama/{id}', [TataPamongController::class, 'destroy']);

        Route::get('/mahasiswa', [TabMahasiswaController::class, 'index']);
        Route::post('/mahasiswa/add', [TabMahasiswaController::class, 'store']);
        Route::get('/mahasiswa/edit/{id}', [TabMahasiswaController::class, 'edit']);
        Route::post('/mahasiswa/edit', [TabMahasiswaController::class, 'update']);
        Route::get('/mahasiswa/delete/{id}', [TabMahasiswaController::class, 'destroy']);

        Route::get('/sdm', [SdmController::class, 'index']);

        Route::get('/profil-dosen', [ProfilDosenController::class, 'index']);

        Route::get('/kinerja-dosen', [KinerjaDosenController::class, 'index']);

        Route::get('/keuangan-sarana-prasarana', [KeuanganSaranaPrasaranaController::class, 'index']);

        Route::get('/pendidikan', [PendidikanController::class, 'index']);

        Route::get('/penelitian', [PenelitianController::class, 'index']);

        Route::get('/pkm', [PengabdianController::class, 'index']);

        Route::get('/luaran-capaian-tridharma', [LuaranController::class, 'index']);

        Route::get('/simulasi', [SimulasiController::class, 'index']);
    });

    Route::group(['middleware' => ['role:perwakilan|dekan|asesor']], function ()
    {
        Route::get('/download-excel', [TataPamongController::class, 'exportToExcel']);
        Route::get('/download-csv', [TataPamongController::class, 'exportToCSV']);
    });
});