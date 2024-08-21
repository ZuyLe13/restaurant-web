<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WowWraps</title>

    {{-- Embed Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Bodoni:wght@400;600;700&family=Playball&family=Plus+Jakarta+Sans:wght@400;500&display=swap"
        rel="stylesheet">

    {{-- Styles --}}
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    {{-- Header --}}
    <header class="header header--sticky">
        <div class="container">
            <div class="header-top">

                {{-- Navigation --}}
                <nav class="nav__list">
                    <div class="nav-item">
                        <a class="nav__link" href="/">Home</a>
                    </div>
                    <div class="nav-item">
                        <a class="nav__link" href="/menus">Menu</a>
                    </div>
                    <div class="nav-item">
                        <a class="nav__link" href="/menus/create">Create</a>
                    </div>
                    <div class="nav-item">
                        <a class="nav__link" href="/about">About</a>
                    </div>
                    <div class="nav-item">
                        <a class="nav__link" href="#!">Contact</a>
                    </div>
                </nav>

                {{-- Logo --}}
                <a class="nav__logo" href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo">
                </a>

                <div class="nav-booking">
                    <label class="nav__open">11:24 we’re open</label>
                    <a class="nav-booking__link" href="#!">Table Reservation</a>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    {{-- Footer --}}
    <footer class="footer">
        <div class="container">
            <div class="footer__row">

                {{-- Column 1 --}}
                <div class="footer__column">
                    <div class="footer__column-wrap">
                        <a href="#!">
                            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="footer__logo">
                        </a>
                        <a href="#!">
                            <p class="footer__name">WowWraps</p>
                        </a>
                    </div>

                    <p class="footer__download">Download the WowWraps app today.</p>
                    <div class="footer__media">
                        <a href="#!">
                            <img src="{{ asset('icons/apple.svg') }}" alt="App Store">
                        </a>
                        <a href="#!">
                            <img src="{{ asset('icons/google_play.svg') }}" alt="Google Play">
                        </a>
                    </div>
                </div>

                {{-- Column 2 --}}
                <div class="footer__column">
                    <p class="footer__title">Usefull Link</p>
                    <a class="footer__link" href="#!">Home</a>
                    <a class="footer__link" href="#!">About Us</a>
                    <a class="footer__link" href="#!">Services</a>
                    <a class="footer__link" href="#!">Booking</a>
                    <a class="footer__link" href="#!">Menu</a>
                </div>

                {{-- Column 3 --}}
                <div class="footer__column">
                    <p class="footer__title">Contact Info</p>
                    <a class="footer__link" href="#!">Silk St, Barbican, London EC2Y 8DS, UK</a>
                    <a class="footer__link" href="#!">info@example.com</a>
                    <a class="footer__link" href="#!">800-123-45-678</a>
                </div>

                {{-- Column 4 --}}
                <div class="footer__column">
                    <p class="footer__title">Follow us</p>
                    <a class="footer__link" href="#!">Facebook</a>
                    <a class="footer__link" href="#!">Instagram</a>
                    <a class="footer__link" href="#!">Linkedin</a>
                    <a class="footer__link" href="#!">Twitter</a>
                </div>

                {{-- Column 5 --}}
                <div class="footer__column">
                    <p class="footer__title">Legal</p>
                    <a class="footer__link" href="#!">Website by uihut.com</a>
                    <a class="footer__link" href="#!">©2022. All Rights Reserved</a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
