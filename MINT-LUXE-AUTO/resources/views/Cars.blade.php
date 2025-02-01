<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/cars.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Voitures - MINT LUXE AUTO</title>
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

    <div class="cars-container">
        <!-- Filter toggle button -->
        <button class="filter-toggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon></svg>
        </button>

        <div class="filter-overlay"></div>

        <div class="filters">
            <h2>Filtres</h2>
            
            <!-- Brand dropdown -->
            <div class="filter-section">
                <h3>Marque</h3>
                <select name="brand" id="brand" class="brand-select">
                    <option value="">Toutes les marques</option>
                    <option value="Abarth">Abarth</option>
                    <option value="Acura">Acura</option>
                    <option value="Alfa Romeo">Alfa Romeo</option>
                    <option value="Alpine">Alpine</option>
                    <option value="Aston Martin">Aston Martin</option>
                    <option value="Audi">Audi</option>
                    <option value="Bentley">Bentley</option>
                    <option value="BMW">BMW</option>
                    <option value="Bugatti">Bugatti</option>
                    <option value="BYD">BYD</option>
                    <option value="Cadillac">Cadillac</option>
                    <option value="Chevrolet">Chevrolet</option>
                    <option value="Chrysler">Chrysler</option>
                    <option value="Citroën">Citroën</option>
                    <option value="Cupra">Cupra</option>
                    <option value="Dacia">Dacia</option>
                    <option value="Daewoo">Daewoo</option>
                    <option value="Daihatsu">Daihatsu</option>
                    <option value="Dodge">Dodge</option>
                    <option value="DS">DS</option>
                    <option value="Ferrari">Ferrari</option>
                    <option value="Fiat">Fiat</option>
                    <option value="Ford">Ford</option>
                    <option value="Genesis">Genesis</option>
                    <option value="Honda">Honda</option>
                    <option value="Hummer">Hummer</option>
                    <option value="Hyundai">Hyundai</option>
                    <option value="Infiniti">Infiniti</option>
                    <option value="Isuzu">Isuzu</option>
                    <option value="Jaguar">Jaguar</option>
                    <option value="Jeep">Jeep</option>
                    <option value="Kia">Kia</option>
                    <option value="Koenigsegg">Koenigsegg</option>
                    <option value="Lamborghini">Lamborghini</option>
                    <option value="Lancia">Lancia</option>
                    <option value="Land Rover">Land Rover</option>
                    <option value="Lexus">Lexus</option>
                    <option value="Lotus">Lotus</option>
                    <option value="Maserati">Maserati</option>
                    <option value="Maybach">Maybach</option>
                    <option value="Mazda">Mazda</option>
                    <option value="McLaren">McLaren</option>
                    <option value="Mercedes-Benz">Mercedes-Benz</option>
                    <option value="MG">MG</option>
                    <option value="Mini">Mini</option>
                    <option value="Mitsubishi">Mitsubishi</option>
                    <option value="Nissan">Nissan</option>
                    <option value="Opel">Opel</option>
                    <option value="Pagani">Pagani</option>
                    <option value="Peugeot">Peugeot</option>
                    <option value="Polestar">Polestar</option>
                    <option value="Porsche">Porsche</option>
                    <option value="Renault">Renault</option>
                    <option value="Rolls-Royce">Rolls-Royce</option>
                    <option value="Saab">Saab</option>
                    <option value="Seat">Seat</option>
                    <option value="Škoda">Škoda</option>
                    <option value="Smart">Smart</option>
                    <option value="Subaru">Subaru</option>
                    <option value="Suzuki">Suzuki</option>
                    <option value="Tesla">Tesla</option>
                    <option value="Toyota">Toyota</option>
                    <option value="Volkswagen">Volkswagen</option>
                    <option value="Volvo">Volvo</option>
                </select>
            </div>

            <!-- Year Range -->
            <div class="filter-section">
                <h3>Année</h3>
                <div class="year-inputs">
                    <input type="number" id="min_year" name="min_year" placeholder="Min">
                    <input type="number" id="max_year" name="max_year" placeholder="Max">
                </div>
            </div>

            <!-- Mileage Range -->
            <div class="filter-section">
                <h3>Kilométrage</h3>
                <div class="mileage-inputs">
                    <input type="number" id="min_mileage" name="min_mileage" placeholder="Min">
                    <input type="number" id="max_mileage" name="max_mileage" placeholder="Max">
                </div>
            </div>

            <!-- Price Range -->
            <div class="filter-section">
                <h3>Prix</h3>
                <div class="price-inputs">
                    <input type="number" id="min_price" name="min_price" placeholder="Min">
                    <input type="number" id="max_price" name="max_price" placeholder="Max">
                </div>
            </div>

            <!-- Condition -->
            <div class="filter-section">
                <h3>État</h3>
                <select name="condition" id="condition" class="condition-select">
                    <option value="">Tous les états</option>
                    <option value="neuf">Neuf</option>
                    <option value="occasion">Occasion</option>
                    <option value="importee">Importée neuve</option>
                </select>
            </div>

            <button type="button" class="apply-filters">Appliquer les filtres</button>
        </div>

        <div class="cars-grid">
            @foreach($cars as $car)
            <div class="car-card">
                <div class="car-image">
                    <img src="{{ asset('storage/' . $car->images[0]) }}" alt="{{ $car->brand }} {{ $car->model }}">
                </div>
                <div class="car-info">
                    <h3>{{ $car->brand }} {{ $car->model }}</h3>
                    <p class="car-price">{{ number_format($car->price, 0, ',', ' ') }} MAD</p>
                    <div class="car-details">
                        <span>{{ $car->year }}</span>
                        <span>{{ number_format($car->mileage, 0, ',', ' ') }} km</span>
                    </div>
                    <a href="{{ route('car.show', $car->slug) }}" class="btn-details">Voir les détails</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="footer">
        <img src="{{ asset('images/white-logo.png') }}" alt="logo" width="120px" height="70px">
        <p>Copyright © 2024 Mint Luxe Auto. All Rights Reserved.</p>
        <a href="#"><img src="{{ asset('images/up-arrow.png') }}" alt="up"></a>
    </div>

    <script>
    // Menu button functionality
    document.querySelector('.menu-btn').addEventListener('click', function() {
        document.querySelector('.navbar').classList.toggle('active');
    });

    document.addEventListener('DOMContentLoaded', function() {
        // Mobile filter toggle
        const filterToggle = document.querySelector('.filter-toggle');
        const filters = document.querySelector('.filters');
        const overlay = document.querySelector('.filter-overlay');

        filterToggle.addEventListener('click', function() {
            filters.classList.toggle('active');
            overlay.classList.toggle('active');
        });

        overlay.addEventListener('click', function() {
            filters.classList.remove('active');
            overlay.classList.remove('active');
        });

        // Filter functionality
        const applyButton = document.querySelector('.apply-filters');
        
        applyButton.addEventListener('click', function() {
            const brand = document.getElementById('brand').value;
            const condition = document.getElementById('condition').value;
            const minYear = document.getElementById('min_year').value;
            const maxYear = document.getElementById('max_year').value;
            const minMileage = document.getElementById('min_mileage').value;
            const maxMileage = document.getElementById('max_mileage').value;
            const minPrice = document.getElementById('min_price').value;
            const maxPrice = document.getElementById('max_price').value;

            // Build query string
            const params = new URLSearchParams();
            if (brand) params.append('brand', brand);
            if (condition) params.append('condition', condition);
            if (minYear) params.append('min_year', minYear);
            if (maxYear) params.append('max_year', maxYear);
            if (minMileage) params.append('min_mileage', minMileage);
            if (maxMileage) params.append('max_mileage', maxMileage);
            if (minPrice) params.append('min_price', minPrice);
            if (maxPrice) params.append('max_price', maxPrice);

            // Redirect with filters
            window.location.href = `${window.location.pathname}?${params.toString()}`;
        });
    });
    </script>
</body>
</html> 