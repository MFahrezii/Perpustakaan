<?php

use App\Http\Controllers\buku;
use App\Http\Controllers\siswa;
use Illuminate\Support\Facades\Route;



Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/buku', function () {
    return view('pages.buku');
});

Route::get('/DataMember', [siswa::class, 'index']);
Route::get('/DataMember/tambah', [siswa::class, 'tambah']);
Route::post('/DataMember/tambah', [siswa::class, 'create']);
Route::get('/DataMember/edit/{nis}', [siswa::class, 'edit']);
Route::post('/DataMember/edit/{nis}', [siswa::class, 'update']);
Route::get('/DataMember/hapus/{nis}', [siswa::class, 'hapus']);



Route::get('/DataBuku', [buku::class, 'index']);
Route::get('/DataBuku/tambah', [buku::class, 'tambah']);
Route::post('/DataBuku/tambah', [buku::class, 'create']);
Route::get('/DataBuku/edit/{kode_buku}', [buku::class, 'edit']);
Route::post('/DataBuku/edit/{kode_buku}', [buku::class, 'update']);
Route::get('/DataBuku/hapus/{kode_buku}', [buku::class, 'hapus']);


