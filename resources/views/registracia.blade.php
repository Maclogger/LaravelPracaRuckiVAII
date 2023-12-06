@extends('layouts.app')

@section('content')
<section id="registracia_sekcia">
        <div class="formular_sekcia row d-flex align-items-center justify-content-center bg-cover bg-center">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-8 col-lg-6">
                    <div class="registraciaDiv my-5">
                        <div class="card-body">
                            <h2 class="card-title text-center mb-4 fw-bold">Registrácia užívateľa</h2>
                            <form name="registruj" id="registruj" method="post" action="{{  url('/registruj')  }}">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="meno">Meno:</label>
                                        <input type="text" class="form-control input-registracie" id="meno" name="meno" placeholder="Zadajte meno" required>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="priezvisko">Priezvisko:</label>
                                        <input type="text" class="form-control input-registracie" id="priezvisko" name="priezvisko" placeholder="Zadajte priezvisko" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email">Emailová adresa:</label>
                                    <input type="email" class="form-control input-registracie" id="email" name="email" placeholder="Zadajte email" required>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="heslo">Heslo:</label>
                                        <input type="password" class="form-control input-registracie" name="heslo" id="heslo" placeholder="Zadajte heslo" required>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label for="password2">Heslo (kontrola):</label>
                                        <input type="password" class="form-control input-registracie" id="password2" placeholder="Zadajte heslo (kontrola)" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input input-registracie" id="terms">
                                        <label class="form-check-label" for="terms">Zapamätať prihlásenie</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn tlacitkoRegistrovat">Registrovať sa</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
