@extends('layouts.app')

@section('content')


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


@endsection
