@extends('layouts.app')

@auth
@section('content')


    <section id="prihlasenie_sekcia">
        <div class="formular_sekcia row d-flex align-items-center justify-content-center bg-cover bg-center">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-8 col-lg-4">
                    <div class="registraciaDiv my-5">
                        <div class="card-body">
                            <h2 class="card-title text-center mb-4 fw-bold">Vytvorenie novej cesty</h2>
                            <form name="pridaj_cestu" id="pridaj_cestu" method="post" enctype="multipart/form-data" action="{{  url('/pridaj_cestu')  }}">
                                @csrf
                                <div class="form-group">
                                    <label for="nazov_cesty">Názov cesty:</label>
                                    <input type="text" class="form-control input-registracie" id="nazov_cesty" name="nazov_cesty" placeholder="Zadajte názov cesty" required>
                                </div>
                                <div class="form-group">
                                    <label for="popis">Popis cesty:</label>
                                    <textarea class="form-control input-registracie" id="popis" name="popis" placeholder="Zadajte popis tejto cesty" rows="4" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="obrazok_url">Obrázok: </label>
                                    <input type="file" class="form-control input-registracie" id="obrazok_url" name="obrazok_url" accept="image/png, image/jpeg, image/gif, image/jpg" required>
                                </div>
                                <div class="form-group">
                                    <label for="dlzka_trasy">Dĺžka trasy (km):</label>
                                    <input type="text" class="form-control input-registracie" name="dlzka_trasy" id="dlzka_trasy" pattern="\d+(\.\d+)?" placeholder="Zadajte dĺžku trasy v kilometroch" required title="Prosím zadajte dĺžku trasy ako celé alebo desatinné číslo.">
                                </div>
                                <div class="form-group">
                                    <label for="stav_cesty">Stav Cesty:</label>
                                    <select class="form-control input-registracie" id="stav_cesty" name="stav_cesty">
                                        <option value="">Vyberte stav cesty</option>
                                        <option value="Lepšej cesty niet">Lepšej cesty niet</option>
                                        <option value="Úžasná">Úžasná</option>
                                        <option value="Dobrá">Dobrá</option>
                                        <option value="Uspokojivá">Uspokojivá</option>
                                        <option value="Asfalt nič moc, ale stojí za to">Afalt nič moc, ale stojí za to</option>
                                        <option value="zla">Zlá</option>
                                        <option value="Kritická">Kritická</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="vytazenost">Vyťaženosť:</label>
                                    <span id="vytazenostValue">50 %</span>
                                    <input type="range" class="form-control-range custom-slider" id="vytazenost" name="vytazenost" min="0" max="100" step="1" oninput="updateVytazenostValue(this.value);">
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6 col-sm-12">
                                        <div class="form-check">
                                            <input type="hidden" name="vhodne_pre_motorky" value="0"> <!-- Pridané skryté pole -->
                                            <label class="form-check-label" for="vhodne_pre_motorky">Vhodná pre motorky:</label>
                                            <input type="checkbox" class="form-check-input input-registracie" id="vhodne_pre_motorky" name="vhodne_pre_motorky" value="1">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                        <div class="form-check">
                                            <input type="hidden" name="vhodne_cez_zimu" value="0"> <!-- Pridané skryté pole -->
                                            <label class="form-check-label" for="vhodne_cez_zimu">Vhodné cez zimu:</label>
                                            <input type="checkbox" class="form-check-input input-registracie" id="vhodne_cez_zimu" name="vhodne_cez_zimu" value="1">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn tlacitkoRegistrovat">Vytvoriť cestu</button>
                            </form>
                        </div>
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









