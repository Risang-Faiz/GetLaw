<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\BantuanController;
use App\Http\Controllers\SumberDayaController;
use App\Http\Controllers\LembagaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('berita', BeritaController::class);
Route::resource('konsultasi', KonsultasiController::class);
Route::get('bantuan', [BantuanController::class, 'form'])->name('bantuan.form');
Route::post('bantuan', [BantuanController::class, 'store'])->name('bantuan.store');
Route::get('sumberdaya', [SumberDayaController::class, 'index'])->name('sumberdaya.index');
Route::get('lembaga', [LembagaController::class, 'index'])->name('lembaga.index');

