<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/cars.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
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
        <div class="filters">
            <h2>Filtres</h2>
            
            <!-- Search input -->
            <div class="filter-section">
                <h3>Rechercher</h3>
                <div class="search-input">
                    <input type="text" id="search" placeholder="Rechercher une voiture...">
                </div>
            </div>

            <!-- Brand filter -->
            <div class="filter-section">
                <h3>Marque</h3>
                <div class="filter-options">
                    <label><input type="checkbox" name="brand" value="mercedes"> Mercedes</label>
                    <label><input type="checkbox" name="brand" value="audi"> Audi</label>
                    <label><input type="checkbox" name="brand" value="porsche"> Porsche</label>
                    <label><input type="checkbox" name="brand" value="lamborghini"> Lamborghini</label>
                </div>
            </div>

            <!-- Year Range filter -->
            <div class="filter-section">
                <h3>Année</h3>
                <div class="year-inputs">
                    <input type="number" min="1900" max="2024" class="min-year" placeholder="Min">
                    <input type="number" min="1900" max="2024" class="max-year" placeholder="Max">
                </div>
            </div>

            <!-- Mileage Range filter -->
            <div class="filter-section">
                <h3>Kilométrage</h3>
                <div class="mileage-inputs">
                    <input type="number" min="0" class="min-mileage" placeholder="Min">
                    <input type="number" min="0" class="max-mileage" placeholder="Max">
                </div>
            </div>

            <!-- Price Range filter -->
            <div class="filter-section">
                <h3>Prix</h3>
                <div class="price-range">
                    <div class="price-inputs">
                        <input type="number" min="0" class="min-price" placeholder="Min">
                        <input type="number" min="0" class="max-price" placeholder="Max">
                    </div>
                </div>
            </div>

            <!-- Condition filter -->
            <div class="filter-section">
                <h3>État</h3>
                <div class="filter-options">
                    <label><input type="checkbox" name="condition" value="neuf"> Neuf</label>
                    <label><input type="checkbox" name="condition" value="occasion"> Occasion</label>
                    <label><input type="checkbox" name="condition" value="importee"> Importée neuve</label>
                </div>
            </div>

            <button class="apply-filters">Appliquer les filtres</button>
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

    // Filter functionality
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('search');
        const brandInputs = document.querySelectorAll('input[name="brand"]');
        const conditionInputs = document.querySelectorAll('input[name="condition"]');
        const minYear = document.querySelector('.min-year');
        const maxYear = document.querySelector('.max-year');
        const minMileage = document.querySelector('.min-mileage');
        const maxMileage = document.querySelector('.max-mileage');
        const minPrice = document.querySelector('.min-price');
        const maxPrice = document.querySelector('.max-price');
        const applyButton = document.querySelector('.apply-filters');
        const carCards = document.querySelectorAll('.car-card');

        // Input validation for numbers
        function validateNumberInput(input) {
            input.addEventListener('keypress', function(e) {
                if (!/[0-9]/.test(e.key)) {
                    e.preventDefault();
                }
            });

            input.addEventListener('paste', function(e) {
                e.preventDefault();
                const text = (e.originalEvent || e).clipboardData.getData('text/plain');
                if (/^\d+$/.test(text)) {
                    input.value = text;
                }
            });
        }

        // Apply validation to all number inputs
        [minYear, maxYear, minMileage, maxMileage, minPrice, maxPrice].forEach(input => {
            validateNumberInput(input);
        });

        function filterCars() {
            const searchTerm = searchInput.value.toLowerCase();
            const selectedBrands = Array.from(brandInputs)
                .filter(input => input.checked)
                .map(input => input.value);
            const selectedConditions = Array.from(conditionInputs)
                .filter(input => input.checked)
                .map(input => input.value);
            
            const minYearValue = Number(minYear.value) || 0;
            const maxYearValue = Number(maxYear.value) || Infinity;
            const minMileageValue = Number(minMileage.value) || 0;
            const maxMileageValue = Number(maxMileage.value) || Infinity;
            const minPriceValue = Number(minPrice.value) || 0;
            const maxPriceValue = Number(maxPrice.value) || Infinity;

            carCards.forEach(card => {
                const title = card.querySelector('h3').textContent.toLowerCase();
                const priceText = card.querySelector('.car-price').textContent;
                const price = Number(priceText.replace(/[^0-9]/g, ''));
                const yearText = card.querySelector('.car-details span:first-child').textContent;
                const year = Number(yearText);
                const mileageText = card.querySelector('.car-details span:last-child').textContent;
                const mileage = Number(mileageText.replace(/[^0-9]/g, ''));
                
                const matchesSearch = searchTerm === '' || title.includes(searchTerm);
                const matchesBrand = selectedBrands.length === 0 || 
                    selectedBrands.some(brand => title.toLowerCase().includes(brand));
                const matchesYear = (!minYearValue || year >= minYearValue) && 
                    (!maxYearValue || year <= maxYearValue);
                const matchesMileage = (!minMileageValue || mileage >= minMileageValue) && 
                    (!maxMileageValue || mileage <= maxMileageValue);
                const matchesPrice = (!minPriceValue || price >= minPriceValue) && 
                    (!maxPriceValue || price <= maxPriceValue);

                card.style.display = 
                    matchesSearch && matchesBrand && matchesYear && 
                    matchesMileage && matchesPrice ? 'block' : 'none';
            });
        }

        // Only filter when clicking the button
        applyButton.addEventListener('click', filterCars);

        // Prevent negative numbers
        [minYear, maxYear, minMileage, maxMileage, minPrice, maxPrice].forEach(input => {
            input.addEventListener('input', function() {
                if (this.value < 0) this.value = 0;
            });
        });
    });
    </script>
</body>
</html> 