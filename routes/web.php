<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('uvod');
})->name('uvod');



Route::get('/cesta', function () {
    return view('cesta');
})->name('cesta');


Route::get('/registracia', [RegisterController::class, 'index'])->name('registracia');
Route::post('/registruj', [RegisterController::class, 'registruj']);

Route::get('/prihlasenie', [LoginController::class, 'index'])->name('prihlasenie');
Route::post('/prihlas', [LoginController::class, 'prihlas']);
Route::get('/odhlas', [LoginController::class, 'odhlas']);

Route::get('/profil', [ProfilController::class, 'index']);

Route::post('/upravUdaje', [ProfilController::class, 'upravUdaje']);
Route::post('/zmenHeslo', [ProfilController::class, 'zmenHeslo']);



