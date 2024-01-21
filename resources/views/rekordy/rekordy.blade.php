@extends('layouts.app')


@section('content')




    <div id="popularne_cesty" class="container custom-container pt-5">

        <div class="card w-100 pridanie_rekordu_div boxovy_shadow mb-5">
            <h2 class="mb-3">Pridanie rekordu</h2>
            <form method="POST" action="/pridaj_rekord">
                @csrf
                <div class="form-group d-flex align-items-center">
                    <!-- Dropdown menu pre výber ciesty -->
                    <label class="me-2" for="id_cesty">Cesta:</label>
                    <select class="form-control me-4" name="id_cesty" id="id_cesty">
                        @foreach($cesty as $cesta)
                            <option value="{{ $cesta->id }}">{{ $cesta->nazov_cesty }}</option>
                        @endforeach
                    </select>

                    <!-- Výber hodín -->
                    <label class="me-2" for="hodiny">Hodiny:</label>
                    <select class="form-control me-4" name="hodiny" id="hodiny">
                        @for ($i = 0; $i <= 23; $i++)
                            <option value="{{ $i }}">{{ sprintf("%02d", $i) }}</option>
                        @endfor
                    </select>

                    <!-- Výber minút -->
                    <label class="me-2" for="minuty">Minúty:</label>
                    <select class="form-control me-4" name="minuty" id="minuty">
                        @for ($i = 0; $i <= 59; $i++)
                            <option value="{{ $i }}">{{ sprintf("%02d", $i) }}</option>
                        @endfor
                    </select>

                    <!-- Výber sekúnd -->
                    <label class="me-2" for="sekundy">Sekundy:</label>
                    <select class="form-control me-4" name="sekundy" id="sekundy">
                        @for ($i = 0; $i <= 59; $i++)
                            <option value="{{ $i }}">{{ sprintf("%02d", $i) }}</option>
                        @endfor
                    </select>
                </div>

                @guest
                    <!-- Tlačidlo na odoslanie formulára (deaktivované pre neprihlásených užívateľov) -->
                    <button type="submit" class="btn btn-primary tlacitko_profilove" disabled style="background-color: grey; border:none;">Odoslať (musíte byť prihlásený)</button>
                @else
                    <!-- Tlačidlo na odoslanie formulára pre prihlásených užívateľov -->
                    <button type="submit" class="btn btn-primary tlacitko_profilove">Odoslať</button>
                @endguest
            </form>
        </div>

        @foreach($rekordy as $rekord)
            <div class="row align-items-center custom-row pt-4 pb-4 h-100">
                <div class="d-flex user-info-container h-100">
                    <div class="h-100">
                        <a href="#" class="btn">
                            <div class="d-flex align-items-center">
                                <div class="ikonka_profilovka_div">
                                    <img class="rounded-circle me-4 ikonka_profilovka"
                                         src="{{ $rekord->uzivatel->ikonka_url }}"
                                         alt="avatar" width="65" height="65" />
                                </div>
                                <div class="text-hover textik13rem">{{$rekord->uzivatel->meno}}</div>
                            </div>
                        </a>
                    </div>


                    <a href="/cesty/{{ $rekord->cesta->id }}">
                        <div class="h-100 d-flex align-items-center div_cesty_rekordy zaobleneRohy boxovy_shadow">
                            <img class="obrazokCesty zaobleneRohy obrazok_cesty_maly me-4"
                                 src="../{{ $rekord->cesta->obrazok_url }}"
                                 alt=" {{ $rekord->cesta->nazov_cesty }}"
                            >
                            <p  class="normalheight">Cesta: {{ $rekord->cesta->nazov_cesty }}</p>
                        </div>
                    </a>

                    <div class="h-100">
                        <p class="normalheight">Čas: <span class="orange-text"> {{ $rekord->cas }}</span></p>
                    </div>

                    @if(Auth::check() and Auth::user()->id == $rekord->id_autora_rekordu)
                        <div class="h-100">
                            <a href="zmazat_rekord/{{$rekord->id}}" class="normalheight zmazat_rekord_tlacitko zaobleneRohy">Zmazať</a>
                        </div>
                    @endif


                </div>
            </div>
        @endforeach
    </div>


@endsection
