<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('Beranda', ['name' => 'Steven lim', 'email' => 'Stevenlimya@gmail.com', 'alamat' => 'talang buruk']);
});

Route::get('/berita/{id}/{judul?}', function ($id, $judul = null) {
    return view('berita', ['id' => $id, 'judul' => $judul]);
});
