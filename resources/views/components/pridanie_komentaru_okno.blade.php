<div class="d-flex flex-start mb-4 pt-3">
    @auth
        <img class="rounded-circle shadow-1-strong me-3 boxovy_shadow"
             src="../{{Auth::user()->ikonka_url}}" alt="avatar" width="65"
             height="65" />
    @endauth
    @guest
        <img class="rounded-circle shadow-1-strong me-3 boxovy_shadow"
             src="{{asset("images/profilovky/default.png")}}" alt="avatar" width="65"
             height="65" />
    @endguest

    <div class="card w-100 pridanie_komentara_div boxovy_shadow">
        <h2>Pridanie komentára</h2>
        <form method="POST" action="/pridaj_komentar">
            @csrf
            <div class="form-group">
                <label for="text" class="textik12rem">Komentár:</label>
                <textarea class="form-control" id="text" name="text" rows="5"></textarea>
                <input type="hidden" name="id_cesty" id="id_cesty" value="{{ $cesta->id }}">
            </div>
            @guest
                <button type="submit" class="btn btn-primary tlacitko_profilove" disabled style="background-color: grey; border:none;">Odoslať (musíte byť prihlásený)</button>
            @else
                <button type="submit" class="btn btn-primary tlacitko_profilove">Odoslať</button>
            @endguest
        </form>
    </div>
</div>
