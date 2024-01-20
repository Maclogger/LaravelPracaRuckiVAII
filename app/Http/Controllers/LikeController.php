<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\LikeKomentara;

class LikeController extends Controller
{
    public function pridaj_alebo_zrus_like_na_komentar(Request $request)
    {
        // Confirm user is authenticated
        if (!Auth::check()) {
            return response()->json(['error' => 'Užívateľ musí byť prihlásený'], 401);
        }

        $validated = $request->validate([
            'id_komentaru' => 'required|integer',
        ]);

        $comment = Komentar::find($validated['id_komentaru']);
        if (!$comment) {
            return response()->json(['error' => 'Komentár nebol nájdený'], 404);
        }

        $existingLike = LikeKomentara::where('id_komentaru', $validated['id_komentaru'])->where('id_autora_liku', Auth::id())->exists();

        if ($existingLike) {
            // Používateľ už "likol" tento komentár, takže by sme mali "like" odstrániť
            LikeKomentara::where('id_komentaru', $validated['id_komentaru'])->where('id_autora_liku', Auth::id())->delete();
            $comment->decrement('pocet_likov');
            return response()->json(['status' => 'Like bol odstránený a počet likov v komentári bol znížený', "pocet_likov" => $comment->pocet_likov]);
        } else {
            // Používateľ ešte "nedal" like tomuto komentáru, takže by sme mali "like" pridať
            $like = new LikeKomentara();
            $like->id_komentaru = $validated['id_komentaru'];
            $like->id_autora_liku = Auth::id();
            $like->save();
            $comment->increment('pocet_likov');
            return response()->json(['status' => 'Like bol pridaný a počet likov v komentári bol zvýšený', "pocet_likov" => $comment->pocet_likov]);
        }
    }
}
