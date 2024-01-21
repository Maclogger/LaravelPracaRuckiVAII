@extends('layouts.app')

@section('content')

    @auth
    <!-- Nadpis Sekcie -->
    <div class="row">
        <div class="col">
            <h1 class="text-center">Moje cesty</h1>
        </div>
    </div>


    <div id="popularne_cesty" class="container custom-container pt-5">
        @foreach($cesty as $cesta)
            @component('components.zobrazenie_jednej_cesty_with_edit', ['cesta' => $cesta])
            @endcomponent
        @endforeach
    </div>
    @endauth

    @guest
        <div class="alert alert-danger">
            <ul class="error_ul">
                <li class="error_li"><i class="bi bi-exclamation-octagon-fill"></i> Bohužiaľ najprv, sa musíte prihlásiť.</li>
            </ul>
        </div>
    @endguest


@endsection
