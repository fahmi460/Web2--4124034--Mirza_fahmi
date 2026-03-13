<?php

use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KatalogController;

/* ROUTE STATIS */

Route::get('/about', function () {
    return "<h1>Halaman About</h1>";
    })->name('about.index');

    Route::get('/kontak', function () {
        return "<h1>Halaman Kontak</h1>";
        })->name('kontak.index');

        Route::get('/faq', function () {
            return "<h1>Halaman FAQ</h1>";
            })->name('faq.index');

            /* ROUTE DINAMIS */

            Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
            Route::get('/profil/{nim}', [ProfilController::class, 'show'])->name('profil.show');

            Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog.index');
            Route::get('/katalog/{id}', [KatalogController::class, 'show'])->name('katalog.show');