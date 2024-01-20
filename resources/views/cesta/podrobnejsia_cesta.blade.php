@extends('layouts.app')

@section('content')

    <div class="cesta_sekcia">

        <!-- Nadpis Sekcie -->
        <div class="mt-3">
            <div class="col">
                <h1 class="text-center mb-4">{{ $cesta->nazov_cesty }}</h1>
            </div>
        </div>

        <div class="row mt-5 h-100 w-100 moj_row">
            <div class="col-lg-6 lavaStranaAtributy ">
                <img class="obrazokCesty zaobleneRohy" src="../{{ $cesta->obrazok_url }}" alt=" {{ $cesta->nazov_cesty }}">
            </div>
            <div class="col-lg-6 align-items-center pravaStranaAtributy">
                <div class="row zaobleneRohy h-100">

                    <!-- Dĺžka trasy - ukazateľ -->
                    <div class="row mt-4 riadokAtribut align-items-center">
                        <div class="col-12 col-md-4">
                            <p>Dĺžka trasy:</p>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="slider-container">
                                <div class="slider-fill dlzkaTrasy"></div>
                                <div class="slider-value ukazatel"> {{ $cesta->dlzka_trasy }} km</div> <!-- Aktuálna hodnota -->
                            </div>
                            <div class="d-flex justify-content-between">
                                <span class="ukazatel">0 km</span> <!-- Min hodnota -->
                                <span class="ukazatel">100 km</span> <!-- Max hodnota -->
                            </div>
                        </div>
                    </div>

                    <!-- Stav cesty - ukazateľ hodnotenia -->
                    <div class="row riadokAtribut align-items-center">
                        <p class="w-auto">Stav cesty:</p>
                        <p class="w-auto atributVytazenosti boxovy_shadow"> {{ $cesta->stav_cesty }} </p> <!-- bg-success pre zelenú, bg-warning pre oranžovú, bg-danger pre červenú -->
                    </div>

                    <!-- Vyťaženosť - farebné označenie -->
                    <div class="row riadokAtribut align-items-center">
                        <p class="w-auto">Vyťaženosť:</p>
                        <p class="w-auto atributVytazenosti boxovy_shadow"> {{ $cesta->vytazenost }} %</p> <!-- bg-success pre zelenú, bg-warning pre oranžovú, bg-danger pre červenú -->
                    </div>

                    <!-- Vhodné pre motorky - ikona alebo textový indikátor -->
                    <div class="row riadokAtribut align-items-center">
                        <p class="w-auto">Vhodné pre motorky:
                            <span>
                                <i class="w-auto bi {{ $cesta->vhodne_pre_motorky ? "bi-check-circle-fill indicator-yes" : "bi-x-circle-fill indicator-no" }}"></i>
                                {{ $cesta->vhodne_pre_motorky ? "Áno" : "Nie" }}
                            </span>
                        </p>
                    </div>
                    <!-- Vhodné cez zimné obdobie - ikona alebo textový indikátor -->
                    <div class="row riadokAtribut align-items-center">
                        <p class="w-auto">Vhodné cez zimné obdobie:
                            <i class="bi w-auto {{ $cesta->vhodne_cez_zimu ? "bi-check-circle-fill indicator-yes" : "bi-x-circle-fill indicator-no" }}"></i>
                            {{ $cesta->vhodne_cez_zimu ? "Áno" : "Nie" }}
                        </p>
                    </div>

                    <div class="row mb-4 riadokAtribut align-items-center">
                        <p class="w-auto">
                            Autor:
                            <span class="admin-label boxovy_shadow">
                                {{ $cesta->meno_autora }}
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="zaobleneRohy popis_cesty_div">
            {{ $cesta->popis }}
        </div>

        @if($cesta->mapa != null)
        <div class="mt-4">
            <iframe src="{{ $cesta->mapa }}" class="mapka_frame" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        @endif
    </div>

    <div class="komentare row">

        <!-- Nadpis Sekcie -->
        <div class="row mt-3">
            <div class="col-12">
                <h2 class="text-center mb-0 mt-5">Komentáre</h2>
            </div>
        </div>

        <div class="row py-5 text-dark mt-0 mb-0">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-11 col-lg-9 col-xl-7">

                    @foreach($cesta->komentare as $komentar)
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
                    @endforeach

                    {{-- vytvorenie vlastného komentáru --}}
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
                </div>
            </div>
        </div>
    </div>
@endsection
