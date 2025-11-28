<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('jenis-berita', [App\Http\Controllers\JenisBeritaController::class, 'index'])->name('jenis-berita.index');
    Route::get('jenis-berita/create', [App\Http\Controllers\JenisBeritaController::class, 'create'])->name('jenis-berita.create');
    Route::post('jenis-berita', [App\Http\Controllers\JenisBeritaController::class, 'store'])->name('jenis-berita.store');
    Route::get('jenis-berita/{jenisBerita}', [App\Http\Controllers\JenisBeritaController::class, 'show'])->name('jenis-berita.show');
    Route::get('jenis-berita/{jenisBerita}/edit', [App\Http\Controllers\JenisBeritaController::class, 'edit'])->name('jenis-berita.edit');
    Route::put('jenis-berita/{jenisBerita}', [App\Http\Controllers\JenisBeritaController::class, 'update'])->name('jenis-berita.update');
    Route::delete('jenis-berita/{jenisBerita}', [App\Http\Controllers\JenisBeritaController::class, 'destroy'])->name('jenis-berita.destroy');

    Route::get('berita', [App\Http\Controllers\BeritaController::class, 'index'])->name('berita.index');
    Route::get('berita/create', [App\Http\Controllers\BeritaController::class, 'create'])->name('berita.create');
    Route::post('berita', [App\Http\Controllers\BeritaController::class, 'store'])->name('berita.store');
    Route::get('berita/{berita}', [App\Http\Controllers\BeritaController::class, 'show'])->name('berita.show');
    Route::get('berita/{berita}/edit', [App\Http\Controllers\BeritaController::class, 'edit'])->name('berita.edit');
    Route::put('berita/{berita}', [App\Http\Controllers\BeritaController::class, 'update'])->name('berita.update');
    Route::delete('berita/{berita}', [App\Http\Controllers\BeritaController::class, 'destroy'])->name('berita.destroy');
});
