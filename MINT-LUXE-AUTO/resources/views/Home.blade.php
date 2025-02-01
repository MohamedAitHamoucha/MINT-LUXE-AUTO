<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>MINT LUXE AUTO</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <div class="main" data-aos="fade-down">
        <div class="navbar">
            <div class="logo">
                <a href="/"><img src="{{ asset('images/white-logo.png') }}" alt="logo" width="120"
                        height="80"></a>
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
        <table>
            <tr>
                <td><label>Trouver des voitures à vendre près de chez vous</label></td>
            </tr>
            <tr>
                <td><span>Trouvez la voiture parfaite</span></td>
            </tr>
            <tr>
                <td>
                    <form action="{{ route('cars.index') }}" method="GET" class="search-form">
                        <div class="search-container">
                            <input class="searchtxt" type="search" name="search" placeholder="Rechercher...">
                            <button type="submit" class="searchbtn"></button>
                        </div>
                    </form>
                </td>
            </tr>
        </table>

    </div>
    <div class="carsell" data-aos="fade-right" data-aos-delay="100">
        <div class="carsellimg">
            <img src="{{ asset('images/car.png') }}" alt="car" width="700px">
        </div>
        <div class="carselltxt">
            <p class="carselltxt1">Obtenez un prix équitable pour votre voiture Vendez-nous aujourd'hui</p>
            <p class="carselltxt2">Nous nous engageons à fournir à nos clients un service exceptionnel, des prix
                compétitifs et une large gamme de produits.</p>
        </div>
    </div>
    <div class="brand" data-aos="fade-up" data-aos-delay="200">
        <fieldset>
            <legend>Découvrez nos marques de prestige</legend>
            <div class="brands">
                <a class="mercedes" href="/cars?brand=mercedes"></a>
                <a class="audi" href="/cars?brand=audi"></a>
                <a class="porsche" href="/cars?brand=porsche"></a>
                <a class="lamborghini" href="/cars?brand=lamborghini"></a>
            </div>
        </fieldset>
    </div>
    <div class="whyus" data-aos="fade-up" data-aos-delay="200">
        <fieldset>
            <legend>Pourquoi nous choisir ?</legend>
            <div class="why">
                <div class="offer" data-aos="zoom-in" data-aos-delay="300">
                    <table>
                        <tr>
                            <td>
                                <img src="{{ asset('images/f1.svg') }}" alt="offer">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Offres spéciales de financement</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>Notre service financier, sans stress, peut trouver des solutions financières pour
                                    vous faire économiser de l'argent.</span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="dealership" data-aos="zoom-in" data-aos-delay="400">
                    <table>
                        <tr>
                            <td>
                                <img src="{{ asset('images/f2.svg') }}" alt="offer">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Concessionnaire automobile de confiance</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>Concessionnaire automobile de confiance offrant transparence, qualité des
                                    véhicules, et service client exceptionnel pour une expérience d'achat fiable et
                                    satisfaisante.</span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="pricing" data-aos="zoom-in" data-aos-delay="500">
                    <table>
                        <tr>
                            <td>
                                <img src="{{ asset('images/f3.svg') }}" alt="offer">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Une tarification transparente</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>Une tarification transparente pour une expérience d'achat claire et sans
                                    surprise.</span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="service" data-aos="zoom-in" data-aos-delay="600">
                    <table>
                        <tr>
                            <td>
                                <img src="{{ asset('images/f4.svg') }}" alt="offer">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Service automobile expert</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>Service automobile expert assurant compétence et professionnalisme pour des
                                    solutions fiables et efficaces.</span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </fieldset>
    </div>
    <div class="loc" data-aos="fade-left" data-aos-delay="200">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3395.6652050349244!2d-8.011288124825743!3d31.67037813971628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafef511efe1557%3A0x55e23cef028f5db0!2sMint%20Luxe%20Auto!5e0!3m2!1sen!2sma!4v1707501929416!5m2!1sen!2sma"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
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
            <div class="infosoc">
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>

</html>
