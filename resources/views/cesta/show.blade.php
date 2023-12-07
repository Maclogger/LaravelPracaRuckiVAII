@extends('layouts.app')

@section('content')

    <div class="row cesta_sekcia">

        <!-- Nadpis Sekcie -->
        <div class="row mt-3">
            <div class="col">
                <h1 class="text-center mb-4">{{ $cesta->nazov_cesty }}</h1>
            </div>
        </div>

        <div class="row mt-5 h-100 hlavna_cast_cesty">
            <div class="col-lg-6 lavaStranaAtributy">
                <img class="obrazokCesty" src="../{{ $cesta->obrazok_url }}" alt=" {{ $cesta->nazov_cesty }}">
            </div>

            <div class="col-lg-6 align-items-center pravaStranaAtributy">

                <div class="row zaboleneRohy h-100">

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
                        <p class="w-auto atributVytazenosti"> {{ $cesta->stav_cesty }} </p> <!-- bg-success pre zelenú, bg-warning pre oranžovú, bg-danger pre červenú -->
                    </div>

                    <!-- Vyťaženosť - farebné označenie -->
                    <div class="row riadokAtribut align-items-center">
                        <p class="w-auto">Vyťaženosť:</p>
                        <p class="w-auto atributVytazenosti"> {{ $cesta->vytazenost }} %</p> <!-- bg-success pre zelenú, bg-warning pre oranžovú, bg-danger pre červenú -->
                    </div>

                    <!-- Vhodné pre motorky - ikona alebo textový indikátor -->
                    <div class="row riadokAtribut align-items-center">
                        <p class="w-auto">Vhodné pre motorky:</p>
                        <i class="w-auto bi bi-check-circle-fill {{ $cesta->vhodne_pre_motorky ? "indicator-yes" : "indicator-no" }}"> {{ $cesta->vhodne_pre_motorky ? "Áno" : "Nie" }} </i>
                    </div>

                    <!-- Vhodné cez zimné obdobie - ikona alebo textový indikátor -->
                    <div class="row mb-4 riadokAtribut align-items-center">
                        <p class="w-auto">Vhodné cez zimné obdobie:</p>
                        <i class="bi w-auto bi-x-circle-fill {{ $cesta->vhodne_cez_zimu ? "indicator-yes" : "indicator-no" }}"> {{ $cesta->vhodne_cez_zimu ? "Áno" : "Nie" }} </i>
                    </div>

                </div>

            </div>
        </div>

    </div>













@endsection
