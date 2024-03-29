<?php

namespace App\Http\Controllers;

use App\Models\Cesta;
use App\Models\Komentar;
use App\Models\LikeKomentara;
use App\Models\Uzivatel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CestyController extends Controller
{
    public function index() {
        $cesty = Cesta::all(); // Získavanie všetkých cest z databázy
        return view('cesta.vsetky_cesty', compact('cesty')); // Predanie dát do šablóny
    }

    public function indexTop() {
        $cesty = Cesta::where('popularna_cesta', true)->get(); // Získavanie všetkých cest z databázy
        return view('uvod', compact('cesty')); // Predanie dát do šablóny
    }

    public function indexMojeCesty() {
        $cesty = Cesta::where('author', Auth::id())->get(); // Získavanie všetkých cest z databázy
        return view('cesta.moje_cesty', compact('cesty'));
    }

    public function pridanie_cesty() {
        return view("cesta.pridanie_cesty");
    }

    public function zobraz_podrobnu_cestu($id)
    {
        $cesta = Cesta::findOrFail($id); // Nájde cestu alebo vráti 404

        $komentare = Komentar::where('id_cesty', $cesta->id)->get();

        foreach ($komentare as $komentar) {
            $autor = Uzivatel::findOrFail($komentar->id_autora);
            $komentar->url_obrazku_autora = $autor->ikonka_url;
            $komentar->meno_autora = $autor->meno;

            $komentar->is_liked = LikeKomentara::where('id_komentaru', $komentar->id)->where('id_autora_liku', Auth::id())->exists();
        }

        $cesta->autor = Uzivatel::findOrFail($cesta->author);

        $cesta->komentare = $komentare;

        return view('cesta.podrobnejsia_cesta', compact('cesta'));
    }

    public function pridaj_cestu(Request $request) {
        if (!Auth::check()) {
            return redirect()->back()->withErrors(["error", 'Musíte byť prihlásený!']);
        }

        // Validácia vstupných dát
        $validatedData = $request->validate([
            'nazov_cesty' => 'required|max:255', // Názov cesty je povinný a môže mať max. 255 znakov
            'popis' => 'required|string|max:10000', // Popis cesty, je povinný a môže max. 10 000 znakov
            'obrazok_url' => 'required|image', // Obrázok je povinný, musí byť typu obrázka
            'dlzka_trasy' => 'required|numeric', // Dĺžka trasy je povinná a musí byť číselná hodnota
            'stav_cesty' => 'required|string', // Stav cesty je povinný a musí byť textový
            'vytazenost' => 'required|integer|min:0|max:100', // Vyťaženosť je povinná, musí byť celé číslo medzi 0 a 100
            'vhodne_pre_motorky' => 'required|boolean', // Vhodná pre motorky musí byť boolean (true/false)
            'vhodne_cez_zimu' => 'required|boolean', // Vhodná pre motorky musí byť boolean (true/false)
        ]);

        $urlObrazku = "";
        // Spracovanie nahrávania obrázku
        if ($request->hasFile('obrazok_url')) {
            $obrazok = $request->file('obrazok_url');
            $nazovSouboru = time().'.'.$obrazok->getClientOriginalExtension();
            $urlObrazku = 'images/cesty/' . $nazovSouboru;
            $tmpPath = $obrazok->getRealPath();

            // Získanie veľkosti súboru v kilobytoch
            $velkostSuboru = filesize($tmpPath) / 1024;

            // Vytvorenie nového obrázka z nahraného súboru
            $originalImage = imagecreatefromstring(file_get_contents($tmpPath));
            $originalWidth = imagesx($originalImage);
            $originalHeight = imagesy($originalImage);

            if ($velkostSuboru > 2048) {
                // Nastavte požadovanú šírku (napríklad 800px) a vypočítajte výšku
                $newWidth = 800;
                $newHeight = ($originalHeight / $originalWidth) * $newWidth;

                // Vytvorenie nového obrázka s novými rozmermi
                $newImage = imagecreatetruecolor($newWidth, $newHeight);
                imagecopyresampled($newImage, $originalImage, 0, 0, 0, 0, $newWidth, $newHeight, $originalWidth, $originalHeight);
            } else {
                // Ak je obrázok menší ako 2 MB, použite originálny obrázok
                $newImage = $originalImage;
            }

            // Uloženie obrázka
            switch ($obrazok->getClientOriginalExtension()) {
                case 'jpeg':
                case 'jpg':
                    imagejpeg($newImage, public_path($urlObrazku), 90); // 90 je kvalita
                    break;
                case 'png':
                    imagepng($newImage, public_path($urlObrazku));
                    break;
                case 'gif':
                    imagegif($newImage, public_path($urlObrazku));
                    break;
            }

            // Uvoľnenie pamäte
            imagedestroy($originalImage);
            if ($velkostSuboru > 2048) {
                imagedestroy($newImage);
            }
        }

        $cesta = new Cesta();
        $cesta->nazov_cesty = $validatedData['nazov_cesty'];
        $cesta->popis = $validatedData['popis'];
        $cesta->obrazok_url = $urlObrazku;
        $cesta->dlzka_trasy = $validatedData['dlzka_trasy'];
        $cesta->stav_cesty = $validatedData['stav_cesty'];
        $cesta->vytazenost = $validatedData['vytazenost'];
        $cesta->vhodne_pre_motorky = $validatedData['vhodne_pre_motorky'];
        $cesta->vhodne_cez_zimu = $validatedData['vhodne_cez_zimu'];
        $cesta->popularna_cesta = false;
        $cesta->author = Auth::id();
        $cesta->save();

        return redirect('/')->with('status', 'Cesta bola úspešne vytvorená.');
    }

    public function odstran_cestu($id) {
        if (!Auth::check()) {
            return redirect()->back()->withErrors(["error", 'Musíte byť prihlásený!']);
        }

        $cesta = Cesta::find($id);
        // Kontrola, či cesta existuje
        if (!$cesta) {
            return redirect()->back()->withErrors(['error' => 'Cesta nenájdená.']);
        }
        // Kontrola, či prihlásený užívateľ je aj autorom cesty
        if (Auth::id() !== $cesta->author) {
            return redirect()->back()->withErrors(['error' => 'Nemáte oprávnenie odstrániť túto cestu.']);
        }

        // zmazanie
        $cesta->delete();

        // Presmerovanie s oznámením o úspechu
        return redirect()->back()->with('status', 'Cesta bola úspešne odstránená.');
    }

    public function pridaj_link_mapy(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->back()->withErrors(["error", 'Musíte byť prihlásený!']);
        }
        if (!Auth::user()->jeAdmin()) {
            return redirect()->back()->withErrors(["error", "Pridávať link na mapu môže iba ADMIN!"]);
        }


        $validated = $request->validate([
            'id_cesty' => 'required|exists:cesty,id',
            'link_mapy' => 'max:100000',
            'top_cesta' => 'required|boolean'
        ]);



        // ak zadá priamo celý link admin z googlu a nie len link.
        if (str_starts_with($validated['link_mapy'], '<iframe src="')) {
            $start = strlen('<iframe src="');
            $end = strpos($validated['link_mapy'], '"', $start);
            $validated['link_mapy'] = substr($validated['link_mapy'], $start, $end-$start);
        }

        $cesta = Cesta::find($validated['id_cesty']);

        if ($validated['link_mapy']) {
            $cesta->mapa = $validated['link_mapy'];
        }
        $cesta->popularna_cesta = $validated['top_cesta'];
        $cesta->save();

        return redirect()->back()->with('status', 'Mapa bola úspešne zmenená.');
    }
}
