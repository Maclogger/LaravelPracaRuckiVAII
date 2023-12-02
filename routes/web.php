<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('uvod');
})->name('uvod');



Route::get('/cesta', function () {
    return view('cesta');
})->name('cesta');




Route::get('/registracia', [RegisterController::class, 'index'])->name('registracia');
Route::post('/registruj', [RegisterController::class, 'registruj']);



