<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    });

    Route::get('/perkenalan', function () {
        return "Halo, nama saya Mirza Fahmi. Saya sedang belajar Laravel.";


        });
