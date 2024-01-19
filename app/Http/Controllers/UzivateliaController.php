<?php

namespace App\Http\Controllers;

use App\Models\Uzivatel;
use Illuminate\Http\Request;

class UzivateliaController extends Controller
{
    public function index() {
        $uzivatelia = Uzivatel::withCount('cesty')->with('cesty')->get();
        return view('uzivatelia.ostatni_uzivatelia', compact('uzivatelia'));
    }

}
