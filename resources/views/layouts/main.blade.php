

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>


    <link rel="stylesheet" href="/app.css">
    {{-- <script src="/app.js"></script> --}}
</head>

<div class="container">
    <nav class="navbar navbar-expand-lg bg-light">
        <a class="navbar-brand" href="#">Navbar</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">

            <div class="row">
                <div class="col-sm-7"></div>

                <div class="col-sm-5">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link" href="/" role="button">
                                Home
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/despre_noi" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Despre Noi
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/istoria">Istoria</a></li>
                                <li><a class="dropdown-item" href="/organigrama">Organigrama</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/rapoarte">Rapoarte de activitate</a></li>
                                <li><a class="dropdown-item" href="/galeria">Galeria foto</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="/servicii" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Servicii
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/ingrijiri-comunitare">Ingrijiri comunitare</a></li>
                                <li><a class="dropdown-item" href="/ingrijiri-paliative">Ingrijiri paliative</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/informatii">Informatii pentru pacienti</a></li>
                                <li><a class="dropdown-item" href="/servicii-prestate">Calitatea serviciilor prestate</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Legislatie
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Donatii
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Parteneriat
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Colaborare</a></li>

                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Voluntariat</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Contacte
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                RM
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">RU</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </nav>
</div>

@yield('content')
//footer
</html>
