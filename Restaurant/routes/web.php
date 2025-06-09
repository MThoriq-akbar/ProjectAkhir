<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MejaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.main');
});


Route::resource('meja', MejaController::class);
Route::resource('kategori', KategoriController::class);
