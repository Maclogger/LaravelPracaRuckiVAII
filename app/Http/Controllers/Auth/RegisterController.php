<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Uzivatel;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    public function index()
    {
        return view('registracia');
    }

    public function registruj(Request $request) {

        // Validácia dát
        $validatedData = $request->validate([
            'meno' => 'required|max:255',
            'priezvisko' => 'required|max:255',
            'email' => 'required|email|unique:uzivatelia',
            'heslo' => 'required|min:4',
        ]);

        $uzivatel = new Uzivatel();
        $uzivatel->meno = $validatedData['meno'];
        $uzivatel->priezvisko = $validatedData['priezvisko'];
        $uzivatel->email = $validatedData['email'];
        $uzivatel->heslo = Hash::make($validatedData['heslo']); // Hashování hesla
        $uzivatel->save();
        return redirect('/')->with('status', 'Použivateľ bol úspešne zaregistrovaný.');
    }
}
