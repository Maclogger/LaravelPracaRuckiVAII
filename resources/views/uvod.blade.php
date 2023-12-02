@extends('layouts.app')

@section('content')

@if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@if(session('prihlaseny'))
    <div class="alert alert-success">
        {{ session('prihlaseny') }}
    </div>
@endif

<section id="uvodna_obrazovka_sekcia">
    <div class="bocneMenucko d-flex position-fixed">
        <div class="d-flex flex-column icon-container p-2" id="socialWrap">
            <a class="ikonkaMenu icon-height my-3" href="https://www.facebook.com/">
                <i class="bi bi-facebook"></i>
            </a>
            <a class="ikonkaMenu icon-height my-3" href="https://www.instagram.com/">
                <i class="bi bi-instagram"></i>
            </a>
            <a class="ikonkaMenu icon-height my-3" href="https://www.youtube.com/">
                <i class="bi bi-youtube"></i>
            </a>
            <a class="ikonkaMenu icon-height my-3" href="https://github.com/Maclogger/SemestralnaPracaRuckiVAII">
                <i class="bi bi-github"></i>
            </a>
        </div>
    </div>

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

</section>
@endsection
