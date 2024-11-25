<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BS CHOIR GOSPEL BAND</title>
    <link rel="stylesheet" href="{{ asset('css/all-ftws.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/card.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}">
    <link rel="icon" href="{{ asset('images/logoImage.png') }}" />
    <script src="{{ asset('js/anime.min.js') }}"></script>
    <script src="{{ asset('js/scrollreveal.min.js') }}"></script>
    @stack('styles')
</head>

<body class="body-bg">
    <header class="site-header header-bg">
        <div class="container">
            <div class="site-header-inner">
                <div class="brand header-brand">
                    <!-- <h1 class="m-0">
                        <a href="#">
                            <img class="header-logo-image" src="{{ asset('images/logoImage2.png') }}" alt="Logo">
                        </a>
                    </h1> -->
                </div>
                <div class="brand header-brand">
                    <h1 class="m-0">
                        <a href="#">
                            <img class="header-logo-image" src="{{ asset('images/logoImage.png') }}" alt="Logo">
                        </a>
                    </h1>
                </div>
                <div class="brand header-brand">
                    <!-- <h1 class="m-0">
                        <a href="#">
                            <img class="header-logo-image" src="{{ asset('images/logoImage2.png') }}" alt="Logo">
                        </a>
                    </h1> -->
                </div>
            </div>
        </div>
    </header>
    <nav>
        <ul>
            <li>
                <a>
                    <form class="mt-3">
                        <button type="button" class="text-bolder text-white">MENU</button>
                    </form>
                </a>
                <ul class="submenu">
                    <li>
                        <form class="mt-3" action="{{ route('home') }}" method="get">
                            @csrf
                            <button type="submit" class="text-bolder text-white">MORCEAUX COPIÉS</button>
                        </form>
                    </li>
                    <li>
                        <form class="mt-3" action="{{ route('unworked_out_songs') }}" method="get">
                            @csrf
                            <button type="submit" class="text-bolder text-white">MORCEAUX À COPIER</button>
                        </form>
                    </li>
                    <!-- <li>
                        <form class="mt-3" action="" method="get">
                            @csrf
                            <button type="submit" class="text-bolder text-white">ÉVÉNEMENTS IMPORTANTS EN VUE</button>
                        </form>
                    </li> -->
                    <!-- For Admin -->
                    @auth
                    @if (count(auth()->user()->roles) == 2)
                    <li>
                        <form class="mt-3" action="{{ route('song_add_view') }}" method="get">
                            @csrf
                            <button type="submit" class="text-bolder text-white">AJOUTER UN MORCEAU À COPIER</button>
                        </form>
                    </li>
                    <!-- <li>
                        <form class="mt-3" action="" method="get">
                            @csrf
                            <button type="submit" class="text-bolder text-white">AJOUTER UN ÉVÉNEMENT IMPORTANT EN VUE</button>
                        </form>
                    </li> -->
                    @endif
                    @endauth
                </ul>
            </li>
            @auth
            @if (count(auth()->user()->roles) == 2)
            <li>
                <a>
                    <form class="mt-3" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="text-bolder text-white">DÉCONNEXION</button>
                    </form>
                </a>
            </li>
            @endif
            @endauth
        </ul>
    </nav>

    @yield('content')

    <footer class="site-footer theme-ground">
        <div class="container">
            <div class="site-footer-inner">
                <div class="brand footer-brand">
                    <a href="#">
                        <img class="header-logo-image" src="{{ asset('images/logo.svg') }}" alt="Logo">
                    </a>
                </div>
                <ul class="footer-links list-reset">
                    <li>
                        <a style="text-decoration: none;" href="#">donaldkant2000@gmail.com</a>
                    </li>
                    @auth
                    <li>
                        <a style="text-decoration: none;" href="#">{{ auth()->user()->firstname }}</a>
                    </li>
                    @endauth
                </ul>
                <ul class="footer-social-links list-reset">
                    <li>
                        <a href="#">
                            <span class="screen-reader-text">Facebook</span>
                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z" fill="#0270D7" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="screen-reader-text">Twitter</span>
                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z" fill="#0270D7" />
                            </svg>
                        </a>
                    </li>
                </ul>
                <div class="footer-copyright">&copy; 2021 SYSLABS LLC, tous droits réservés</div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/all-ftws.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/anime.min.js') }}"></script>
    <script src="{{ asset('js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>