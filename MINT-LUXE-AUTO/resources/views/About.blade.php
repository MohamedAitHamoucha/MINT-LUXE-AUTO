<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>About Us</title>
</head>

<body>
    <div class="navbar">
        <div class="logo">
            <a href="/"><img src="{{ asset('images/white-logo.png') }}" alt="logo" width="120"
                    height="80" align="left"></a>
        </div>
        <div class="home">
            <a href="/">Accueil</a>
        </div>
        <div class="cars">
            <a href="/cars">Voitures</a>
        </div>
        <div class="about">
            <a href="/about">À propos</a>
        </div>
        <div class="contact">
            <a href="/contact">Contact</a>
        </div>
        <div class="menu-btn"></div>
    </div>
    <div class="aboutus">
        <h1>A propos de nous</h1>
        <div class="tabout">
            <h1>Nous apprécions nos clients et voulons qu'ils aient une bonne expérience</h1>
            <span>Élevez votre expérience de conduite avec Mint Luxe Auto, votre première destination pour le
                luxe automobile et la haute performance. Notre salle d'exposition présente une sélection
                inégalée de voitures de luxe et de sport convoitées, chacune répondant aux normes de qualité les
                plus élevées. Que vous recherchiez l'opulence ou l'adrénaline, Mint Luxe Auto se consacre à
                l'exaltation de votre passion pour la conduite.
                <br>
                <br>
                Notre approche centrée sur le client garantit
                une expérience d'achat exceptionnelle, de la salle d'exposition à la première conduite. Venez
                nous rendre visite dès aujourd'hui et soyez témoin de la fusion de l'artisanat, de l'innovation
                et de l'élégance - où chaque véhicule reflète notre engagement envers la perfection et votre
                satisfaction.</span>
        </div>
        <center>
            <table class="timg">
                <tr>
                    <td><img src="{{ asset('images/range rover.jpg') }}" alt="about"></td>
                    <td rowspan="2"><img src="{{ asset('images/bentli.jpg') }}" alt="about"></td>
                    <td><img src="{{ asset('images/ferrari.jpg') }}" alt="about"></td>
                </tr>
                <tr>
                    <td><img src="{{ asset('images/urus.jpg') }}" alt="about"></td>
                    <td><img src="{{ asset('images/huracan evo.jpg') }}" alt="about"></td>
                </tr>
            </table>
        </center>
        <div class="lightbox">
            <button class="lightbox-close">&times;</button>
            <button class="lightbox-prev">&lt;</button>
            <img src="" alt="Lightbox image">
            <button class="lightbox-next">&gt;</button>
        </div>
        <div class="whyus">
            <fieldset>
                <legend>Pourquoi nous choisir ?</legend>
                <div class="why">
                    <div class="offer">
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
                                    <span>Notre service financier, sans stress, peut trouver des solutions financières
                                        pour
                                        vous faire économiser de l'argent.</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="dealership">
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
                    <div class="pricing">
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
                    <div class="service">
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
        <div class="carsell">
            <div class="carsellimg">
                <img src="{{ asset('images/car.png') }}" alt="car" width="700px">
            </div>
            <div class="carselltxt">
                <p class="carselltxt1">Obtenez un prix équitable pour votre voiture Vendez-nous aujourd'hui</p>
                <p class="carselltxt2">Nous nous engageons à fournir à nos clients un service exceptionnel, des prix
                    compétitifs et une large gamme de produits.</p>
            </div>
        </div>
        <div class="brand">
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

    const lightbox = document.querySelector('.lightbox');
    const lightboxImg = lightbox.querySelector('img');
    const closeBtn = lightbox.querySelector('.lightbox-close');
    const prevBtn = lightbox.querySelector('.lightbox-prev');
    const nextBtn = lightbox.querySelector('.lightbox-next');
    const galleryImages = document.querySelectorAll('.timg img');
    let currentImageIndex = 0;

    // Convert NodeList to Array of image sources
    const images = Array.from(galleryImages).map(img => img.src);

    // Open lightbox when clicking any gallery image
    galleryImages.forEach((img, index) => {
        img.addEventListener('click', () => {
            currentImageIndex = index;
            updateLightboxImage();
            lightbox.classList.add('active');
        });
    });

    function updateLightboxImage() {
        lightboxImg.src = images[currentImageIndex];
    }

    // Close lightbox
    closeBtn.addEventListener('click', () => {
        lightbox.classList.remove('active');
    });

    // Navigate through images
    prevBtn.addEventListener('click', () => {
        currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
        updateLightboxImage();
    });

    nextBtn.addEventListener('click', () => {
        currentImageIndex = (currentImageIndex + 1) % images.length;
        updateLightboxImage();
    });

    // Close on background click
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) {
            lightbox.classList.remove('active');
        }
    });

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (!lightbox.classList.contains('active')) return;
        
        if (e.key === 'Escape') lightbox.classList.remove('active');
        if (e.key === 'ArrowLeft') prevBtn.click();
        if (e.key === 'ArrowRight') nextBtn.click();
    });
    </script>
</body>

</html>
