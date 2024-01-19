
<div class="row align-items-center custom-row pt-4 pb-4">
    <div class="col-md-6">
        <img src="{{ $cesta->obrazok_url }}" alt="{{ $cesta->nazov_cesty }}" class="img-fluid custom-img">
    </div>
    <div class="col-md-6 pt-4 pt-md-0">
        <h2> {{ $cesta->nazov_cesty }} </h2>
        <p> {{ $cesta->popis }} </p>
        <br>
        <a href="{{ route('cesta.zobraz_podrobnu_cestu', $cesta->id) }}" class="tlacitko_zobrazit_viac">Zobraziť viac</a>
    </div>
</div>
