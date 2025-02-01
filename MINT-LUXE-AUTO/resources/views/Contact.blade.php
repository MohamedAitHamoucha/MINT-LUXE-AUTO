<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <title>Contact Us</title>
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
    <div class="contactus">
        <h1>Contactez-nous</h1>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3395.6652050349244!2d-8.011288124825743!3d31.67037813971628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafef511efe1557%3A0x55e23cef028f5db0!2sMint%20Luxe%20Auto!5e0!3m2!1sen!2sma!4v1707501929416!5m2!1sen!2sma"
            width="95%" height="500hv" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        <h1>Envoyez-nous un message</h1>
        <div class="cont">   
            <div class="divform">
                <form action="{{ route('send.email') }}" method="POST">
                    @csrf
                    <table class="tabform">
                        <tr>
                            <td>
                                <input type="text" name="nom" placeholder="Nom..." required>
                            </td>
                            <td>
                                <input type="text" name="prenom" placeholder="Prenom..." required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="email" name="email" placeholder="Email..." required>
                            </td>
                            <td>
                                <input type="tel" name="telephone" placeholder="Telephone..." required>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <textarea name="message" placeholder="Message..." required></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="submit-container">
                                    <input type="submit" value="Envoyer">
                                    @if(session('success'))
                                        <div class="alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>
                @if(session('error'))
                    <div class="alert-error">
                        {{ session('error') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert-error">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="info">
                <p class="info1">Détails du contact</p>
                <table class="tabinfo">
                    <tr>
                        <td><img src="{{ asset('images/pin.svg') }}" alt="location"></td>
                        <td><span>Adresse</span></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><label>Pirelli, Riad El Ghizlan, Mag 8, Route de Casablanca a cote de, Marrakech 40000</label>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('images/mail.svg') }}" alt="location"></td>
                        <td><span>Email</span></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><label>mintluxeauto@example.com</label></td>
                    </tr>
                    <tr>
                        <td><img src="{{ asset('images/phone.svg') }}" alt="location"></td>
                        <td><span>Téléphone</span></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><label>0644449650</label></td>
                    </tr>
                </table>
                <p class="info2">Suivez-nous</p>
                <div class="social-links">
                    <a href="https://www.facebook.com/mint.luxe.auto.marrakech/" target="_blank">
                        <x-lucide-facebook class="social-icon" />
                    </a>
                    <a href="https://www.instagram.com/mint.luxe.auto/" target="_blank">
                        <x-lucide-instagram class="social-icon" />
                    </a>
                    <a href="https://www.threads.net/@mint.luxe.auto" target="_blank">
                        <x-lucide-message-circle class="social-icon" />
                    </a>
                </div>
            </div>
        </div>
    </div>
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
</body>

</html>
