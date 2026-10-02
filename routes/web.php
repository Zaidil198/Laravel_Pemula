<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\JadwalKuliahController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\KelasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/h', function () {
    return ('Hello World');
});

Route::get('/students', [StudentController::class, 'index']);

// Route::get('/mahasiswa', [MahasiswaController::class, 'Index']);

// Route::resource('/mahasiswa', MahasiswaController::class);

Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('dosen', DosenController::class);
Route::resource('matakuliah', MatkulController::class);
Route::resource('jadwalKuliah', JadwalKuliahController::class);
Route::resource('ruangan', RuanganController::class)->parameters([
    'kelas' => 'kls',
]);
Route::resource('kelas', KelasController::class);