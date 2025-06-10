<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservasiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.main');
});


Route::resource('meja', MejaController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('menu', MenuController::class);
Route::resource('reservasi', ReservasiController::class);
