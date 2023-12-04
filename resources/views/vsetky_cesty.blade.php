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

        <!-- Riadok 1 -->
        <div class="row align-items-center custom-row pt-4 pb-4">
            <div class="col-md-6">
                <img src="/images/pezinska_baba.jpg" alt="Obrázok 1" class="img-fluid custom-img">
            </div>
            <div class="col-md-6 pt-4 pt-md-0">
                <h2>Pezínska Baba</h2>
                <p>Preteknite sa so slnkom pozdĺž srdcaubijúcej trasy Pezínska Baba, kde sa zelené panoráma stretáva s modrým obzorom a motorový rev spieva pesničku slobody.</p>
            </div>
        </div>

        <!-- Riadok 2 -->
        <div class="row align-items-center custom-row pt-4 pb-4 clickable-div" data-content="cesta_sekcia">
            <div class="col-md-6">
                <img src="/images/sturec.jpg" alt="Obrázok 2" class="img-fluid custom-img">
            </div>
            <div class="col-md-6 pt-4 pt-md-0">
                <h2>Šturec</h2>
                <p>Na motorke cez Šturec sa cítite ako súčasť nádherného prírodného plátna, s vetrom, ktorý vám šepká príbehy hôr a s cestami, ktoré vás vedú k nekonečným objavom.</p>
            </div>
        </div>

        <!-- Riadok 3 -->
        <div class="row align-items-center custom-row pt-4 pb-4">
            <div class="col-md-6">
                <img src="/images/viadukt.jpeg" alt="Obrázok 3" class="img-fluid custom-img">
            </div>
            <div class="col-md-6 pt-4 pt-md-0">
                <h2>Viadukt Telgrát</h2>
                <p>Neodolateľná krása cesty vedúcej pozdĺž Viaduktu - Telgrát vás pozýva zastaviť sa a zachytiť okamih, kde sa technické dielo stretáva s prirodzenou eleganciou krajiny, vytvárajúc tak perfektnú kompozíciu pre každého fotografa.</p>
            </div>
        </div>
    </div>




















@endsection
