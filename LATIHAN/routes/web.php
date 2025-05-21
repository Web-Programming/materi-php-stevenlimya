<?php

use App\Http\Controllers\MateriController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use Illuminate\Support\Facades\Route;

Route::resource('materi', MateriController::class);
Route::resource('prodi', ProdiController::class);
Route::resource('fakultas', FakultasController::class);
Route::resource('mhs', MahasiswaController::class);
Route::resource('dosen', DosenController::class);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('beranda', 
    [
        'name' => 'StevenLim',
        'email' => 'stevenlimya@gmail.com',
        'alamat' => 'Palembang']);
});

Route::get('/berita/', function ($id, $judul = null) {
    return view('berita', ['id' => $id, 'judul' => $judul]);
});