<?php

use Illuminate\Support\Facades\Route;



Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/data_siswa', function () {
    return view('');
});

Route::get('/peminjaman', function () {
    return view('');
});

Route::get('/laporan', function () {
    return view('');
});


