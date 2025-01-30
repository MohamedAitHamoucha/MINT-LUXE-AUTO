<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @yield('styles')
    <title>@yield('title') - MINT LUXE AUTO</title>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <a href="/"><img src="{{ asset('images/white-logo.png') }}" alt="logo" width="120" height="80"></a>
        </div>
        <div class="menu-btn"></div>
        <div class="home">
            <a href="/">Accueil</a>
        </div>
        <div class="cars">
            <a href="{{ route('cars.index') }}">Voitures</a>
        </div>
        <div class="about">
            <a href="/about">À propos</a>
        </div>
        <div class="contact">
            <a href="/contact">Contact</a>
        </div>
    </div>

    @yield('content')

    <div class="footer">
        <img src="{{ asset('images/white-logo.png') }}" alt="logo" width="120px" height="70px">
        <p>Copyright © 2024 Mint Luxe Auto. All Rights Reserved.</p>
        <a href="#"><img src="{{ asset('images/up-arrow.png') }}" alt="up"></a>
    </div>

    <script>
    document.querySelector('.menu-btn').addEventListener('click', function() {
        document.querySelector('.navbar').classList.toggle('active');
    });
    </script>
    @yield('scripts')
</body>
</html> 