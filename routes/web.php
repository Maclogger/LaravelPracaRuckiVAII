<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('uvod');
})->name('uvod');

Route::get('/registracia', function () {
    return view('registracia');
})->name('registracia');

Route::get('/cesta', function () {
    return view('cesta');
})->name('cesta');
