<?php

namespace App\Http\Controllers;

use App\Models\Cesta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CestyController extends Controller
{
    public function index() {
        return view("vsetky_cesty");
    }

    public function pridanie_cesty() {
        return view("pridanie_cesty");
    }

    public function pridaj_cestu(Request $request) {

        // Validácia vstupných dát
        $validatedData = $request->validate([
            'nazov_cesty' => 'required|max:255', // Názov cesty je povinný a môže mať max. 255 znakov
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
        $cesta->obrazok_url = $urlObrazku;
        $cesta->dlzka_trasy = $validatedData['dlzka_trasy'];
        $cesta->stav_cesty = $validatedData['stav_cesty'];
        $cesta->vytazenost = $validatedData['vytazenost'];
        $cesta->vhodne_pre_motorky = $validatedData['vhodne_pre_motorky'];
        $cesta->vhodne_cez_zimu = $validatedData['vhodne_cez_zimu'];
        $cesta->popularna_cesta = false;
        $cesta->save();

        return redirect('/')->with('status', 'Cesta bola úspešne vytvorená.');
    }
}
