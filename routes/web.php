<?php

use App\Models\MahasiswaAsing;
use App\Models\KepuasanPengguna;
use App\Models\SimulasiPenilaian;
use App\Models\SdmDosenTidakTetap;
use App\Models\PendidikanKurikulum;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\SdmKinerjaDosenPkmDtps;
use App\Http\Controllers\SdmController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UppsController;
use App\Models\PublikasiIlmiahMahasiswa;
use App\Models\SdmDosenIndustriPraktisi;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LuaranController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\SimulasiController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PenelitianController;
use App\Http\Controllers\PengabdianController;
use App\Http\Controllers\TataPamongController;
use App\Models\SdmKinerjaDosenKaryaIlmiahDtps;
use App\Http\Controllers\ProfilDosenController;
use App\Http\Controllers\TimPenyusunController;
use App\Http\Controllers\KinerjaDosenController;
use App\Http\Controllers\ProgramStudiController;
use App\Http\Controllers\TabMahasiswaController;
use App\Http\Controllers\KinerjaLulusanController;
use App\Http\Controllers\MahasiswaAsingController;
use App\Models\SdmKinerjaDosenPublikasiIlmiahDtps;
use App\Http\Controllers\KepuasanPenggunaController;
use App\Http\Controllers\IdentitasPengusulController;
use App\Http\Controllers\PrestasiMahasiswaController;
use App\Http\Controllers\SimulasiPenilaianController;
use App\Http\Controllers\LembarEvaluasiDiriController;
use App\Http\Controllers\LuaranPkmMahasiswaController;
use App\Http\Controllers\SdmDosenTidakTetapController;
use App\Http\Controllers\WaktuTungguLulusanController;
use App\Http\Controllers\CapaianPembelajaranController;
use App\Http\Controllers\PendidikanKurikulumController;
use App\Http\Controllers\KaryaIlmiahMahasiswaController;
use App\Http\Controllers\SdmDosenPembimbingTaController;
use App\Http\Controllers\KesesuaianBidangKerjaController;
use App\Http\Controllers\SdmKinerjaDosenPkmDtpsController;
use App\Http\Controllers\KeuanganSaranaPrasaranaController;
use App\Http\Controllers\PublikasiIlmiahMahasiswaController;
use App\Http\Controllers\SdmDosenIndustriPraktisiController;
use App\Http\Controllers\PendidikanKepuasanMahasiswaController;
use App\Http\Controllers\PrestasiNonAkademikMahasiswaController;
use App\Http\Controllers\SdmKinerjaDosenLuaranPkmDtpsController;
use App\Http\Controllers\SdmKinerjaDosenPenelitianDtpsController;
use App\Http\Controllers\SdmKinerjaDosenKaryaIlmiahDtpsController;
use App\Http\Controllers\EfektifitasProduktifitasPendidikanController;
use App\Http\Controllers\SdmKinerjaDosenPublikasiIlmiahDtpsController;
use App\Http\Controllers\PendidikanIntegrasiKegiatanPenelitianController;
use App\Http\Controllers\SdmEkuivalenWaktuMengajarPenuhDosenTetapController;

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
        } else if(Auth::user()->roles->pluck('name')[0] == 'asesor') {
            return redirect('/audit');
        } else {
            return redirect('/dashboard');
        }
    });

    Route::group(['middleware' => ['role:admin']], function () {
        Route::get('/user', [AdminController::class, 'index']);
        Route::get('/prodi', [AdminController::class, 'prodi']);
        Route::post('/user', [AdminController::class, 'store']);
        Route::put('/user/{id}', [AdminController::class, 'update']);
        Route::get('/user/{id}', [AdminController::class, 'destroy']);

        Route::get('/prodi', [ProgramStudiController::class, 'index']);
        Route::post('/prodi', [ProgramStudiController::class, 'store']);
        Route::put('/prodi/{id}', [ProgramStudiController::class, 'update']);
        Route::get('/prodi/{id}', [ProgramStudiController::class, 'destroy']);

        Route::get('/logout', [AdminController::class, 'logout']);
    });

    Route::group(['middleware' => ['role:perwakilan']], function () {

        // Route to Identitas Pengusul
        Route::post('/identitas-pengusul', [IdentitasPengusulController::class, 'store']);
        Route::get('/identitas-pengusul/{id}', [IdentitasPengusulController::class, 'show']);
        Route::put('/identitas-pengusul/{id}', [IdentitasPengusulController::class, 'update']);
        Route::get('/identitas-pengusul/delete/{id}', [IdentitasPengusulController::class, 'destroy']);

        Route::get('/identitas-pengusul/upps', [UppsController::class, 'index']);
        Route::post('/identitas-pengusul/upps', [UppsController::class, 'store']);
        Route::put('/identitas-pengusul/upps/{id}', [UppsController::class, 'update']);
        Route::get('/identitas-pengusul/upps/{id}', [UppsController::class, 'destroy']);

        Route::post('/identitas-pengusul/tim-penyusun', [TimPenyusunController::class, 'store']);
        Route::put('/identitas-pengusul/tim-penyusun/{id}', [TimPenyusunController::class, 'update']);
        Route::post('/identitas-pengusul/tim-penyusun/{id}', [TimPenyusunController::class, 'destroy']);

        Route::get('/identitas-pengusul/lembar-evaluasi', [LembarEvaluasiDiriController::class, 'index']);
        Route::post('/identitas-pengusul/lembar-evaluasi', [LembarEvaluasiDiriController::class, 'store']);
        Route::put('/identitas-pengusul/lembar-evaluasi/{id}', [LembarEvaluasiDiriController::class, 'update']);
        Route::get('/identitas-pengusul/lembar-evaluasi/{id}', [LembarEvaluasiDiriController::class, 'destroy']);

        // End Route Identitas Pengusul

        // Route to Tata Pamong
        
        Route::post('/tata-pamong-tata-kelola-kerjasama', [TataPamongController::class, 'store']);
        Route::put('/tata-pamong-tata-kelola-kerjasama/{id}', [TataPamongController::class, 'update']);
        Route::get('/tata-pamong-tata-kelola-kerjasama/{id}', [TataPamongController::class, 'destroy']);
        // End Tata Pamong

        // Route to Mahasiswa
        Route::post('/mahasiswa', [TabMahasiswaController::class, 'store']);
        Route::put('/mahasiswa/{id}', [TabMahasiswaController::class, 'update']);
        Route::post('/mahasiswa/delete/{id}', [TabMahasiswaController::class, 'destroy']);

        Route::post('/mahasiswa/mahasiswa-asing', [MahasiswaAsingController::class, 'store']);
        Route::put('/mahasiswa/mahasiswa-asing/{id}', [MahasiswaAsingController::class, 'update']);
        Route::get('/mahasiswa/mahasiswa-asing/{id}', [MahasiswaAsingController::class, 'destroy']);
        // End Mahasiswa

        // Route to Sdm Dosen
        Route::get('/sdm', [SdmController::class, 'index']);

        // Route to Profil Dosen
        Route::post('/profil-dosen', [ProfilDosenController::class, 'store']);
        Route::put('/profil-dosen/{id}', [ProfilDosenController::class, 'update']);
        Route::get('/profil-dosen/{id}', [ProfilDosenController::class, 'destroy']);

        Route::post('/profil-dosen/pembimbing-ta', [SdmDosenPembimbingTaController::class, 'store']);
        Route::put('/profil-dosen/pembimbing-ta/{year}', [SdmDosenPembimbingTaController::class, 'update']);
        Route::get('/profil-dosen/pembimbing-ta/{year}', [SdmDosenPembimbingTaController::class, 'destroy']);

        Route::post('/profil-dosen/dosen-ewmp', [SdmEkuivalenWaktuMengajarPenuhDosenTetapController::class, 'store']);
        Route::put('/profil-dosen/dosen-ewmp/{id}', [SdmEkuivalenWaktuMengajarPenuhDosenTetapController::class, 'update']);
        Route::get('/profil-dosen/dosen-ewmp/{id}', [SdmEkuivalenWaktuMengajarPenuhDosenTetapController::class, 'destroy']);

        Route::post('/profil-dosen/dosen-tidak-tetap', [SdmDosenTidakTetapController::class, 'store']);
        Route::put('/profil-dosen/dosen-tidak-tetap/{id}', [SdmDosenTidakTetapController::class, 'update']);
        Route::get('/profil-dosen/dosen-tidak-tetap/{id}', [SdmDosenTidakTetapController::class, 'destroy']);
        //End Profil Dosen

        // Route to Kinerja Dosen
        Route::post('/kinerja-dosen', [KinerjaDosenController::class, 'store']);
        Route::put('/kinerja-dosen/{id}', [KinerjaDosenController::class, 'update']);
        Route::get('/kinerja-dosen/{id}', [KinerjaDosenController::class, 'destroy']);

        Route::post('/kinerja-dosen/karya-ilmiah', [SdmKinerjaDosenKaryaIlmiahDtpsController::class, 'store']);
        Route::put('/kinerja-dosen/karya-ilmiah/{id}', [SdmKinerjaDosenKaryaIlmiahDtpsController::class, 'update']);
        Route::get('/kinerja-dosen/karya-ilmiah/{id}', [SdmKinerjaDosenKaryaIlmiahDtpsController::class, 'destroy']);

        Route::post('/kinerja-dosen/penelitian-dtps', [SdmKinerjaDosenPenelitianDtpsController::class, 'store']);
        Route::put('/kinerja-dosen/penelitian-dtps/{year}/{sumber}', [SdmKinerjaDosenPenelitianDtpsController::class, 'update']);
        Route::post('/kinerja-dosen/penelitian-dtps/{year}/{sumber}', [SdmKinerjaDosenPenelitianDtpsController::class, 'destroy']);

        Route::post('/kinerja-dosen/pkm-dtps', [SdmKinerjaDosenPkmDtpsController::class, 'store']);
        Route::put('/kinerja-dosen/pkm-dtps/{year}/{sumber}', [SdmKinerjaDosenPkmDtpsController::class, 'update']);
        Route::post('/kinerja-dosen/pkm-dtps/{year}/{sumber}', [SdmKinerjaDosenPkmDtpsController::class, 'destroy']);

        Route::post('/kinerja-dosen/publikasi-dtps', [SdmKinerjaDosenPublikasiIlmiahDtpsController::class, 'store']);
        Route::put('/kinerja-dosen/publikasi-dtps/{year}/{media}', [SdmKinerjaDosenPublikasiIlmiahDtpsController::class, 'update']);
        Route::post('/kinerja-dosen/publikasi-dtps/{year}/{media}', [SdmKinerjaDosenPublikasiIlmiahDtpsController::class, 'destroy']);

        Route::get('/kinerja-dosen/luaran-dtps', [SdmKinerjaDosenLuaranPkmDtpsController::class, 'index']);
        Route::post('/kinerja-dosen/luaran-dtps', [SdmKinerjaDosenLuaranPkmDtpsController::class, 'store']);
        Route::put('/kinerja-dosen/luaran-dtps/{id}', [SdmKinerjaDosenLuaranPkmDtpsController::class, 'update']);
        Route::get('/kinerja-dosen/luaran-dtps/{id}', [SdmKinerjaDosenLuaranPkmDtpsController::class, 'destroy']);
        // End Kinerja Dosen

        // Route to Keuangan dan Sarpras
        Route::put('/keuangan-sarana-prasarana/{year}/{sarana}/{code}', [KeuanganSaranaPrasaranaController::class, 'update']);
        Route::post('/keuangan-sarana-prasarana/{year}/{sarana}/{code}', [KeuanganSaranaPrasaranaController::class, 'destroy']);
        // End Keuangan Sarpras

        // Route to Pendidikan
        Route::post('/pendidikan', [PendidikanController::class, 'store']);
        Route::put('/pendidikan/{id}', [PendidikanController::class, 'update']);
        Route::get('/pendidikan/{id}', [PendidikanController::class, 'destroy']);

        Route::post('/pendidikan/integrasi', [PendidikanIntegrasiKegiatanPenelitianController::class, 'store']);
        Route::put('/pendidikan/integrasi/{id}', [PendidikanIntegrasiKegiatanPenelitianController::class, 'update']);
        Route::get('/pendidikan/integrasi/{id}', [PendidikanIntegrasiKegiatanPenelitianController::class, 'destroy']);

        Route::post('/pendidikan/kepuasan-mahasiswa', [PendidikanKepuasanMahasiswaController::class, 'store']);
        Route::put('/pendidikan/kepuasan-mahasiswa/{id}', [PendidikanKepuasanMahasiswaController::class, 'update']);
        Route::post('/pendidikan/kepuasan-mahasiswa/{id}', [PendidikanKepuasanMahasiswaController::class, 'destroy']);
        // End Pendidikan

        // Route to Penelitian
        Route::post('/penelitian', [PenelitianController::class, 'store']);
        Route::put('/penelitian/{id}', [PenelitianController::class, 'update']);
        Route::get('/penelitian/{id}', [PenelitianController::class, 'destroy']);
        // End Penelitian

        // Route to PKM
        Route::post('/pkm', [PengabdianController::class, 'store']);
        Route::put('/pkm/{id}', [PengabdianController::class, 'update']);
        Route::get('/pkm/{id}', [PengabdianController::class, 'destroy']);
        // End PKM

        // Route to Luaran
        Route::put('/luaran-capaian-tridharma/capaian/{id}', [CapaianPembelajaranController::class, 'update']);
        Route::post('/luaran-capaian-tridharma/capaian/{id}', [CapaianPembelajaranController::class, 'destroy']);

        Route::post('/luaran-capaian-tridharma/prestasi-mahasiswa', [PrestasiMahasiswaController::class, 'store']);
        Route::put('/luaran-capaian-tridharma/prestasi-mahasiswa/{id}', [PrestasiMahasiswaController::class, 'update']);
        Route::get('/luaran-capaian-tridharma/prestasi-mahasiswa/{id}', [PrestasiMahasiswaController::class, 'destroy']);

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

        Route::put('/luaran-capaian-tridharma/publikasi-ilmiah/{year}/{media}', [PublikasiIlmiahMahasiswaController::class, 'update']);
        Route::post('/luaran-capaian-tridharma/publikasi-ilmiah/{year}/{media}', [PublikasiIlmiahMahasiswaController::class, 'destroy']);

        Route::post('/luaran-capaian-tridharma/luaran-mahasiswa', [LuaranPkmMahasiswaController::class, 'store']);
        Route::put('/luaran-capaian-tridharma/luaran-mahasiswa/{id}', [LuaranPkmMahasiswaController::class, 'update']);
        Route::get('/luaran-capaian-tridharma/luaran-mahasiswa/{id}', [LuaranPkmMahasiswaController::class, 'destroy']);
        // End Luaran

        // Simulasi
        Route::post('/simulasi', [SimulasiPenilaianController::class, 'store']);
        Route::put('/simulasi/{id}', [SimulasiPenilaianController::class, 'update']);
        Route::delete('/simulasi/{id}', [SimulasiPenilaianController::class, 'destroy']);
        // End Simulasi

    });

    Route::group(['middleware' => ['role:perwakilan|dekan|asesor']], function ()
    {
        Route::get('/dashboard', [HomeController::class, 'index']);
        Route::post('/dashboard', [HomeController::class, 'tahun']);

        // Identitas Pengusul
        Route::get('/identitas-pengusul', [IdentitasPengusulController::class, 'index']);
        Route::put('/identitas-pengusul/approve/{id}', [IdentitasPengusulController::class, 'approve']);
        Route::put('/identitas-pengusul/tolak/{id}', [IdentitasPengusulController::class, 'tolak']);
        
        Route::get('/identitas-pengusul/tim-penyusun', [TimPenyusunController::class, 'index']);
        Route::put('/identitas-pengusul/upps/approve/{id}', [UppsController::class, 'approve']);
        Route::put('/identitas-pengusul/upps/tolak/{id}', [UppsController::class, 'tolak']);

        Route::put('/identitas-pengusul/tim-penyusun/approve/{id}', [TimPenyusunController::class, 'approve']);
        Route::put('/identitas-pengusul/tim-penyusun/tolak/{id}', [TimPenyusunController::class, 'tolak']);

        Route::put('/identitas-pengusul/lembar-evaluasi/approve/{id}', [LembarEvaluasiDiriController::class, 'approve']);
        Route::put('/identitas-pengusul/lembar-evaluasi/tolak/{id}', [LembarEvaluasiDiriController::class, 'tolak']);
        // End Route

        // Route to Tata Pamong
        Route::get('/tata-pamong-tata-kelola-kerjasama', [TataPamongController::class, 'index']);
        Route::put('/tata-pamong-tata-kelola-kerjasama/approve/{id}', [TataPamongController::class, 'approve']);
        Route::put('/tata-pamong-tata-kelola-kerjasama/tolak/{id}', [TataPamongController::class, 'tolak']);
        Route::get('tata-pamong/download/excel', [TataPamongController::class, 'exportToExcel']);
        Route::get('tata-pamong/download/csv', [TataPamongController::class, 'exportToCSV']);
        Route::get('tata-pamong/download/pdf', [TataPamongController::class, 'generate']);
        // End Route

        // Route to Mahasiswa
        Route::get('/mahasiswa', [TabMahasiswaController::class, 'index']);
        Route::put('/mahasiswa/approve/{id}', [TabMahasiswaController::class, 'approve']);
        Route::put('/mahasiswa/tolak/{id}', [TabMahasiswaController::class, 'tolak']);
        Route::get('mahasiswa/download/excel', [TabMahasiswaController::class, 'exportToExcel']);
        Route::get('mahasiswa/download/excel', [TabMahasiswaController::class, 'exportToCSV']);
        Route::get('mahasiswa/download/pdf', [TabMahasiswaController::class, 'generate']);

        Route::get('/mahasiswa/mahasiswa-asing', [MahasiswaAsingController::class, 'index']);
        Route::put('/mahasiswa/mahasiswa-asing/approve/{id}', [MahasiswaAsingController::class, 'approve']);
        Route::put('/mahasiswa/mahasiswa-asing/tolak/{id}', [MahasiswaAsingController::class, 'tolak']);
        Route::get('mahasiswa/asing/download/excel', [MahasiswaAsingController::class, 'exportToExcel']);
        Route::get('mahasiswa/asing/download/excel', [MahasiswaAsingController::class, 'exportToCSV']);
        Route::get('mahasiswa/asing/download/pdf', [MahasiswaAsingController::class, 'generate']);
        // End Route

        // Route to Profil Dosen
        Route::get('/profil-dosen', [ProfilDosenController::class, 'index']);
        Route::put('/profil-dosen/approve/{id}', [ProfilDosenController::class, 'approve']);
        Route::put('/profil-dosen/tolak/{id}', [ProfilDosenController::class, 'tolak']);
        Route::get('profil-dosen/download/excel', [ProfilDosenController::class, 'exportToExcel']);
        Route::get('profil-dosen/download/csv', [ProfilDosenController::class, 'exportToCSV']);
        Route::get('profil-dosen/download/pdf', [ProfilDosenController::class, 'generate']);

        Route::get('/profil-dosen/pembimbing-ta', [SdmDosenPembimbingTaController::class, 'index']);
        Route::put('/profil-dosen/pembimbing-ta/approve/{year}', [SdmDosenPembimbingTaController::class, 'approve']);
        Route::put('/profil-dosen/pembimbing-ta/tolak/{year}', [SdmDosenPembimbingTaController::class, 'tolak']);

        Route::get('/profil-dosen/dosen-ewmp', [SdmEkuivalenWaktuMengajarPenuhDosenTetapController::class, 'index']);
        Route::put('/profil-dosen/dosen-ewmp/approve/{id}', [SdmEkuivalenWaktuMengajarPenuhDosenTetapController::class, 'approve']);
        Route::put('/profil-dosen/dosen-ewmp/tolak/{id}', [SdmEkuivalenWaktuMengajarPenuhDosenTetapController::class, 'tolak']);

        Route::put('/profil-dosen/dosen-pembimbing-ta/approve/{id}', [SdmDosenPembimbingTaController::class, 'approve']);
        Route::put('/profil-dosen/dosen-pembimbing-ta/tolak/{id}', [SdmDosenPembimbingTaController::class, 'tolak']);
        Route::get('profil-dosen/dosen-pembimbing-ta/download/excel', [SdmDosenPembimbingTaController::class, 'exportToExcel']);
        Route::get('profil-dosen/dosen-pembimbing-ta/download/csv', [SdmDosenPembimbingTaController::class, 'exportToCSV']);
        Route::get('profil-dosen/dosen-pembimbing-ta/download/pdf', [SdmDosenPembimbingTaController::class, 'generate']);

        Route::put('/profil-dosen/dosen-ewmp/approve/{id}', [SdmEkuivalenWaktuMengajarPenuhDosenTetapController::class, 'approve']);
        Route::put('/profil-dosen/dosen-ewmp/tolak/{id}', [SdmEkuivalenWaktuMengajarPenuhDosenTetapController::class, 'tolak']);
        Route::get('profil-dosen/dosen-ewmp/download/excel', [SdmEkuivalenWaktuMengajarPenuhDosenTetapController::class, 'exportToExcel']);
        Route::get('profil-dosen/dosen-ewmp/download/csv', [SdmEkuivalenWaktuMengajarPenuhDosenTetapController::class, 'exportToCSV']);
        Route::get('profil-dosen/dosen-ewmp/download/pdf', [SdmEkuivalenWaktuMengajarPenuhDosenTetapController::class, 'generate']);

        Route::get('/profil-dosen/dosen-tidak-tetap', [SdmDosenTidakTetapController::class, 'index']);
        Route::put('/profil-dosen/dosen-tidak-tetap/approve/{id}', [SdmDosenTidakTetapController::class, 'approve']);
        Route::put('/profil-dosen/dosen-tidak-tetap/tolak/{id}', [SdmDosenTidakTetapController::class, 'tolak']);
        Route::get('profil-dosen/dosen-tidak-tetap/download/excel', [SdmDosenTidakTetapController::class, 'exportToExcel']);
        Route::get('profil-dosen/dosen-tidak-tetap/download/csv', [SdmDosenTidakTetapController::class, 'exportToCSV']);
        Route::get('profil-dosen/dosen-tidak-tetap/download/pdf', [SdmDosenTidakTetapController::class, 'generate']);
        // End Route

        // Route to Kinerja Dosen
        Route::get('/kinerja-dosen', [KinerjaDosenController::class, 'index']);
        Route::put('/kinerja-dosen/approve/{id}', [KinerjaDosenController::class, 'approve']);
        Route::put('/kinerja-dosen/tolak/{id}', [KinerjaDosenController::class, 'tolak']);
        Route::get('kinerja-dosen/download/excel', [KinerjaDosenController::class, 'exportToExcel']);
        Route::get('kinerja-dosen/download/csv', [KinerjaDosenController::class, 'exportToCSV']);
        Route::get('kinerja-dosen/download/pdf', [KinerjaDosenController::class, 'generate']);

        Route::get('/kinerja-dosen/karya-ilmiah', [SdmKinerjaDosenKaryaIlmiahDtpsController::class, 'index']);
        Route::put('/kinerja-dosen/karya-ilmiah/approve/{id}', [SdmKinerjaDosenKaryaIlmiahDtpsController::class, 'approve']);
        Route::put('/kinerja-dosen/karya-ilmiah/tolak/{id}', [SdmKinerjaDosenKaryaIlmiahDtpsController::class, 'tolak']);
        
        Route::get('/kinerja-dosen/penelitian-dtps', [SdmKinerjaDosenPenelitianDtpsController::class, 'index']);
        Route::put('/kinerja-dosen/penelitian-dtps/approve/{id}', [SdmKinerjaDosenPenelitianDtpsController::class, 'approve']);
        Route::put('/kinerja-dosen/penelitian-dtps/tolak/{id}', [SdmKinerjaDosenPenelitianDtpsController::class, 'tolak']);
        
        Route::get('/kinerja-dosen/pkm-dtps', [SdmKinerjaDosenPkmDtpsController::class, 'index']);
        Route::put('/kinerja-dosen/penelitian-dtps/approval/{year}/{sumber}', [SdmKinerjaDosenPenelitianDtpsController::class, 'approval']);
        Route::put('/kinerja-dosen/penelitian-dtps/tolak/{year}/{sumber}', [SdmKinerjaDosenPenelitianDtpsController::class, 'tolak']);
        Route::get('kinerja-dosen/penelitian-dtps/download/excel', [SdmKinerjaDosenPenelitianDtpsController::class, 'exportToExcel']);
        Route::get('kinerja-dosen/penelitian-dtps/download/csv', [SdmKinerjaDosenPenelitianDtpsController::class, 'exportToCSV']);
        Route::get('kinerja-dosen/penelitian-dtps/download/pdf', [SdmKinerjaDosenPenelitianDtpsController::class, 'generate']);
        
        Route::get('/kinerja-dosen/publikasi-dtps', [SdmKinerjaDosenPublikasiIlmiahDtpsController::class, 'index']);
        Route::put('/kinerja-dosen/publikasi-dtps/approval/{year}/{media}', [SdmKinerjaDosenPublikasiIlmiahDtpsController::class, 'approval']);
        Route::put('/kinerja-dosen/publikasi-dtps/tolak/{year}/{media}', [SdmKinerjaDosenPublikasiIlmiahDtpsController::class, 'tolak']);
        Route::get('kinerja-dosen/publikasi-ilmiah/download/excel', [SdmKinerjaDosenPublikasiIlmiahDtpsController::class, 'exportToExcel']);
        Route::get('kinerja-dosen/publikasi-ilmiah/download/csv', [SdmKinerjaDosenPublikasiIlmiahDtpsController::class, 'exportToCSV']);
        Route::get('kinerja-dosen/publikasi-ilmiah/download/pdf', [SdmKinerjaDosenPublikasiIlmiahDtpsController::class, 'generate']);

        Route::put('/kinerja-dosen/pkm-dtps/approval/{year}/{sumber}', [SdmKinerjaDosenPkmDtpsController::class, 'approval']);
        Route::put('/kinerja-dosen/pkm-dtps/tolak/{year}/{sumber}', [SdmKinerjaDosenPkmDtpsController::class, 'tolak']);
        Route::get('kinerja-dosen/pkm-dtps/download/excel', [SdmKinerjaDosenPkmDtpsController::class, 'exportToExcel']);
        Route::get('kinerja-dosen/pkm-dtps/download/csv', [SdmKinerjaDosenPkmDtpsController::class, 'exportToCSV']);
        Route::get('kinerja-dosen/pkm-dtps/download/pdf', [SdmKinerjaDosenPkmDtpsController::class, 'generate']);

        Route::get('kinerja-dosen/karya-ilmiah/download/excel', [SdmKinerjaDosenKaryaIlmiahDtpsController::class, 'exportToExcel']);
        Route::get('kinerja-dosen/karya-ilmiah/download/csv', [SdmKinerjaDosenKaryaIlmiahDtpsController::class, 'exportToCSV']);
        Route::get('kinerja-dosen/karya-ilmiah/download/pdf', [SdmKinerjaDosenKaryaIlmiahDtpsController::class, 'generate']);

        Route::put('/kinerja-dosen/luaran-dtps/approval/{id}', [SdmKinerjaDosenLuaranPkmDtpsController::class, 'approval']);
        Route::put('/kinerja-dosen/luaran-dtps/tolak/{id}', [SdmKinerjaDosenLuaranPkmDtpsController::class, 'tolak']);
        Route::get('kinerja-dosen/luaran/download/excel', [SdmKinerjaDosenLuaranPkmDtpsController::class, 'exportToExcel']);
        Route::get('kinerja-dosen/luaran/download/csv', [SdmKinerjaDosenLuaranPkmDtpsController::class, 'exportToCSV']);
        Route::get('kinerja-dosen/luaran/download/pdf', [SdmKinerjaDosenLuaranPkmDtpsController::class, 'generate']);
        // End Route

        // Route to Keuangan Sarpras
        Route::get('/keuangan-sarana-prasarana', [KeuanganSaranaPrasaranaController::class, 'index']);
        Route::put('/keuangan-sarana-prasarana/approve/{year}/{sarana}/{code}', [KeuanganSaranaPrasaranaController::class, 'approve']);
        Route::put('/keuangan-sarana-prasarana/tolak/{year}/{sarana}/{code}', [KeuanganSaranaPrasaranaController::class, 'tolak']);

        Route::get('/keuangan-sarana-prasarana/download/excel', [KeuanganSaranaPrasaranaController::class, 'exportToExcel']);
        Route::get('/keuangan-sarana-prasarana/download/csv', [KeuanganSaranaPrasaranaController::class, 'exportToCSV']);
        Route::get('/keuangan-sarana-prasarana/download/pdf', [KeuanganSaranaPrasaranaController::class, 'generate']);
        // End Route
        
        // Route to Pendidikan
        Route::get('/pendidikan', [PendidikanController::class, 'index']);
        Route::put('/pendidikan/approve/{id}', [PendidikanController::class, 'approve']);
        Route::put('/pendidikan/tolak/{id}', [PendidikanController::class, 'tolak']);
        Route::get('pendidikan/download/excel', [PendidikanController::class, 'exportToExcel']);
        Route::get('pendidikan/download/csv', [PendidikanController::class, 'exportToCSV']);
        Route::get('pendidikan/download/pdf', [PendidikanController::class, 'generate']);

        Route::get('/pendidikan/integrasi', [PendidikanIntegrasiKegiatanPenelitianController::class, 'index']);
        Route::put('/pendidikan/integrasi/approve/{id}', [PendidikanIntegrasiKegiatanPenelitianController::class, 'approve']);
        Route::put('/pendidikan/integrasi/tolak/{id}', [PendidikanIntegrasiKegiatanPenelitianController::class, 'tolak']);
        Route::get('pendidikan/integrasi/download/excel', [PendidikanIntegrasiKegiatanPenelitianController::class, 'exportToExcel']);
        Route::get('pendidikan/integrasi/download/csv', [PendidikanIntegrasiKegiatanPenelitianController::class, 'exportToCSV']);
        Route::get('pendidikan/integrasi/download/pdf', [PendidikanIntegrasiKegiatanPenelitianController::class, 'generate']);

        Route::get('/pendidikan/kepuasan-mahasiswa', [PendidikanKepuasanMahasiswaController::class, 'index']);
        Route::put('/pendidikan/kepuasan-mahasiswa/approve/{id}', [PendidikanKepuasanMahasiswaController::class, 'approve']);
        Route::put('/pendidikan/kepuasan-mahasiswa/tolak/{id}', [PendidikanKepuasanMahasiswaController::class, 'tolak']);
        Route::get('pendidikan/kepuasan-mahasiswa/download/excel', [PendidikanKepuasanMahasiswaController::class, 'exportToExcel']);
        Route::get('pendidikan/kepuasan-mahasiswa/download/csv', [PendidikanKepuasanMahasiswaController::class, 'exportToCSV']);
        Route::get('pendidikan/kepuasan-mahasiswa/download/pdf', [PendidikanKepuasanMahasiswaController::class, 'generate']);
        // End Route

        // Route to Penelitian
        Route::get('/penelitian', [PenelitianController::class, 'index']);
        Route::put('/penelitian/approve/{id}', [PenelitianController::class, 'approve']);
        Route::put('/penelitian/tolak/{id}', [PenelitianController::class, 'tolak']);
        Route::get('penelitian/download/excel', [PenelitianController::class, 'exportToExcel']);
        Route::get('penelitian/download/csv', [PenelitianController::class, 'exportToCSV']);
        Route::get('penelitian/download/pdf', [PenelitianController::class, 'generate']);
        // End Route

        // Pkm
        Route::get('/pkm', [PengabdianController::class, 'index']);
        Route::put('/pkm/approve/{id}', [PengabdianController::class, 'approve']);
        Route::put('/pkm/tolak/{id}', [PengabdianController::class, 'tolak']);

        // End Route

        // Route to Luaran
        Route::get('/luaran-capaian-tridharma', [LuaranController::class, 'index']);
        Route::put('/luaran-capaian-tridharma/capaian/approve/{id}', [CapaianPembelajaranController::class, 'approve']);
        Route::put('/luaran-capaian-tridharma/capaian/tolak/{id}', [CapaianPembelajaranController::class, 'tolak']);

        Route::get('/luaran-capaian-tridharma/prestasi-mahasiswa', [PrestasiMahasiswaController::class, 'index']);
        Route::put('/luaran-capaian-tridharma/prestasi-mahasiswa/approve/{id}', [PrestasiMahasiswaController::class, 'approve']);
        Route::put('/luaran-capaian-tridharma/prestasi-mahasiswa/tolak/{id}', [PrestasiMahasiswaController::class, 'tolak']);

        Route::get('/luaran-capaian-tridharma/efektifitas', [EfektifitasProduktifitasPendidikanController::class, 'index']);
        Route::put('/luaran-capaian-tridharma/efektifitas/approve/{id}', [EfektifitasProduktifitasPendidikanController::class, 'approve']);
        Route::put('/luaran-capaian-tridharma/efektifitas/tolak/{id}', [EfektifitasProduktifitasPendidikanController::class, 'tolak']);

        Route::get('/luaran-capaian-tridharma/luaran-mahasiswa', [LuaranPkmMahasiswaController::class, 'index']);
        Route::put('/luaran-capaian-tridharma/daya-saing/approve/{id}', [WaktuTungguLulusanController::class, 'approve']);
        Route::put('/luaran-capaian-tridharma/daya-saing/tolak/{id}', [WaktuTungguLulusanController::class, 'tolak']);

        Route::put('/luaran-capaian-tridharma/kinerja-lulusan/approve/{id}', [KinerjaLulusanController::class, 'approve']);
        Route::put('/luaran-capaian-tridharma/kinerja-lulusan/tolak/{id}', [KinerjaLulusanController::class, 'tolak']);

        Route::put('/luaran-capaian-tridharma/kesesuain-bidang/approve/{id}', [KesesuaianBidangKerjaController::class, 'approve']);
        Route::put('/luaran-capaian-tridharma/kesesuain-bidang/tolak/{id}', [KesesuaianBidangKerjaController::class, 'tolak']);

        Route::put('/luaran-capaian-tridharma/kepuasan-pengguna/approve/{id}', [KepuasanPenggunaController::class, 'approve']);
        Route::put('/luaran-capaian-tridharma/kepuasan-pengguna/tolak/{id}', [KepuasanPenggunaController::class, 'tolak']);

        Route::put('/luaran-capaian-tridharma/publikasi-ilmiah/approve/{year}/{media}', [PublikasiIlmiahMahasiswaController::class, 'approve']);
        Route::put('/luaran-capaian-tridharma/publikasi-ilmiah/tolak/{year}/{media}', [PublikasiIlmiahMahasiswaController::class, 'tolak']);

        Route::put('/luaran-capaian-tridharma/luaran-mahasiswa/approve/{id}', [LuaranPkmMahasiswaController::class, 'approve']);
        Route::put('/luaran-capaian-tridharma/luaran-mahasiswa/tolak/{id}', [LuaranPkmMahasiswaController::class, 'tolak']);

        Route::get('luaran/download/excel', [LuaranController::class, 'exportToExcel']);
        Route::get('luaran/download/csv', [LuaranController::class, 'exportToCSV']);
        Route::get('luaran/download/pdf', [LuaranController::class, 'generate']);
        // End Route

        // Simulasi
        Route::get('/simulasi', [SimulasiPenilaianController::class, 'index']);

        // End Simulasi
    });
});