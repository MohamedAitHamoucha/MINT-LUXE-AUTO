<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/cars.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
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
                    <option value="Abarth" {{ request('brand') == 'Abarth' ? 'selected' : '' }}>Abarth</option>
                    <option value="Acura" {{ request('brand') == 'Acura' ? 'selected' : '' }}>Acura</option>
                    <option value="Alfa Romeo" {{ request('brand') == 'Alfa Romeo' ? 'selected' : '' }}>Alfa Romeo</option>
                    <option value="Alpine" {{ request('brand') == 'Alpine' ? 'selected' : '' }}>Alpine</option>
                    <option value="Aston Martin" {{ request('brand') == 'Aston Martin' ? 'selected' : '' }}>Aston Martin</option>
                    <option value="Audi" {{ request('brand') == 'Audi' ? 'selected' : '' }}>Audi</option>
                    <option value="Bentley" {{ request('brand') == 'Bentley' ? 'selected' : '' }}>Bentley</option>
                    <option value="BMW" {{ request('brand') == 'BMW' ? 'selected' : '' }}>BMW</option>
                    <option value="Bugatti" {{ request('brand') == 'Bugatti' ? 'selected' : '' }}>Bugatti</option>
                    <option value="BYD" {{ request('brand') == 'BYD' ? 'selected' : '' }}>BYD</option>
                    <option value="Cadillac" {{ request('brand') == 'Cadillac' ? 'selected' : '' }}>Cadillac</option>
                    <option value="Chevrolet" {{ request('brand') == 'Chevrolet' ? 'selected' : '' }}>Chevrolet</option>
                    <option value="Chrysler" {{ request('brand') == 'Chrysler' ? 'selected' : '' }}>Chrysler</option>
                    <option value="Citroën" {{ request('brand') == 'Citroën' ? 'selected' : '' }}>Citroën</option>
                    <option value="Cupra" {{ request('brand') == 'Cupra' ? 'selected' : '' }}>Cupra</option>
                    <option value="Dacia" {{ request('brand') == 'Dacia' ? 'selected' : '' }}>Dacia</option>
                    <option value="Daewoo" {{ request('brand') == 'Daewoo' ? 'selected' : '' }}>Daewoo</option>
                    <option value="Daihatsu" {{ request('brand') == 'Daihatsu' ? 'selected' : '' }}>Daihatsu</option>
                    <option value="Dodge" {{ request('brand') == 'Dodge' ? 'selected' : '' }}>Dodge</option>
                    <option value="DS" {{ request('brand') == 'DS' ? 'selected' : '' }}>DS</option>
                    <option value="Ferrari" {{ request('brand') == 'Ferrari' ? 'selected' : '' }}>Ferrari</option>
                    <option value="Fiat" {{ request('brand') == 'Fiat' ? 'selected' : '' }}>Fiat</option>
                    <option value="Ford" {{ request('brand') == 'Ford' ? 'selected' : '' }}>Ford</option>
                    <option value="Genesis" {{ request('brand') == 'Genesis' ? 'selected' : '' }}>Genesis</option>
                    <option value="Honda" {{ request('brand') == 'Honda' ? 'selected' : '' }}>Honda</option>
                    <option value="Hummer" {{ request('brand') == 'Hummer' ? 'selected' : '' }}>Hummer</option>
                    <option value="Hyundai" {{ request('brand') == 'Hyundai' ? 'selected' : '' }}>Hyundai</option>
                    <option value="Infiniti" {{ request('brand') == 'Infiniti' ? 'selected' : '' }}>Infiniti</option>
                    <option value="Isuzu" {{ request('brand') == 'Isuzu' ? 'selected' : '' }}>Isuzu</option>
                    <option value="Jaguar" {{ request('brand') == 'Jaguar' ? 'selected' : '' }}>Jaguar</option>
                    <option value="Jeep" {{ request('brand') == 'Jeep' ? 'selected' : '' }}>Jeep</option>
                    <option value="Kia" {{ request('brand') == 'Kia' ? 'selected' : '' }}>Kia</option>
                    <option value="Koenigsegg" {{ request('brand') == 'Koenigsegg' ? 'selected' : '' }}>Koenigsegg</option>
                    <option value="Lamborghini" {{ request('brand') == 'Lamborghini' ? 'selected' : '' }}>Lamborghini</option>
                    <option value="Lancia" {{ request('brand') == 'Lancia' ? 'selected' : '' }}>Lancia</option>
                    <option value="Land Rover" {{ request('brand') == 'Land Rover' ? 'selected' : '' }}>Land Rover</option>
                    <option value="Lexus" {{ request('brand') == 'Lexus' ? 'selected' : '' }}>Lexus</option>
                    <option value="Lotus" {{ request('brand') == 'Lotus' ? 'selected' : '' }}>Lotus</option>
                    <option value="Maserati" {{ request('brand') == 'Maserati' ? 'selected' : '' }}>Maserati</option>
                    <option value="Maybach" {{ request('brand') == 'Maybach' ? 'selected' : '' }}>Maybach</option>
                    <option value="Mazda" {{ request('brand') == 'Mazda' ? 'selected' : '' }}>Mazda</option>
                    <option value="McLaren" {{ request('brand') == 'McLaren' ? 'selected' : '' }}>McLaren</option>
                    <option value="Mercedes-Benz" {{ request('brand') == 'Mercedes-Benz' ? 'selected' : '' }}>Mercedes-Benz</option>
                    <option value="MG" {{ request('brand') == 'MG' ? 'selected' : '' }}>MG</option>
                    <option value="Mini" {{ request('brand') == 'Mini' ? 'selected' : '' }}>Mini</option>
                    <option value="Mitsubishi" {{ request('brand') == 'Mitsubishi' ? 'selected' : '' }}>Mitsubishi</option>
                    <option value="Nissan" {{ request('brand') == 'Nissan' ? 'selected' : '' }}>Nissan</option>
                    <option value="Opel" {{ request('brand') == 'Opel' ? 'selected' : '' }}>Opel</option>
                    <option value="Pagani" {{ request('brand') == 'Pagani' ? 'selected' : '' }}>Pagani</option>
                    <option value="Peugeot" {{ request('brand') == 'Peugeot' ? 'selected' : '' }}>Peugeot</option>
                    <option value="Polestar" {{ request('brand') == 'Polestar' ? 'selected' : '' }}>Polestar</option>
                    <option value="Porsche" {{ request('brand') == 'Porsche' ? 'selected' : '' }}>Porsche</option>
                    <option value="Renault" {{ request('brand') == 'Renault' ? 'selected' : '' }}>Renault</option>
                    <option value="Rolls-Royce" {{ request('brand') == 'Rolls-Royce' ? 'selected' : '' }}>Rolls-Royce</option>
                    <option value="Saab" {{ request('brand') == 'Saab' ? 'selected' : '' }}>Saab</option>
                    <option value="Seat" {{ request('brand') == 'Seat' ? 'selected' : '' }}>Seat</option>
                    <option value="Škoda" {{ request('brand') == 'Škoda' ? 'selected' : '' }}>Škoda</option>
                    <option value="Smart" {{ request('brand') == 'Smart' ? 'selected' : '' }}>Smart</option>
                    <option value="Subaru" {{ request('brand') == 'Subaru' ? 'selected' : '' }}>Subaru</option>
                    <option value="Suzuki" {{ request('brand') == 'Suzuki' ? 'selected' : '' }}>Suzuki</option>
                    <option value="Tesla" {{ request('brand') == 'Tesla' ? 'selected' : '' }}>Tesla</option>
                    <option value="Toyota" {{ request('brand') == 'Toyota' ? 'selected' : '' }}>Toyota</option>
                    <option value="Volkswagen" {{ request('brand') == 'Volkswagen' ? 'selected' : '' }}>Volkswagen</option>
                    <option value="Volvo" {{ request('brand') == 'Volvo' ? 'selected' : '' }}>Volvo</option>
                </select>
            </div>

            <!-- Year Range -->
            <div class="filter-section">
                <h3>Année</h3>
                <div class="year-inputs">
                    <input type="text" id="min_year" name="min_year" placeholder="Min">
                    <input type="text" id="max_year" name="max_year" placeholder="Max">
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
                    <option value="Neuf">Neuf</option>
                    <option value="Occasion">Occasion</option>
                    <option value="Importée neuve">Importée neuve</option>
                </select>
            </div>

            <div class="filter-section">
            <!-- Add this button next to the apply filters button -->
            <div class="filter-buttons">
                <button type="button" class="apply-filters">Appliquer les filtres</button>
            </div>
            </div>
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

            // Store the URL
            const filterUrl = `${window.location.pathname}?${params.toString()}`;

            // Clear all inputs before redirecting
            document.getElementById('brand').selectedIndex = 0;
            document.getElementById('condition').selectedIndex = 0;
            document.getElementById('min_year').value = '';
            document.getElementById('max_year').value = '';
            document.getElementById('min_mileage').value = '';
            document.getElementById('max_mileage').value = '';
            document.getElementById('min_price').value = '';
            document.getElementById('max_price').value = '';

            // Navigate to the filtered URL
            window.location.href = filterUrl;
        });
    });
    </script>
</body>
</html> 