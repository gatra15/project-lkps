<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SdmController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CapaianPembelajaranController;
use App\Http\Controllers\EfektifitasProduktifitasPendidikanController;
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
use App\Http\Controllers\KepuasanPenggunaController;
use App\Http\Controllers\KesesuaianBidangKerjaController;
use App\Http\Controllers\KeuanganSaranaPrasaranaController;
use App\Http\Controllers\KinerjaLulusanController;
use App\Http\Controllers\MahasiswaAsingController;
use App\Http\Controllers\PendidikanIntegrasiKegiatanPenelitianController;
use App\Http\Controllers\PendidikanKepuasanMahasiswaController;
use App\Http\Controllers\PendidikanKurikulumController;
use App\Http\Controllers\PrestasiMahasiswaController;
use App\Http\Controllers\PrestasiNonAkademikMahasiswaController;
use App\Http\Controllers\SdmDosenIndustriPraktisiController;
use App\Http\Controllers\SdmDosenPembimbingTaController;
use App\Http\Controllers\SdmDosenTidakTetapController;
use App\Http\Controllers\SdmEkuivalenWaktuMengajarPenuhDosenTetapController;
use App\Http\Controllers\SdmKinerjaDosenKaryaIlmiahDtpsController;
use App\Http\Controllers\SdmKinerjaDosenLuaranPkmDtpsController;
use App\Http\Controllers\SdmKinerjaDosenPenelitianDtpsController;
use App\Http\Controllers\SdmKinerjaDosenPkmDtpsController;
use App\Http\Controllers\SdmKinerjaDosenPublikasiIlmiahDtpsController;
use App\Http\Controllers\TimPenyusunController;
use App\Http\Controllers\WaktuTungguLulusanController;
use App\Models\KepuasanPengguna;
use App\Models\MahasiswaAsing;
use App\Models\PendidikanKurikulum;
use App\Models\SdmDosenIndustriPraktisi;
use App\Models\SdmDosenTidakTetap;
use App\Models\SdmKinerjaDosenKaryaIlmiahDtps;
use App\Models\SdmKinerjaDosenPkmDtps;
use App\Models\SdmKinerjaDosenPublikasiIlmiahDtps;

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

        // Route to Identitas Pengusul
        Route::get('/identitas-pengusul', [IdentitasPengusulController::class, 'index']);
        Route::post('/identitas-pengusul', [IdentitasPengusulController::class, 'store']);
        Route::get('/identitas-pengusul/{id}', [IdentitasPengusulController::class, 'show']);

        Route::get('/identitas-pengusul/tim-penyusun', [TimPenyusunController::class, 'index']);
        Route::post('/identitas-pengusul/tim-penyusun', [TimPenyusunController::class, 'store']);
        Route::put('/identitas-pengusul/tim-penyusun/{id}', [TimPenyusunController::class, 'update']);
        Route::post('/identitas-pengusul/tim-penyusun/{id}', [TimPenyusunController::class, 'delete']);
        // End Route Identitas Pengusul

        // Route to Tata Pamong
        Route::get('/tata-pamong-tata-kelola-kerjasama', [TataPamongController::class, 'index']);
        Route::post('/tata-pamong-tata-kelola-kerjasama', [TataPamongController::class, 'store']);
        Route::put('/tata-pamong-tata-kelola-kerjasama/{id}', [TataPamongController::class, 'update']);
        Route::get('/tata-pamong-tata-kelola-kerjasama/{id}', [TataPamongController::class, 'destroy']);
        // End Tata Pamong

        // Route to Mahasiswa
        Route::get('/mahasiswa', [TabMahasiswaController::class, 'index']);
        Route::post('/mahasiswa', [TabMahasiswaController::class, 'store']);
        Route::put('/mahasiswa/{id}', [TabMahasiswaController::class, 'update']);
        Route::post('/mahasiswa/delete/{id}', [TabMahasiswaController::class, 'destroy']);

        Route::get('/mahasiswa/mahasiswa-asing', [MahasiswaAsingController::class, 'index']);
        Route::post('/mahasiswa/mahasiswa-asing', [MahasiswaAsingController::class, 'store']);
        Route::put('/mahasiswa/mahasiswa-asing/{id}', [MahasiswaAsingController::class, 'update']);
        Route::get('/mahasiswa/mahasiswa-asing/{id}', [MahasiswaAsingController::class, 'destroy']);
        // End Mahasiswa

        // Route to Sdm Dosen
        Route::get('/sdm', [SdmController::class, 'index']);

        // Route to Profil Dosen
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
        //End Profil Dosen

        // Route to Kinerja Dosen
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
        Route::post('/kinerja-dosen/penelitian-dtps/{id}', [SdmKinerjaDosenPenelitianDtpsController::class, 'destroy']);

        Route::get('/kinerja-dosen/pkm-dtps', [SdmKinerjaDosenPkmDtpsController::class, 'index']);
        Route::post('/kinerja-dosen/pkm-dtps', [SdmKinerjaDosenPkmDtpsController::class, 'store']);
        Route::put('/kinerja-dosen/pkm-dtps/{id}', [SdmKinerjaDosenPkmDtpsController::class, 'update']);
        Route::post('/kinerja-dosen/pkm-dtps/{id}', [SdmKinerjaDosenPkmDtpsController::class, 'destroy']);

        Route::get('/kinerja-dosen/publikasi-dtps', [SdmKinerjaDosenPublikasiIlmiahDtpsController::class, 'index']);
        Route::post('/kinerja-dosen/publikasi-dtps', [SdmKinerjaDosenPublikasiIlmiahDtpsController::class, 'store']);
        Route::put('/kinerja-dosen/publikasi-dtps/{id}', [SdmKinerjaDosenPublikasiIlmiahDtpsController::class, 'update']);
        Route::post('/kinerja-dosen/publikasi-dtps/{id}', [SdmKinerjaDosenPublikasiIlmiahDtpsController::class, 'destroy']);

        Route::get('/kinerja-dosen/luaran-dtps', [SdmKinerjaDosenLuaranPkmDtpsController::class, 'index']);
        Route::post('/kinerja-dosen/luaran-dtps', [SdmKinerjaDosenLuaranPkmDtpsController::class, 'store']);
        Route::put('/kinerja-dosen/luaran-dtps/{id}', [SdmKinerjaDosenLuaranPkmDtpsController::class, 'update']);
        Route::get('/kinerja-dosen/luaran-dtps/{id}', [SdmKinerjaDosenLuaranPkmDtpsController::class, 'destroy']);
        // End Kinerja Dosen

        // Route to Keuangan dan Sarpras
        Route::get('/keuangan-sarana-prasarana', [KeuanganSaranaPrasaranaController::class, 'index']);
        Route::post('/keuangan-sarana-prasarana', [KeuanganSaranaPrasaranaController::class, 'store']);
        Route::put('/keuangan-sarana-prasarana/{id}', [KeuanganSaranaPrasaranaController::class, 'update']);
        Route::get('/keuangan-sarana-prasarana/{id}', [KeuanganSaranaPrasaranaController::class, 'destroy']);
        // End Keuangan Sarpras

        // Route to Pendidikan
        Route::get('/pendidikan', [PendidikanController::class, 'index']);
        Route::post('/pendidikan', [PendidikanController::class, 'store']);
        Route::put('/pendidikan/{id}', [PendidikanController::class, 'update']);
        Route::get('/pendidikan/{id}', [PendidikanController::class, 'destroy']);

        Route::get('/pendidikan/integrasi', [PendidikanIntegrasiKegiatanPenelitianController::class, 'index']);
        Route::post('/pendidikan/integrasi', [PendidikanIntegrasiKegiatanPenelitianController::class, 'store']);
        Route::put('/pendidikan/integrasi/{id}', [PendidikanIntegrasiKegiatanPenelitianController::class, 'update']);
        Route::get('/pendidikan/integrasi/{id}', [PendidikanIntegrasiKegiatanPenelitianController::class, 'destroy']);

        Route::get('/pendidikan/kepuasan-mahasiswa', [PendidikanKepuasanMahasiswaController::class, 'index']);
        Route::post('/pendidikan/kepuasan-mahasiswa', [PendidikanKepuasanMahasiswaController::class, 'store']);
        Route::put('/pendidikan/kepuasan-mahasiswa/{id}', [PendidikanKepuasanMahasiswaController::class, 'update']);
        Route::post('/pendidikan/kepuasan-mahasiswa/{id}', [PendidikanKepuasanMahasiswaController::class, 'destroy']);
        // End Pendidikan

        // Route to Penelitian
        Route::get('/penelitian', [PenelitianController::class, 'index']);
        Route::post('/penelitian', [PenelitianController::class, 'store']);
        Route::put('/penelitian/{id}', [PenelitianController::class, 'update']);
        Route::get('/penelitian/{id}', [PenelitianController::class, 'destroy']);
        // End Penelitian

        // Route to PKM
        Route::get('/pkm', [PengabdianController::class, 'index']);
        Route::post('/pkm', [PengabdianController::class, 'store']);
        Route::put('/pkm/{id}', [PengabdianController::class, 'update']);
        Route::get('/pkm/{id}', [PengabdianController::class, 'destroy']);
        // End PKM

        // Route to Luaran
        Route::get('/luaran-capaian-tridharma', [LuaranController::class, 'index']);
        Route::put('/luaran-capaian-tridharma/capaian/{id}', [CapaianPembelajaranController::class, 'update']);
        Route::post('/luaran-capaian-tridharma/capaian/{id}', [CapaianPembelajaranController::class, 'destroy']);

        Route::get('/luaran-capaian-tridharma/prestasi-mahasiswa', [PrestasiMahasiswaController::class, 'index']);
        Route::post('/luaran-capaian-tridharma/prestasi-mahasiswa', [PrestasiMahasiswaController::class, 'store']);
        Route::put('/luaran-capaian-tridharma/prestasi-mahasiswa/{id}', [PrestasiMahasiswaController::class, 'update']);
        Route::post('/luaran-capaian-tridharma/prestasi-mahasiswa/{id}', [PrestasiMahasiswaController::class, 'destroy']);

        Route::get('/luaran-capaian-tridharma/efektifitas', [EfektifitasProduktifitasPendidikanController::class, 'index']);
        Route::post('/luaran-capaian-tridharma/efektifitas', [EfektifitasProduktifitasPendidikanController::class, 'store']);
        Route::put('/luaran-capaian-tridharma/efektifitas/{id}', [EfektifitasProduktifitasPendidikanController::class, 'update']);
        Route::post('/luaran-capaian-tridharma/efektifitas/{id}', [EfektifitasProduktifitasPendidikanController::class, 'destroy']);

        Route::put('/luaran-capaian-tridharma/daya-saing/{id}', [WaktuTungguLulusanController::class, 'update']);
        Route::post('/luaran-capaian-tridharma/daya-saing/{id}', [WaktuTungguLulusanController::class, 'destroy']);

        Route::put('/luaran-capaian-tridharma/kinerja-lulusan/{id}', [KinerjaLulusanController::class, 'update']);
        Route::post('/luaran-capaian-tridharma/kinerja-lulusan/{id}', [KinerjaLulusanController::class, 'destroy']);

        Route::put('/luaran-capaian-tridharma/kesesuain-bidang/{id}', [KesesuaianBidangKerjaController::class, 'update']);
        Route::post('/luaran-capaian-tridharma/kesesuain-bidang/{id}', [KesesuaianBidangKerjaController::class, 'destroy']);

        Route::put('/luaran-capaian-tridharma/kepuasan-pengguna/{id}', [KepuasanPenggunaController::class, 'update']);
        Route::post('/luaran-capaian-tridharma/kepuasan-pengguna/{id}', [KepuasanPenggunaController::class, 'destroy']);
        // End Luaran

        Route::get('/simulasi', [SimulasiController::class, 'index']);
    });

    Route::group(['middleware' => ['role:perwakilan|dekan|asesor']], function ()
    {
        
        // Route to Tata Pamong
        Route::get('tata-pamong/download-excel', [TataPamongController::class, 'exportToExcel']);
        Route::get('tata-pamong/download-csv', [TataPamongController::class, 'exportToCSV']);
        Route::get('tata-pamong/download-pdf', [TataPamongController::class, 'generate']);
        // End Route
        
        // Route to Mahasiswa
        Route::get('mahasiswa/download/excel', [TabMahasiswaController::class, 'exportToExcel']);
        Route::get('mahasiswa/download/excel', [TabMahasiswaController::class, 'exportToCSV']);
        Route::get('mahasiswa/download/pdf', [TabMahasiswaController::class, 'generate']);
        // End Route

        // Route to Profil Dosen
        Route::get('profil-dosen/download/excel', [ProfilDosenController::class, 'exportToExcel']);
        Route::get('profil-dosen/download/csv', [ProfilDosenController::class, 'exportToCSV']);
        Route::get('profil-dosen/download/pdf', [ProfilDosenController::class, 'generate']);

        Route::get('profil-dosen/dosen-pembimbing-ta/download/excel', [SdmDosenPembimbingTaController::class, 'exportToExcel']);
        Route::get('profil-dosen/dosen-pembimbing-ta/download/csv', [SdmDosenPembimbingTaController::class, 'exportToCSV']);
        Route::get('profil-dosen/dosen-pembimbing-ta/download/pdf', [SdmDosenPembimbingTaController::class, 'generate']);

        Route::get('profil-dosen/dosen-ewmp/download/excel', [SdmEkuivalenWaktuMengajarPenuhDosenTetapController::class, 'exportToExcel']);
        Route::get('profil-dosen/dosen-ewmp/download/csv', [SdmEkuivalenWaktuMengajarPenuhDosenTetapController::class, 'exportToCSV']);
        Route::get('profil-dosen/dosen-ewmp/download/pdf', [SdmEkuivalenWaktuMengajarPenuhDosenTetapController::class, 'generate']);

        Route::get('profil-dosen/dosen-tidak-tetap/download/excel', [SdmDosenTidakTetapController::class, 'exportToExcel']);
        Route::get('profil-dosen/dosen-tidak-tetap/download/csv', [SdmDosenTidakTetapController::class, 'exportToCSV']);
        Route::get('profil-dosen/dosen-tidak-tetap/download/pdf', [SdmDosenTidakTetapController::class, 'generate']);
        // End Route

        // Route to Kinerja Dosen
        Route::get('kinerja-dosen/download/excel', [KinerjaDosenController::class, 'exportToExcel']);
        Route::get('kinerja-dosen/download/csv', [KinerjaDosenController::class, 'exportToCSV']);
        Route::get('kinerja-dosen/download/pdf', [KinerjaDosenController::class, 'generate']);
        
        Route::get('kinerja-dosen/penelitian-dtps/download/excel', [SdmKinerjaDosenPenelitianDtpsController::class, 'exportToExcel']);
        Route::get('kinerja-dosen/penelitian-dtps/download/csv', [SdmKinerjaDosenPenelitianDtpsController::class, 'exportToCSV']);
        Route::get('kinerja-dosen/penelitian-dtps/download/pdf', [SdmKinerjaDosenPenelitianDtpsController::class, 'generate']);
        
        Route::get('kinerja-dosen/pkm-dtps/download/excel', [SdmKinerjaDosenPkmDtpsController::class, 'exportToExcel']);
        Route::get('kinerja-dosen/pkm-dtps/download/csv', [SdmKinerjaDosenPkmDtpsController::class, 'exportToCSV']);
        Route::get('kinerja-dosen/pkm-dtps/download/pdf', [SdmKinerjaDosenPkmDtpsController::class, 'generate']);
        
        Route::get('kinerja-dosen/publikasi-ilmiah/download/excel', [SdmKinerjaDosenPublikasiIlmiahDtpsController::class, 'exportToExcel']);
        Route::get('kinerja-dosen/publikasi-ilmiah/download/csv', [SdmKinerjaDosenPublikasiIlmiahDtpsController::class, 'exportToCSV']);
        Route::get('kinerja-dosen/publikasi-ilmiah/download/pdf', [SdmKinerjaDosenPublikasiIlmiahDtpsController::class, 'generate']);

        Route::get('kinerja-dosen/karya-ilmiah/download/excel', [SdmKinerjaDosenKaryaIlmiahDtpsController::class, 'exportToExcel']);
        Route::get('kinerja-dosen/karya-ilmiah/download/csv', [SdmKinerjaDosenKaryaIlmiahDtpsController::class, 'exportToCSV']);
        Route::get('kinerja-dosen/karya-ilmiah/download/pdf', [SdmKinerjaDosenKaryaIlmiahDtpsController::class, 'generate']);

        Route::get('kinerja-dosen/luaran/download/excel', [SdmKinerjaDosenLuaranPkmDtpsController::class, 'exportToExcel']);
        Route::get('kinerja-dosen/luaran/download/csv', [SdmKinerjaDosenLuaranPkmDtpsController::class, 'exportToCSV']);
        Route::get('kinerja-dosen/luaran/download/pdf', [SdmKinerjaDosenLuaranPkmDtpsController::class, 'generate']);
        // End Route

        // Route to Keuangan Sarpras
        Route::get('/keuangan-sarana-prasarana/download/excel', [KeuanganSaranaPrasaranaController::class, 'exportToExcel']);
        Route::get('/keuangan-sarana-prasarana/download/csv', [KeuanganSaranaPrasaranaController::class, 'exportToCSV']);
        Route::get('/keuangan-sarana-prasarana/download/pdf', [KeuanganSaranaPrasaranaController::class, 'generate']);
        // End Route
        
        // Route to Pendidikan
        Route::get('pendidikan/download/excel', [PendidikanController::class, 'exportToExcel']);
        Route::get('pendidikan/download/csv', [PendidikanController::class, 'exportToCSV']);
        Route::get('pendidikan/download/pdf', [PendidikanController::class, 'generate']);
        
        Route::get('pendidikan/integrasi/download/excel', [PendidikanIntegrasiKegiatanPenelitianController::class, 'exportToExcel']);
        Route::get('pendidikan/integrasi/download/csv', [PendidikanIntegrasiKegiatanPenelitianController::class, 'exportToCSV']);
        Route::get('pendidikan/integrasi/download/pdf', [PendidikanIntegrasiKegiatanPenelitianController::class, 'generate']);

        Route::get('pendidikan/kepuasan-mahasiswa/download/excel', [PendidikanKepuasanMahasiswaController::class, 'exportToExcel']);
        Route::get('pendidikan/kepuasan-mahasiswa/download/csv', [PendidikanKepuasanMahasiswaController::class, 'exportToCSV']);
        Route::get('pendidikan/kepuasan-mahasiswa/download/pdf', [PendidikanKepuasanMahasiswaController::class, 'generate']);
        // End Route

        // Route to Penelitian
        Route::get('penelitian/download/excel', [PenelitianController::class, 'exportToExcel']);
        Route::get('penelitian/download/csv', [PenelitianController::class, 'exportToCSV']);
        Route::get('penelitian/download/pdf', [PenelitianController::class, 'generate']);
        // End Route

        // Route to Luaran
        Route::get('luaran/download/excel', [LuaranController::class, 'exportToExcel']);
        Route::get('luaran/download/csv', [LuaranController::class, 'exportToCSV']);
        Route::get('luaran/download/pdf', [LuaranController::class, 'generate']);
        // End Route
    });
});