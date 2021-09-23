<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BSCH GOSPEL BAND</title>
    <link rel="stylesheet" href="{{ asset('css/all-ftws.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}">
    <link rel="icon" href="{{ asset('images/logoImage.png') }}" />
</head>

<body class="is-boxed has-animations">
    <div class="body-wrap">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
                            <a href="#">
                                <img class="header-logo-image" src="images/logoImage2.png" alt="Logo">
                            </a>
                        </h1>
                    </div>
                    <div class="brand header-brand">
                        <h1 class="m-0">
                            <a href="#">
                                <img class="header-logo-image" src="images/logoImage.png" alt="Logo">
                            </a>
                        </h1>
                    </div>
                    <div class="brand header-brand">
                        <h1 class="m-0">
                            <a href="#">
                                <img class="header-logo-image" src="images/logoImage2.png" alt="Logo">
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <section class="hero">
                <div class="container">
                    <div class="hero-inner">
                        <div class="hero-copy">
                            <h1 class="hero-title mt-0">LE GROUPE MUSICAL D'ILÉ-OFÈ</h1>
                            <p class="hero-paragraph">Un groupe de jeunes musiciens instrumentistes et chanteurs travaillant ardument et zélés pour le Seigneur Dieu</p>
                        </div>
                        <div class="hero-figure anime-element">
                            <svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
                                <rect width="528" height="396" style="fill:transparent;" />
                            </svg>
                            <div class="hero-figure-box hero-figure-box-01" data-rotation="45deg"></div>
                            <div class="hero-figure-box hero-figure-box-02" data-rotation="-45deg"></div>
                            <div class="hero-figure-box hero-figure-box-03" data-rotation="0deg"></div>
                            <div class="hero-figure-box hero-figure-box-04" data-rotation="-135deg"></div>
                            <div class="hero-figure-box hero-figure-box-05"></div>
                            <div class="hero-figure-box hero-figure-box-06"></div>
                            <div class="hero-figure-box hero-figure-box-07"></div>
                            <div class="hero-figure-box hero-figure-box-08" data-rotation="-22deg"></div>
                            <div class="hero-figure-box hero-figure-box-09" data-rotation="-52deg"></div>
                            <div class="hero-figure-box hero-figure-box-10" data-rotation="-50deg"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="features section">
                <div class="container">
                    <div class="features-inner section-inner has-bottom-divider">
                        <div class="features-wrap">
                            <div class="feature text-center is-revealing">
                                <a href="{{ route('worked_out_songs') }}" class="feature-inner">
                                    <div class="feature-icon">
                                        <img src="images/feature-icon-01.svg" alt="Feature 01">
                                    </div>
                                    <h4 class="feature-title mt-24">MORCEAUX MUSICAUX COPIÉS</h4>
                                    <p class="text-sm mb-0">Cette section présente les morceaux qui ont déjà été copiés au sein du groupe</p>
                                </a>
                            </div>
                            <div class="feature text-center is-revealing">
                                <a href="{{ route('home') }}" class="feature-inner">
                                    <div class="feature-icon">
                                        <img src="images/feature-icon-02.svg" alt="Feature 02">
                                    </div>
                                    <h4 class="feature-title mt-24">MORCEAUX MUSICAUX EN COPIE</h4>
                                    <p class="text-sm mb-0">Cette section présente les morceaux qui sont en cours de copie</p>
                                </a>
                            </div>
                            <a href="{{ route('home') }}" class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <img src="images/feature-icon-04.svg" alt="Feature 04">
                                    </div>
                                    <h4 class="feature-title mt-24">EVÉNEMENTS EN VUE</h4>
                                    <p class="text-sm mb-0">Cette section présente les évenements importants pour lesquels le groupe doit se préparer</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="pricing section">
                <div class="container-sm">
                    <div class="pricing-inner section-inner">
                        <div class="pricing-header text-center">
                            <h2 class="section-title mt-0">ANNONCE IMPORTANTE</h2>
                            <p class="section-paragraph mb-0">Veuillez lire attentivement</p>
                        </div>
                        <div class="pricing-tables-wrap">
                            <div class="pricing-table">
                                <div class="pricing-table-inner is-revealing">
                                    <div class="pricing-table-main">
                                        <div class="pricing-table-header pb-24">
                                            <div class="pricing-table-price text-center">PRINCIPES CLÉS DU GROUPE</div>
                                        </div>
                                        <ul class="px-4 pricing-table-features list-reset text-xs">
                                            <li>
                                                <span>Sanctification du corps et de l'esprit avant toute session de répétition</span>
                                            </li>
                                            <li>
                                                <span>Précision et haute quantification dans les copies de morceaux et les performances</span>
                                            </li>
                                            <li>
                                                <span>Musique jouée dans un esprit d'humilité et respectant le feeling Gospel afin de toucher des âmes</span>
                                            </li>
                                            <li>
                                                <span>Obligation de fournir des efforts constants afin de produire une meilleure musique qui plaise à Dieu</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="site-footer">
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
    </div>
    <script src="{{ asset('js/anime.min.js') }}"></script>
    <script src="{{ asset('js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('js/main.min.js') }}"></script>
    <script src="{{ asset('js/all-ftws.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>