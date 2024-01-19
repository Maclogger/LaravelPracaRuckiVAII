@extends('layouts.app')


@section('content')




    <div id="popularne_cesty" class="container custom-container pt-5 pb-4">

        <!-- Nadpis Sekcie -->
        <div class="row mb-4">
            <div class="col">
                <h1 class="text-center mb-4">Ostatní užívatelia</h1>
            </div>
        </div>

        @foreach($uzivatelia as $uzivatel)
            <div class="row align-items-center custom-row pt-4 pb-4 h-100">
                <div class="row user-info-container h-100">
                    <div class="col-3 h-100">
                        <p class="meno_hore_vlavo_ostatni_uzivatelia normalheight"><i class="bi bi-person-circle"></i> {{ $uzivatel->meno }}</p>
                    </div>

                    <div class="col-4 h-100">
                        <p class="normalheight">Počet pridaných ciest: <span class="orange-text">{{ $uzivatel->cesty_count }}</span></p>
                    </div>

                    <div class="col-4 h-100">
                        <p class="normalheight">Užívateľom už: <span class="orange-text"> {{ \Carbon\Carbon::now()->diffInDays($uzivatel->created_at) }}</span> dní</p>
                    </div>

                    <div class="col-1 h-100 text-end">
                        <a class="dropdown-tlacitko-ostatni-uzivatelia" data-uzivatel-id="{{ $uzivatel->id }}">
                            <i class="bi bi-chevron-double-down tlacitko-double-down-ostatni normalheight"></i>
                        </a>
                    </div>

                </div>
                <div class="dropdown-ostatni-uzivatelia" id="dropdown-{{ $uzivatel->id }}">
                    @if ($uzivatel->cesty_count > 0)
                        <div class="mt-5">
                            <h3 class="text-center mb-5 mt-5">Cesty vytvorené užívateľom {{ $uzivatel->meno }}</h3>
                            <ul class="mt-5">
                                @foreach($uzivatel->cesty as $cesta)
                                    <div class="container mt-3">
                                        <div class="row polozka_cesta_container" onclick="redirectTo('/cesty/{{ $cesta->id }}')">

                                            <!-- Image Column -->
                                            <div class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-center">
                                                <img src="{{ $cesta->obrazok_url }}" class="img-fluid obrazok-cesty-ostatni">
                                            </div>

                                            <!-- Name Column -->
                                            <div class="col-lg-3 col-md-6 col-sm-12 d-flex align-items-center">
                                                <h4>{{ $cesta->nazov_cesty }}</h4>
                                            </div>

                                            <!-- Description Column -->
                                            <div class="col-lg-4 col-md-12 d-flex align-items-center">
                                                <p class="textik12rem">{{ \Illuminate\Support\Str::limit($cesta->popis, 100, '...') }}</p>
                                            </div>

                                            <!-- Date Column -->
                                            <div class="col-lg-2 col-md-12 d-flex align-items-center custom-text-align-right">
                                                <p class="textik12rem">Pridané: {{ $cesta->created_at->format('d.m.Y H:i') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </ul>
                        </div>
                    @else
                        <div class="mt-5 text-center fs-5">Tento používateľ nevytvoril zatiaľ žiadnu cestu. :(</div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@endsection






















