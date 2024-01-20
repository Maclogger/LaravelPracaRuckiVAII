@extends('layouts.app')

@section('content')

    <div id="popularne_cesty" class="container custom-container pt-5">

        @auth
        <a href="/pridanie_cesty" class="floating-button_add boxovy_shadow">
            <i class="bi bi-plus"></i>
        </a>
        @endauth

        <!-- Nadpis Sekcie -->
        <div class="row mb-4">
            <div class="col">
                <h1 class="text-center mb-4">Všetky cesty</h1>
            </div>
        </div>

        @foreach($cesty as $cesta)
                @component('components.zobrazenie_jednej_cesty', ['cesta' => $cesta])
                @endcomponent
        @endforeach
    </div>

@endsection

