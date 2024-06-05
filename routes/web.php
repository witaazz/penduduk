<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Daerah\ProvinsiController;
use App\Http\Controllers\Daerah\KabupatenController;
use App\Http\Controllers\Daerah\KecamatanController;
use App\Http\Controllers\Daerah\KelurahanController;
use App\Http\Controllers\Penduduk\PendudukController;
use App\Http\Controllers\Penduduk\KartuKeluargaController;
use App\Http\Controllers\Pekerjaan\PekerjaanController;
use App\Http\Controllers\Pekerjaan\SektorPekerjaanController;


Route::middleware('belum_login')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('/');
    Route::get('register', [AuthController::class, 'daftar'])->name('register');
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('register.post', [AuthController::class, 'register'])->name('register.post');
    Route::post('login', [AuthController::class, 'login'])->name('login');
});

Route::middleware('sudah_login')->group(function () {

    Route::get('keluar', [AuthController::class, 'logout'])->name('keluar');
    Route::get('home', [HomeController::class, 'index'])->name('home');

    Route::get('provinsi', [ProvinsiController::class, 'index'])->name('provinsi');
    Route::get('tambahprovinsi', [ProvinsiController::class, 'tambah'])->name('tambahprovinsi');
    Route::post('createprovinsi', [ProvinsiController::class, 'proses_tambah'])->name('createprovinsi');
    Route::get('hapusprovinsi/{id}', [ProvinsiController::class, 'hapus'])->name('hapusprovinsi');

    Route::get('kabupaten', [KabupatenController::class, 'index'])->name('kabupaten');
    Route::get('tambahkabupaten', [KabupatenController::class, 'tambah'])->name('tambahkabupaten');
    Route::post('createkabupaten', [KabupatenController::class, 'proses_tambah'])->name('createkabupaten');
    Route::get('hapuskabupaten/{id}', [KabupatenController::class, 'hapus'])->name('hapuskabupaten');

    Route::get('kecamatan', [KecamatanController::class, 'index'])->name('kecamatan');
    Route::get('tambahkecamatan', [KecamatanController::class, 'tambah'])->name('tambahkecamatan');
    Route::post('createkecamatan', [KecamatanController::class, 'proses_tambah'])->name('createkecamatan');
    Route::get('hapuskecamatan/{id}', [KecamatanController::class, 'hapus'])->name('hapuskecamatan');

    Route::get('kelurahan', [KelurahanController::class, 'index'])->name('kelurahan');
    Route::get('tambahkelurahan', [KelurahanController::class, 'tambah'])->name('tambahkelurahan');
    Route::post('createkelurahan', [KelurahanController::class, 'proses_tambah'])->name('createkelurahan');
    Route::get('hapuskelurahan/{id}', [KelurahanController::class, 'hapus'])->name('hapuskelurahan');

    Route::get('penduduk', [PendudukController::class, 'index'])->name('penduduk');
    Route::get('tambahpenduduk', [PendudukController::class, 'tambah'])->name('tambahpenduduk');
    Route::post('creatependuduk', [PendudukController::class, 'proses_tambah'])->name('creatependuduk');
    Route::get('detailpenduduk/{id}', [PendudukController::class, 'detail'])->name('detailpenduduk');
    Route::get('editpenduduk/{id}', [PendudukController::class, 'edit'])->name('editpenduduk');
    Route::post('updatependuduk/{id}', [PendudukController::class, 'proses_edit'])->name('updatependuduk');
    Route::get('hapuspenduduk/{id}', [PendudukController::class, 'hapus'])->name('hapuspenduduk');
    Route::get('cari', [PendudukController::class, 'cari'])->name('cari');

    Route::get('/getKabupaten/{id}', [PendudukController::class, 'getKabupaten']);
    Route::get('/getKecamatan/{id}', [PendudukController::class, 'getKecamatan']);
    Route::get('/getKelurahan/{id}', [PendudukController::class, 'getKelurahan']);

    Route::get('kartukeluarga', [KartuKeluargaController::class, 'index'])->name('kartukeluarga');
    Route::get('tambahkartukeluarga', [KartuKeluargaController::class, 'tambah'])->name('tambahkartukeluarga');
    Route::post('createkartukeluarga', [KartuKeluargaController::class, 'proses_tambah'])->name('createkartukeluarga');
    Route::get('detailkartukeluarga/{id}', [KartuKeluargaController::class, 'detail'])->name('detailkartukeluarga');
    Route::get('editkartukeluarga/{id}', [KartuKeluargaController::class, 'edit'])->name('editkartukeluarga');
    Route::post('updatekartukeluarga/{id}', [KartuKeluargaController::class, 'proses_edit'])->name('updatekartukeluarga');
    Route::get('hapuskartukeluarga/{id}', [KartuKeluargaController::class, 'hapus'])->name('hapuskartukeluarga');


    Route::get('pekerjaan', [PekerjaanController::class, 'index'])->name('pekerjaan');
    Route::get('tambahpekerjaan', [PekerjaanController::class, 'tambah'])->name('tambahpekerjaan');
    Route::post('createpekerjaan', [PekerjaanController::class, 'proses_tambah'])->name('createpekerjaan');
    Route::get('hapuspekerjaan/{id}', [PekerjaanController::class, 'hapus'])->name('hapuspekerjaan');

    Route::get('sektor', [SektorPekerjaanController::class, 'index'])->name('sektor');
    Route::get('tambahsektor', [SektorPekerjaanController::class, 'tambah'])->name('tambahsektor');
    Route::post('createsektor', [SektorPekerjaanController::class, 'proses_tambah'])->name('createsektor');
    Route::get('hapussektor/{id}', [SektorPekerjaanController::class, 'hapus'])->name('hapussektor');
});
