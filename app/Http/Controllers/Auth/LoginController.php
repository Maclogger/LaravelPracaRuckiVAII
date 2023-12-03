<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('prihlasenie');
    }

    public function prihlas(Request $request)
    {
        // Validácia dát
        $validatedData = $request->validate([
            'email' => 'required|email',
            'heslo' => 'required',
        ]);

        if (Auth::attempt(['email' => $validatedData['email'], 'password' => $validatedData['heslo']])) {
            // Přihlášení proběhlo úspěšně
            $request->session()->regenerate();

            // Přesměrování na zamýšlenou stránku nebo na výchozí domovskou stránku
            return redirect()->intended('/')->with(["status" => "Prihlásenie prebehlo úspešne. :D"]);
        }

        // Pokud přihlášení selhalo, vrátit zpět s chybou
        return back()->withErrors([
            'email' => 'Email alebo heslo je nesprávne. :(',
        ]);

    }

    public function odhlas() {
        Auth::logout();
        return redirect('/')->with('status', 'Použivateľ bol úspešne odhlásený.');
    }
}
