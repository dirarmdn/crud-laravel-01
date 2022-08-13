<?php

use App\Models\Siswa;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PegawaiController;

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
    $jumlahpegawai = Pegawai::count();
    $pegawaicowo = Pegawai::where('kelamin','L')->count();
    $pegawaicewe = Pegawai::where('kelamin','P')->count();

    $jumlahsiswa = Siswa::count();
    $muridcowo = Siswa::where('kelamin','L')->count();
    $muridcewe = Siswa::where('kelamin','P')->count();

    return view('welcome',compact('jumlahpegawai','jumlahsiswa','pegawaicowo','pegawaicewe','muridcowo','muridcewe'));
});

Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai');

Route::get('/tambahpegawai', [PegawaiController::class, 'tambahpegawai'])->name('tambahpegawai');

Route::post('/insertpegawai', [PegawaiController::class, 'insertpegawai'])->name('insertpegawai');

Route::get('/tampilkandata/{nip}', [PegawaiController::class, 'tampilkandata'])->name('tampilkandata');

Route::post('/updatedata/{nip}', [PegawaiController::class, 'updatedata'])->name('updatedata');

Route::get('/deletedata/{nip}', [PegawaiController::class, 'deletedata'])->name('deletedata');


Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');

Route::get('/tambahsiswa', [SiswaController::class, 'tambahsiswa'])->name('tambahsiswa');

Route::post('/insertsiswa', [SiswaController::class, 'insertsiswa'])->name('insertsiswa');

Route::get('/showdata/{nis}', [SiswaController::class, 'showdata'])->name('tampilkandata');

Route::post('/updatesiswa/{nis}', [SiswaController::class, 'updatesiswa'])->name('updatesiswa');

Route::get('/deletesiswa/{nis}', [SiswaController::class, 'deletesiswa'])->name('deletesiswa');
