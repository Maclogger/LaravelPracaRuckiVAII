@extends('layouts.app')

@section('content')

    <div id="popularne_cesty" class="container custom-container pt-5">

        @auth
        <a href="/pridanie_cesty" class="floating-button_add">
            <i class="bi bi-plus"></i>
        </a>
        @endauth

        <!-- Nadpis Sekcie -->
        <div class="row mb-4">
            <div class="col">
                <h1 class="text-center mb-4">Všetky Cesty</h1>
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

@endsection
