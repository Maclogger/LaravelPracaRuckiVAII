<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>TOP Cesty</title>
</head>
<body data-bs-spy="scroll" data-bs-target="#yourNavID">

<nav class="fixed-top">
    <div class="navbar navbar-expand-lg pt-3">
        <div class="container-fluid">
            <a href="#" data-content="uvodna_obrazovka_sekcia" class="brand text-decoration-none d-block d-lg-none fw-bold fs-1 logoVlavoHore">
                <span style="color: white;">TOP</span> Cesty
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul id="nav-length" class="navbar-nav justify-content-between border-top border-2 text-center">
                    <li class="nav-item">
                        <a href="{{ route('uvod') }}" class="nav-link border-hover py-3 text-white">Domov</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link border-hover py-3 text-white">Diskusia</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link border-hover py-3 text-white">Najnovšie Objavy</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link border-hover py-3 text-white">Novinky</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('registracia') }}" data-content="registracia_sekcia" class="nav-link border-hover py-3 text-white">Registrácia</a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <div class="row sirkaIkoniekVNave mx-auto pb-3">

                            <a class="ikonkaMenu icon-height my-2 col" href="https://www.facebook.com/">
                                <i class="bi bi-facebook"></i>
                            </a>

                            <a class="ikonkaMenu icon-height my-2 col" href="https://www.instagram.com/">
                                <i class="bi bi-instagram"></i>
                            </a>

                            <a class="ikonkaMenu icon-height my-2 col" href="https://www.youtube.com/">
                                <i class="bi bi-youtube"></i>
                            </a>
                            <a class="ikonkaMenu icon-height my-2 col" href="https://github.com/Maclogger/SemestralnaPracaRuckiVAII">
                                <i class="bi bi-github"></i>
                            </a>

                        </div>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <a href="#" class="btn prihlasenie_button">
                            <i class="bi bi-person-circle"></i>
                            Prihlásenie
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

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


<div class="content">
    @yield('content') {{-- Obsah stránky --}}
</div>


<footer class="text-center text-white py-3 footer">
    <!-- Copyright -->
    <p class="mb-0 textOpacnyHighlight">&copy; 2023 TOPCesty.sk | Všetky práva vyhradené.</p>
</footer>

</body>
</html>
