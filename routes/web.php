<?php

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

Route::get('/DataMember', function () {
    return view('pages.DataMember');
});

Route::get('/DataBuku', function () {
    return view('pages.DataBuku');
});


