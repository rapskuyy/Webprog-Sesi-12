<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/daftar-mahasiswa', [MahasiswaController::class, 'daftarMahasiswa']);
Route::get('/blog-mahasiswa', [MahasiswaController::class, 'blogMahasiswa']);
Route::get('/tabel-mahasiswa', [MahasiswaController::class, 'tabelMahasiswa'])->middleware('cek-role');
