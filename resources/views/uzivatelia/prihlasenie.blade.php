@extends('layouts.app')

@section('content')
    <section id="prihlasenie_sekcia">
        <div class="formular_sekcia row d-flex align-items-center justify-content-center bg-cover bg-center">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-8 col-lg-4">
                    <div class="registraciaDiv my-5">
                        <div class="card-body">
                            <h2 class="card-title text-center mb-4 fw-bold">Prihlásenie užívateľa</h2>
                            <form name="prihlas" id="prihlas" method="post" action="{{  url('/prihlas')  }}">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Emailová adresa:</label>
                                    <input type="email" class="form-control input-registracie" id="email" name="email" placeholder="Zadajte email" required>
                                </div>

                                <div class="form-group">
                                    <label for="heslo">Heslo:</label>
                                    <input type="password" class="form-control input-registracie" name="heslo" id="heslo" placeholder="Zadajte heslo" required>
                                </div>

                                <button type="submit" class="btn tlacitkoRegistrovat">Prihlásiť sa</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
