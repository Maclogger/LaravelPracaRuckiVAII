<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CestyController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CestyController::class, "indexTop"])->name('uvod');

Route::get('/cesta', function () {
    return view('cesta.cesta');
})->name('cesta');


Route::get('/registracia', [RegisterController::class, 'index'])->name('registracia');
Route::post('/registruj', [RegisterController::class, 'registruj']);

Route::get('/prihlasenie', [LoginController::class, 'index'])->name('prihlasenie');
Route::post('/prihlas', [LoginController::class, 'prihlas']);
Route::get('/odhlas', [LoginController::class, 'odhlas']);

Route::get('/profil', [ProfilController::class, 'index']);

Route::post('/upravUdaje', [ProfilController::class, 'upravUdaje']);
Route::post('/zmenHeslo', [ProfilController::class, 'zmenHeslo']);

Route::get('/vsetky_cesty', [CestyController::class, 'index'])->name("cesta.vsetky_cesty");

Route::get('/pridanie_cesty', [CestyController::class, 'pridanie_cesty'])->name("cesta.pridanie_cesty");

Route::post('/pridaj_cestu', [CestyController::class, 'pridaj_cestu']);

Route::get('/moje_cesty', [CestyController::class, 'indexMojeCesty'])->name("cesta.moje_cesty");

Route::get('/cesty/{id}', [CestyController::class, 'show'])->name('cesta.show');

Route::get('/cesty/odstran_cestu/{id}', [CestyController::class, 'odstran_cestu'])->name('cesta.odstran_cestu');



















