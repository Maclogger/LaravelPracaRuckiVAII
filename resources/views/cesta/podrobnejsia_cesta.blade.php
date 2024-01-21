@extends('layouts.app')

@section('content')

    <div class="sekcia">

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
                    <div class="row riadokAtribut align-items-center">
                        <p class="w-auto">Dĺžka trasy:</p>
                        <p class="w-auto atributVytazenosti boxovy_shadow"> {{ $cesta->dlzka_trasy }} km</p> <!-- bg-success pre zelenú, bg-warning pre oranžovú, bg-danger pre červenú -->
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

                    <!-- Autor cesty -->
                    <div class="row align-items-center mb-3 mt-2">
                        <p class="w-auto autor_atribut_nazov">Autor: </p>
                        <div class="w-auto atributVytazenosti boxovy_shadow d-flex tlacitko_na_chat">
                            <div class="ikonka_profilovka_podrobnejsia_cesta_div">
                                <img class="rounded-circle ikonka_profilovka_podrobnejsia_cesta boxovy_shadow"
                                     src="{{'../'.$cesta->autor->ikonka_url}}"
                                     alt="avatar"/>
                            </div>
                            <p class="atributAutor" >{{ $cesta->autor->meno }}</p>
                        </div>
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

        @if(Auth::check() and Auth::user()->jeAdmin())
            <div class="mt-4 zaobleneRohy popis_cesty_div">
                <form method="POST" action="/pridaj_link_mapy">
                    @csrf
                    <div class="d-flex align-items-center">
                        Vložte Link Mapy:
                        <input type="hidden" name="id_cesty" value="{{$cesta->id}}">
                        <label for="link_mapy"></label>
                        <textarea id="link_mapy" name="link_mapy" rows="2" class="textarea_mapy_link boxovy_shadow me-4"></textarea>

                        <div class="d-flex" style="white-space: nowrap;">
                            <label for="top_cesta"></label>
                            <p class="me-2">TOP cesta?</p>
                            <input type="hidden" name="top_cesta" value="0">
                            <input type="checkbox" id="top_cesta" name="top_cesta" class="me-4" {{ $cesta->popularna_cesta ? 'checked' : '' }} value="1">
                        </div>


                        <input type="submit" class="tlacitko_odoslat_link_mapy boxovy_shadow" value="Odoslať">
                    </div>
                </form>
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
                        @component('components.komentar', ['komentar' => $komentar, 'cesta' => $cesta])
                        @endcomponent
                    @endforeach

                    {{-- vytvorenie vlastného komentáru --}}
                    @component('components.pridanie_komentaru_okno', ['cesta' => $cesta])
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
@endsection
