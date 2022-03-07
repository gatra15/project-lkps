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
use App\Http\Controllers\SdmDosenIndustriPraktisiController;
use App\Http\Controllers\SdmDosenTidakTetapController;
use App\Http\Controllers\SdmEkuivalenWaktuMengajarPenuhDosenTetapController;
use App\Models\SdmDosenIndustriPraktisi;
use App\Models\SdmDosenTidakTetap;

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
        Route::post('/identitas-pengusul', [IdentitasPengusulController::class, 'store']);

        Route::get('/tata-pamong-tata-kelola-kerjasama', [TataPamongController::class, 'index']);
        Route::post('/tata-pamong-tata-kelola-kerjasama', [TataPamongController::class, 'store']);
        Route::put('/tata-pamong-tata-kelola-kerjasama/{id}', [TataPamongController::class, 'update']);
        Route::get('/tata-pamong-tata-kelola-kerjasama/{id}', [TataPamongController::class, 'destroy']);

        Route::get('/mahasiswa', [TabMahasiswaController::class, 'index']);
        Route::post('/mahasiswa', [TabMahasiswaController::class, 'store']);
        Route::put('/mahasiswa/{id}', [TabMahasiswaController::class, 'update']);
        Route::get('/mahasiswa/{id}', [TabMahasiswaController::class, 'destroy']);

        Route::get('/sdm', [SdmController::class, 'index']);

        Route::get('/profil-dosen', [ProfilDosenController::class, 'index']);
        Route::post('/profil-dosen', [ProfilDosenController::class, 'store']);
        Route::put('/profil-dosen/{id}', [ProfilDosenController::class, 'update']);
        Route::get('/profil-dosen/{id}', [ProfilDosenController::class, 'destroy']);

        Route::get('/profil-dosen/pembimbing-ta', [SdmDosenPembimbingTaController::class, 'index']);
        Route::post('/profil-dosen/pembimbing-ta', [SdmDosenPembimbingTaController::class, 'store']);
        Route::put('/profil-dosen/pembimbing-ta/{id}', [SdmDosenPembimbingTaController::class, 'update']);
        Route::get('/profil-dosen/pembimbing-ta/{id}', [SdmDosenPembimbingTaController::class, 'destroy']);

        Route::get('/profil-dosen/ewmp', [SdmEkuivalenWaktuMengajarPenuhDosenTetapController::class, 'index']);
        Route::post('/profil-dosen/ewmp', [SdmEkuivalenWaktuMengajarPenuhDosenTetapController::class, 'store']);
        Route::put('/profil-dosen/ewmp/{id}', [SdmEkuivalenWaktuMengajarPenuhDosenTetapController::class, 'update']);
        Route::get('/profil-dosen/ewmp/{id}', [SdmEkuivalenWaktuMengajarPenuhDosenTetapController::class, 'destroy']);

        Route::get('/profil-dosen/dosen-tidak-tetap', [SdmDosenTidakTetapController::class, 'index']);
        Route::post('/profil-dosen/dosen-tidak-tetap', [SdmDosenTidakTetapController::class, 'store']);
        Route::put('/profil-dosen/dosen-tidak-tetap/{id}', [SdmDosenTidakTetapController::class, 'update']);
        Route::get('/profil-dosen/dosen-tidak-tetap/{id}', [SdmDosenTidakTetapController::class, 'destroy']);

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