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
use App\Http\Controllers\KaryaIlmiahMahasiswaController;
use App\Http\Controllers\KeuanganSaranaPrasaranaController;
use App\Http\Controllers\PendidikanIntegrasiKegiatanPenelitianController;
use App\Http\Controllers\PrestasiMahasiswaController;
use App\Http\Controllers\SdmDosenIndustriPraktisiController;
use App\Http\Controllers\SdmDosenTidakTetapController;
use App\Http\Controllers\SdmEkuivalenWaktuMengajarPenuhDosenTetapController;
use App\Http\Controllers\SdmKinerjaDosenKaryaIlmiahDtpsController;
use App\Http\Controllers\SdmKinerjaDosenLuaranPkmDtpsController;
use App\Http\Controllers\SdmKinerjaDosenPenelitianDtpsController;
use App\Http\Controllers\SdmKinerjaDosenPkmDtpsController;
use App\Http\Controllers\SdmKinerjaDosenPublikasiIlmiahDtpsController;
use App\Models\SdmDosenIndustriPraktisi;
use App\Models\SdmDosenTidakTetap;
use App\Models\SdmKinerjaDosenKaryaIlmiahDtps;
use App\Models\SdmKinerjaDosenPkmDtps;

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
        // Route::resource('/tata-pamong-tata-kelola-kerjasama',[TataPamongController::class, 'index']);

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

        Route::get('/profil-dosen/dosen-ewmp', [SdmEkuivalenWaktuMengajarPenuhDosenTetapController::class, 'index']);
        Route::post('/profil-dosen/dosen-ewmp', [SdmEkuivalenWaktuMengajarPenuhDosenTetapController::class, 'store']);
        Route::put('/profil-dosen/dosen-ewmp/{id}', [SdmEkuivalenWaktuMengajarPenuhDosenTetapController::class, 'update']);
        Route::get('/profil-dosen/dosen-ewmp/{id}', [SdmEkuivalenWaktuMengajarPenuhDosenTetapController::class, 'destroy']);

        Route::get('/profil-dosen/dosen-tidak-tetap', [SdmDosenTidakTetapController::class, 'index']);
        Route::post('/profil-dosen/dosen-tidak-tetap', [SdmDosenTidakTetapController::class, 'store']);
        Route::put('/profil-dosen/dosen-tidak-tetap/{id}', [SdmDosenTidakTetapController::class, 'update']);
        Route::get('/profil-dosen/dosen-tidak-tetap/{id}', [SdmDosenTidakTetapController::class, 'destroy']);

        Route::get('/kinerja-dosen', [KinerjaDosenController::class, 'index']);
        Route::post('/kinerja-dosen', [KinerjaDosenController::class, 'store']);
        Route::put('/kinerja-dosen/{id}', [KinerjaDosenController::class, 'update']);
        Route::get('/kinerja-dosen/{id}', [KinerjaDosenController::class, 'destroy']);

        Route::get('/kinerja-dosen/karya-ilmiah', [SdmKinerjaDosenKaryaIlmiahDtpsController::class, 'index']);
        Route::post('/kinerja-dosen/karya-ilmiah', [SdmKinerjaDosenKaryaIlmiahDtpsController::class, 'store']);
        Route::put('/kinerja-dosen/karya-ilmiah/{id}', [SdmKinerjaDosenKaryaIlmiahDtpsController::class, 'update']);
        Route::get('/kinerja-dosen/karya-ilmiah/{id}', [SdmKinerjaDosenKaryaIlmiahDtpsController::class, 'destroy']);

        Route::get('/kinerja-dosen/penelitian-dtps', [SdmKinerjaDosenPenelitianDtpsController::class, 'index']);
        Route::post('/kinerja-dosen/penelitian-dtps', [SdmKinerjaDosenPenelitianDtpsController::class, 'store']);
        Route::put('/kinerja-dosen/penelitian-dtps/{id}', [SdmKinerjaDosenPenelitianDtpsController::class, 'update']);
        Route::get('/kinerja-dosen/penelitian-dtps/{id}', [SdmKinerjaDosenPenelitianDtpsController::class, 'destroy']);

        Route::get('/kinerja-dosen/pkm-dtps', [SdmKinerjaDosenPkmDtpsController::class, 'index']);
        Route::post('/kinerja-dosen/pkm-dtps', [SdmKinerjaDosenPkmDtpsController::class, 'store']);
        Route::put('/kinerja-dosen/pkm-dtps/{id}', [SdmKinerjaDosenPkmDtpsController::class, 'update']);
        Route::get('/kinerja-dosen/pkm-dtps/{id}', [SdmKinerjaDosenPkmDtpsController::class, 'destroy']);

        Route::get('/kinerja-dosen/publikasi-dtps', [SdmKinerjaDosenPublikasiIlmiahDtpsController::class, 'index']);
        Route::post('/kinerja-dosen/publikasi-dtps', [SdmKinerjaDosenPublikasiIlmiahDtpsController::class, 'store']);
        Route::put('/kinerja-dosen/publikasi-dtps/{id}', [SdmKinerjaDosenPublikasiIlmiahDtpsController::class, 'update']);
        Route::get('/kinerja-dosen/publikasi-dtps/{id}', [SdmKinerjaDosenPublikasiIlmiahDtpsController::class, 'destroy']);

        Route::get('/kinerja-dosen/luaran-dtps', [SdmKinerjaDosenLuaranPkmDtpsController::class, 'index']);
        Route::post('/kinerja-dosen/luaran-dtps', [SdmKinerjaDosenLuaranPkmDtpsController::class, 'store']);
        Route::put('/kinerja-dosen/luaran-dtps/{id}', [SdmKinerjaDosenLuaranPkmDtpsController::class, 'update']);
        Route::get('/kinerja-dosen/luaran-dtps/{id}', [SdmKinerjaDosenLuaranPkmDtpsController::class, 'destroy']);

        Route::get('/keuangan-sarana-prasarana', [KeuanganSaranaPrasaranaController::class, 'index']);

        Route::get('/pendidikan', [PendidikanController::class, 'index']);
        Route::post('/pendidikan', [PendidikanController::class, 'store']);
        Route::put('/pendidikan', [PendidikanController::class, 'update']);
        Route::get('/pendidikan', [PendidikanController::class, 'destroy']);

        Route::get('/pendidikan/integrasi', [PendidikanIntegrasiKegiatanPenelitianController::class, 'index']);
        Route::post('/pendidikan/integrasi', [PendidikanIntegrasiKegiatanPenelitianController::class, 'store']);
        Route::put('/pendidikan/integrasi/{id}', [PendidikanIntegrasiKegiatanPenelitianController::class, 'update']);
        Route::get('/pendidikan/integrasi/{id}', [PendidikanIntegrasiKegiatanPenelitianController::class, 'destroy']);

        Route::get('/penelitian', [PenelitianController::class, 'index']);

        Route::get('/pkm', [PengabdianController::class, 'index']);

        Route::get('/luaran-capaian-tridharma', [LuaranController::class, 'index']);

        Route::get('/luaran-capaian-tridharma/prestasi-mahasiswa', [PrestasiMahasiswaController::class, 'index']);
        Route::post('/luaran-capaian-tridharma/prestasi-mahasiswa', [PrestasiMahasiswaController::class, 'store']);
        Route::put('/luaran-capaian-tridharma/prestasi-mahasiswa/{id}', [PrestasiMahasiswaController::class, 'index']);
        Route::get('/luaran-capaian-tridharma/prestasi-mahasiswa/{id}', [PrestasiMahasiswaController::class, 'index']);

        Route::get('/simulasi', [SimulasiController::class, 'index']);
    });

    Route::group(['middleware' => ['role:perwakilan|dekan|asesor']], function ()
    {
        Route::get('/download-excel', [TataPamongController::class, 'exportToExcel']);
        Route::get('/download-csv', [TataPamongController::class, 'exportToCSV']);
        Route::get('/download-pdf', [TataPamongController::class, 'generate']);
    });
});