<?php

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

// Route::get('/', function () {
//     return view('layouts.main');
// });

// home
Route::get('/', [HomeController::class, 'index']);

//tentang
Route::get('/tentang/sejarah', function () {
    return view('utama.about.sejarah');
});
Route::get('/tentang/vimi', function () {
    return view('utama.about.vimi');
});
Route::get('/tentang/siswa', function () {
    return view('utama.about.siswa');
});
Route::get('/tentang/guru', function () {
    return view('utama.about.guru');
});
Route::get('/tentang/karyawan', function () {
    return view('utama.about.karyawan');
});
// Route::get('/tentang/visi&misi', function () {
//     return view('utama.about.vimi');
// });

//Kegiatan
Route::get('/kegiatan/agenda', function () {
    return view('utama.kegiatan.karyawan');
});
Route::get('/kegiatan/pengumuman', function () {
    return view('utama.about.karyawan');
});
Route::get('/kegiatan/dokumentasi', function () {
    return view('utama.kegiatan.dokumentasi');
});
Route::get('/kegiatan/ektrakulikuler', function () {
    return view('utama.about.karyawan');
});


