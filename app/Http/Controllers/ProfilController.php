<?php

namespace App\Http\Controllers;

use App\Models\Uzivatel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    public function index() {
        return view("uzivatelia.profil");
    }

    public function upravUdaje(Request $request) {

        // Získajte ID aktuálneho užívateľa
        $userId = Auth::id();

        // Validácia dát
        $validatedData = $request->validate([
            'meno' => 'required|max:255',
            'priezvisko' => 'required|max:255',
            // Overenie, či je e-mail unikátny v tabuľke uzivatelia, okrem aktuálneho užívateľa
            'email' => 'required|email|unique:uzivatelia,email,' . $userId,
        ]);


        // Načítajte užívateľa z databázy
        $user = Uzivatel::find($userId);

        // Overenie, či užívateľ existuje
        if ($user) {
            // Aktualizovanie údajov užívateľa
            $user->meno = $validatedData['meno'];
            $user->priezvisko = $validatedData['priezvisko'];
            $user->email = $validatedData['email'];

            // Uloženie zmien
            $user->save();

            return redirect()->back()->with('status', 'Údaje boli úspešne aktualizované.');
        } else {
            // V prípade, že užívateľ nebol nájdený, vráťte chybovú správu
            return redirect()->back()->withErrors(['error', 'Užívateľ nebol nájdený.']);
        }
    }

    public function zmenHeslo(Request $request) {
        // Validácia dát
        $validatedData = $request->validate([
            'stareHeslo' => 'required',
            'noveHeslo' => 'required|min:8|different:stareHeslo',
        ]);

        // Overenie, či staré heslo je správne
        if (!Hash::check($validatedData['stareHeslo'], Auth::user()->heslo)) {
            return back()->withErrors(['stareHeslo' => 'Zadané staré heslo nie je správne.']);
        }

        // Aktualizácia hesla
        $user = Auth::user();
        $user->heslo = Hash::make($validatedData['noveHeslo']);
        $user->save();

        // Presmerovanie s úspešnou správou
        return back()->with('status', 'Heslo bolo úspešne zmenené.');
    }

    public function nahrajProfilovku(Request $request)
    {
        $request->validate([
            'profileImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $obrazok = $request->file('profileImage');
        $nazovSouboru = time().'.'.$obrazok->getClientOriginalExtension();
        $urlObrazku = 'images/profilovky/' . $nazovSouboru;


        $user = Auth::user();

        if ($user->ikonka_url != 'images/profilovky/default.png') {
            if (file_exists(public_path($user->ikonka_url))) {
                unlink(public_path($user->ikonka_url));
            }
        }

        $obrazok->move(public_path('images/profilovky/'), $nazovSouboru);

        $user->ikonka_url = $urlObrazku;
        $user->save();

        return response()->json(['success'=>$urlObrazku]);
    }

    public function zmazSa()
    {
        if (Auth::check()) {
            Auth::user()->delete();
            return redirect("/")->with('status', 'Váš účet bol oficiálne zmazaný.');
        }
        return redirect()->back()->with('status', "Musíte byť prihlásený.");
    }
}
