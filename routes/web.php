<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('jenis-berita', [App\Http\Controllers\JenisBeritaController::class, 'index'])->name('jenis-berita.index');
Route::get('jenis-berita/create', [App\Http\Controllers\JenisBeritaController::class, 'create'])->name('jenis-berita.create');
Route::post('jenis-berita', [App\Http\Controllers\JenisBeritaController::class, 'store'])->name('jenis-berita.store');
Route::get('jenis-berita/{jenisBerita}', [App\Http\Controllers\JenisBeritaController::class, 'show'])->name('jenis-berita.show');
Route::get('jenis-berita/{jenisBerita}/edit', [App\Http\Controllers\JenisBeritaController::class, 'edit'])->name('jenis-berita.edit');
Route::put('jenis-berita/{jenisBerita}', [App\Http\Controllers\JenisBeritaController::class, 'update'])->name('jenis-berita.update');
Route::delete('jenis-berita/{jenisBerita}', [App\Http\Controllers\JenisBeritaController::class, 'destroy'])->name('jenis-berita.destroy');