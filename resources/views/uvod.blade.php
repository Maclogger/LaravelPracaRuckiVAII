@extends('layouts.app')

@section('content')



<section id="uvodna_obrazovka_sekcia">
    <div id="uvodna_obrazovka">
        <div class="container-fluid">
            <div class="row h-100">
                <!-- Ľavý stĺpec s textom -->
                <div class="col-md-6 d-flex align-items-center content-text">
                    <div>
                        <span class="brand text-decoration-none d-block fw-bold fs-1">
                            <span style="color: white;">TOP</span> Cesty
                        </span>
                        <p>Nájdite pekné miesta, kde si zajazdiť a podeľte sa o svoje zážitky.</p>
                    </div>
                </div>

                <!-- Pravý stĺpec s obrázkom mapy Slovenska -->
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                    <img src="../images/mapka_white_orange.png" alt="Mapa Slovenska s peknými cestami" class="img-fluid"> <!-- Odkaz na obrázok mapy Slovenska -->
                </div>
            </div>
        </div>
    </div>

    <div id="popularne_cesty" class="container custom-container pt-5">

        <!-- Nadpis Sekcie -->
        <div class="row">
            <div class="col">
                <h1 class="text-center mb-4">Populárne cesty</h1>
            </div>
        </div>

        @foreach($cesty as $cesta)
            <div class="row align-items-center custom-row pt-4 pb-4">
                <div class="col-md-6">
                    <img src="{{ $cesta->obrazok_url }}" alt="{{ $cesta->nazov_cesty }}" class="img-fluid custom-img">
                </div>
                <div class="col-md-6 pt-4 pt-md-0">
                    <h2> {{ $cesta->nazov_cesty }} </h2>
                    <p> {{ $cesta->popis }} </p>
                </div>
            </div>
        @endforeach

    </div>

</section>
@endsection
