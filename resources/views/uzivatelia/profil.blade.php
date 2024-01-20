@extends('layouts.app')
@auth
@section('content')



    <section id="sekcia_profilove_informacie">
        <div class="row moj_row">
            <div class="row justify-content-center mt-4 moj_row">
                <div class="col-12 col-md-6 col-lg-4 profilove_informacie zaobleneRohy">
                    <h2 class="text-center mb-4">Profilové informácie</h2>
                    <div class="row prvy_riadok_profilove_inf">
                        <div class="col-lg-9">
                            <p><strong>Meno:</strong> {{ Auth::user()->meno }} {{ Auth::user()->priezvisko }}</p>
                            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                            <p><strong>Dátum registrácie:</strong> {{ Auth::user()->created_at }}</p>
                        </div>
                        <div class="col-lg-3">
                            <div class="ikonka_profilovka_div_profil">
                                <div class="overlay_profilova_ikonka rounded-circle">
                                    <div class="text textik13rem">Zmeniť</div>
                                </div>
                                <img id="profileImage" class="rounded-circle profilovy_obrazok ikonka_profil_obrazok_kvoli_okamzitej_zmene"
                                     src="{{'../'.Auth::user()->ikonka_url}}"
                                     alt="avatar"/>
                                <input type="file" id="imageUpload" style="display: none;" name="profileImage" accept="image/png, image/jpeg, image/gif, image/jpg">
                            </div>
                        </div>
                    </div>

                    <a id="editaciaBtn" class="btn mt-3 tlacitko_profilove">Upraviť údaje</a>
                    <a id="zmenaHeslaBtn" class="btn mt-3 tlacitko_profilove">Zmeniť heslo</a>
                    <a href="/moje_cesty" class="btn mt-3 tlacitko_profilove">Moje cesty</a>
                    <a href="/odhlas" class="btn mt-3 tlacitko_profilove">Odhlásiť sa</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Modálne okno pre úpravu údajov -->
    <div id="editModal" class="modal">
        <div class="row moj_row">
            <div class="row justify-content-center mt-4 moj_row">
                <div class="col-12 col-md-6 col-lg-4 profilove_editacne_informacie zaobleneRohy">
                    <form name="upravUdaje" id="upravUdaje" method="post" action="{{  url('/upravUdaje')  }}">
                        @csrf
                        <h2 class="text-center mt-1 mb-4">Úprava údajov</h2>
                        <div class="input-group">
                            <label class="vacsi_text" for="meno"><strong>Meno:</strong></label>
                            <input class="ciernyText zabolenyRoh" type="text" id="meno" name="meno" value="{{ Auth::user()->meno }}">
                        </div>

                        <div class="input-group">
                            <label class="vacsi_text" for="priezvisko"><strong>Priezvisko:</strong></label>
                            <input class="ciernyText zabolenyRoh" type="text" id="priezvisko" name="priezvisko" value="{{ Auth::user()->priezvisko }}">
                        </div>

                        <div class="input-group">
                            <label class="vacsi_text" for="email"><strong>Email:</strong></label>
                            <input class="ciernyText zabolenyRoh" type="email" id="email" name="email" value="{{ Auth::user()->email }}">
                        </div>

                        <button type="submit" class="btn mt-3 tlacitko_profilove tlacitko_editacia">Uložiť údaje</button>
                        <span class="close_profilove_informacie_js btn mt-3 tlacitko_profilove tlacitko_editacia">Zrušiť</span>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="editZmenaHelsaModal" class="modal">
        <div class="row moj_row">
            <div class="row justify-content-center mt-4 moj_row">
                <div class="col-12 col-md-6 col-lg-4 profilove_editacne_informacie zaobleneRohy">
                    <form name="zmenHeslo" id="zmenHeslo" method="post" action="{{  url('/zmenHeslo')  }}">
                        @csrf
                        <h2 class="text-center mt-1 mb-4">Zmena hesla</h2>

                        <div class="input-group">
                            <label class="vacsi_text" for="stareHeslo"><strong>Staré heslo:</strong></label>
                            <input class="ciernyText zabolenyRoh" type="password" id="stareHeslo" name="stareHeslo">
                        </div>

                        <div class="input-group">
                            <label class="vacsi_text" for="noveHeslo"><strong>Nové heslo:</strong></label>
                            <input class="ciernyText zabolenyRoh" type="password" id="noveHeslo" name="noveHeslo">
                        </div>

                        <div class="input-group">
                            <label class="vacsi_text" for="noveHeslo2"><strong>Nové heslo znova:</strong></label>
                            <input class="ciernyText zabolenyRoh" type="password" id="noveHeslo2" name="noveHeslo2">
                        </div>

                        <button type="submit" class="btn mt-3 tlacitko_profilove tlacitko_editacia">Zmeniť heslo</button>
                        <spat class="close_profilove_informacie_js btn mt-3 tlacitko_profilove tlacitko_editacia">Zrušiť</spat>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@endauth
@guest
    <div class="alert alert-danger">
        <ul class="error_ul">
            <li class="error_li"><i class="bi bi-exclamation-octagon-fill"></i> Bohužiaľ najprv, sa musíte prihlásiť.</li>
        </ul>
    </div>
@endguest

