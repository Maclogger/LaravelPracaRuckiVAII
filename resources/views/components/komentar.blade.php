<div class="d-flex flex-start mb-4">
    <div class="ikonka_profilovka_div">
        <img class="rounded-circle me-3 ikonka_profilovka profilovka_komentar"
             src="../{{ $komentar->url_obrazku_autora }}" alt="avatar"/>
    </div>
    <div class="card w-100 p-4 komentar_div">
        <div class="">
            <h5>
                <span>
                    {{ $komentar->meno_autora }}
                </span>
                @if($cesta->author == $komentar->id_autora)
                    <span class="admin-label boxovy_shadow">Autor</span>
                @endif
            </h5>
            <p class="small mt-3">{{ $komentar->created_at->diffForHumans() }}</p>

            <p>
                {{ $komentar->text }}
            </p>

            <div class="d-flex justify-content-between align-items-center mt-3">
                <div class="d-flex align-items-center tlacitko_like_komentar" data-like="{{ $komentar->is_liked }}" data-comment-id="{{ $komentar->id }}">
                    <a class="link-muted me-2">
                        <i class="bi bi-heart-fill me-1 ikonkaSrdiecko" style="color: {{ $komentar->is_liked ? '#FF9138' : '#3A3E4B' }};"></i>
                        <span class="pocet-likov">
                                                    {{ $komentar->pocet_likov }}
                                                </span>
                    </a>
                </div>
                @if($komentar->id_autora == Auth::id())
                    <a href="/odstran_komentar/{{$komentar->id}}" class="link-muted" onclick="return potvrditMazanie('Naozaj chcete zmazať tento komentár?');">
                        <i class="bi bi-trash-fill ikonkaReply"></i> Zmazať
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>
