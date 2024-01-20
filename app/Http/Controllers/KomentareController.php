<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use App\Models\LikeKomentara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\KomentareLiky; // include KomentareLiky model

class KomentareController extends Controller
{
    public function pridaj_komentar(Request $request)
    {


        // Validácia vstupných dát
        $validatedData = $request->validate([
            'text' => 'required|string|max:10000', // Text komentáru, je povinný a môže mať max. 10 000 znakov
            'id_cesty' => 'required|exists:cesty,id',
        ]);

        $komentar = new Komentar();
        $komentar->id_cesty = $validatedData['id_cesty'];
        $komentar->id_autora = Auth::id();
        $komentar->text = $validatedData['text'];
        $komentar->pocet_likov = 0;
        if ($komentar->id_autora == null) {
            return redirect()->back()->withErrors(["error" => "Na pridanie komentáru musíte byť prihlásený!!!"]);
        }
        $komentar->save();

        return redirect()->back()->with('status', 'Komentár bol úspešne pridaný.');
    }

    public function odstran_komentar($id)
    {
        $komentar = Komentar::find($id);

        if ($komentar) {
            // zmazania záznamov z tabuľky M:N liky najprv
            LikeKomentara::where('id_komentaru', $id)->delete();

            $komentar->delete();
            return redirect()->back()->with('status', 'Komentár bol úspešne odstránený.');
        } else {
            return redirect()->back()->with('error', 'Komentár sa nenašiel.');
        }
    }

}
