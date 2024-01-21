<?php

namespace App\Http\Controllers;

use App\Models\Cesta;
use App\Models\Rekord;
use App\Models\Uzivatel;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class RekordController extends Controller
{
    public function index()
    {
        $rekordy = Rekord::all();

        foreach($rekordy as $rekord) {
            $rekord->cesta = Cesta::find($rekord->id_cesty);
            $rekord->uzivatel = Uzivatel::find($rekord->id_autora_rekordu);
        }

        $cesty = Cesta::all();
        return view('rekordy.rekordy', compact('rekordy', 'cesty'));
    }

    public function pridaj_rekord(Request $request)
    {
        if (!Auth::check()) {
            return redirect("/")->with('status', 'Musíte byť prihlásený!');
        }

        $validated = $request->validate([
            'id_cesty' => 'required|exists:cesty,id',
            'hodiny' => 'required',
            'minuty' => 'required',
            'sekundy' => 'required',
        ]);

        $rekord = new Rekord();
        $rekord->id_cesty = $validated['id_cesty'];
        $rekord->id_autora_rekordu = Auth::user()->id;
        $rekord->cas = Carbon::createFromTime($validated['hodiny'], $validated['minuty'],$validated['sekundy']);
        $rekord->save();

        return redirect("/rekordy")->with('status', 'Rekord bol úspešne pridaný.');
    }

    public function zmaz_rekord($id)
    {
        $rekord = Rekord::all()->where('id', $id)->first();

        if (!$rekord) {
            return redirect()->back()->with('status', 'Daný rekord neexistuje!');
        }
        if (Auth::check() and Auth::user()->id != $rekord->id_autora_rekordu) {
            return redirect()->back()->with('status', 'Tento rekord ste nevytvorili vy!');
        }

        $rekord->delete();

        return redirect()->back()->with('status', 'Rekord bol úspešne zmazaný.');
    }

}
