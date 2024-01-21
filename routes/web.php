<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CestyController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\KomentareController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RekordController;
use App\Http\Controllers\UzivateliaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CestyController::class, "indexTop"])->name('uvod');

Route::get('/registracia', [RegisterController::class, 'index'])->name('uzivatelia.registracia');
Route::post('/registruj', [RegisterController::class, 'registruj']);

Route::get('/prihlasenie', [LoginController::class, 'index'])->name('uzivatelia.prihlasenie');
Route::post('/prihlas', [LoginController::class, 'prihlas']);
Route::get('/odhlas', [LoginController::class, 'odhlas']);

Route::get('/profil', [ProfilController::class, 'index']);

Route::post('/upravUdaje', [ProfilController::class, 'upravUdaje']);
Route::post('/zmenHeslo', [ProfilController::class, 'zmenHeslo']);

Route::get('/vsetky_cesty', [CestyController::class, 'index'])->name("cesta.vsetky_cesty");

Route::get('/pridanie_cesty', [CestyController::class, 'pridanie_cesty'])->name("cesta.pridanie_cesty");

Route::post('/pridaj_cestu', [CestyController::class, 'pridaj_cestu']);

Route::get('/moje_cesty', [CestyController::class, 'indexMojeCesty'])->name("cesta.moje_cesty");

Route::get('/cesty/{id}', [CestyController::class, 'zobraz_podrobnu_cestu'])->name('cesta.zobraz_podrobnu_cestu');

Route::get('/cesty/odstran_cestu/{id}', [CestyController::class, 'odstran_cestu'])->name('cesta.odstran_cestu');

Route::get('/ostatni_uzivatelia', [UzivateliaController::class, 'index'])->name('uzivatelia.ostatni_uzivatelia');

Route::post('/pridaj_komentar', [KomentareController::class, 'pridaj_komentar'])->name('pridaj_komentar');

Route::get('/odstran_komentar/{id}', [KomentareController::class, 'odstran_komentar'])->name('pridaj_komentar');

Route::post('/uzivatel/nahraj_profilovku', [ProfilController::class, 'nahrajProfilovku'])->name('nahraj-profilovku');

Route::post('/pridaj_alebo_zrus_like_na_komentar', [LikeController::class, 'pridaj_alebo_zrus_like_na_komentar'])->name('pridaj_alebo_zrus_like_na_komentar');

Route::get('/rekordy', [RekordController::class, 'index'])->name('rekordy.rekordy');

Route::post('/pridaj_link_mapy', [CestyController::class, 'pridaj_link_mapy'])->name('cesty.pridaj_link_mapy');

Route::get('/zmazat_svoj_profil', [ProfilController::class, 'zmazSa'])->name('zmazat_svoj_profil');

Route::post('/pridaj_rekord', [RekordController::class, 'pridaj_rekord'])->name('pridaj_rekord');

Route::get("zmazat_rekord/{id}", [RekordController::class, 'zmaz_rekord'])->name('zmaz_rekord');
