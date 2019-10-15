<!DOCTYPE html>
<html lang="nl">

<head>

    <title>Bookzure - Vind hier de beste boeken van Nederland!</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/main.css') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta charset="utf-8" />
    <meta name="author" content="Latricha Seym" />
    <meta name="description" content="Vind bij Bookzure de gezelligste boeken voor jong en oud.
    Bij Bookzure heeft u keuze tussen de beste boeken van Nederland!" />
    <meta name="keywords" content="boeken, webshop, literatuur, romans, fantasy, thrillers, actie, kinderboeken" />

</head>

<body>

<header class="l-header">
    <svg class="nav-toggle icon" width="50" height="50"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
        <path d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0
           16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837
           0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837
           0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
        </path>
    </svg>

    <nav class="l-nav l-nav--top" role="navigation">

        <div class="l-container">

            <ul>

                <li class="l-nav__item"><a href="{{ url('over-ons') }}" title="Over ons">Over ons</a></li>
                <li class="l-nav__item"><a href="{{ url('nieuws') }}" title="Nieuws">Nieuws</a></li>
                <li class="l-nav__item"><a href="{{ url('vacatures') }}" title="Vacatures">Vacatures</a></li>
                <li class="l-nav__item"><a href="{{ url('klantenservice') }}" title="Klantenservice">Klantenservice</a></li>

            </ul>

            <ul class="right">

                <li class="l-nav__item">

                    <a href="{{ url('login') }}" title="Login">
                        <svg class="icon" width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">

                            <path d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48
                            48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16
                            89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144
                            144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z">
                            </path>

                        </svg>
                        &nbspLogin
                    </a>
                </li>

                <li class="l-nav__item"><a href="{{ url('cart') }}" title="Winkelwagen">
                        <svg class="icon" width="15" height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99
                            64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255
                            10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072
                            56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072
                            56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0
                            20.92-7.754 23.403-18.681z">
                            </path>
                        </svg>
                        Winkelwagen&nbsp;(<span id="cart-count">0</span>)
                    </a>
                </li>

            </ul>

        </div>

    </nav>

    <!--<h1>Logo/naam</h1>-->
    <div class="search-nav">
        <div class="l-container">
            <form method="post" action="">

                <div>

                    <input type="search" placeholder="Voer de naam van de book of auteur in..." />

                    <button onclick="" >
                        <svg class="icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7
                             44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0
                             92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208
                            336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                            </path>
                        </svg>
                    </button>

                </div>

            </form>
        </div>
    </div>

    <nav class="l-nav l-nav--bottom" role="navigation">
        <div class="l-container">
            <ul>

                <li class="l-nav__item">
                    <a href="{{ url('/') }}" title="Home">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="25" height="25">
                            <path d="M280.37 148.26L96
                             300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0
                            0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0
                             16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12
                               12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15
                                301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z">
                            </path>
                        </svg>
                    </a>
                </li>

                <li class="l-nav__item">
                    <a href="{{ url('boeken', ['literatuur']) }}" title="Literatuur">Literatuur</a>
                </li>

                <li class="l-nav__item">
                    <a href="{{ url('boeken', ['actie']) }}" title="Actie">Actie</a>
                </li>

                <li class="l-nav__item">
                    <a href="{{ url('boeken', ['fantasy']) }}" title="Fantasy">Fantasy</a>
                </li>

                <li class="l-nav__item">
                    <a href="{{ url('boeken', ['thrillers']) }}" title="Thrillers">Thrillers</a>
                </li>

                <li class="l-nav__item">
                    <a href="{{ url('boeken', ['romans']) }}" title="Romans">Romans</a>
                </li>

                <li class="l-nav__item">
                    <a href="{{ url('boeken', ['kinderboeken']) }}" title="Kinderboeken">Kinderboeken</a>
                </li>

                <li class="l-nav__item">
                    <a href="" title="Meer">Meer</a>
                </li>

            </ul>
        </div>

    </nav>

</header>
