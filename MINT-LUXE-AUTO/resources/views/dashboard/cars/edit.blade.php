@extends('dashboard.layout')

@section('title', 'Modifier la voiture')

@section('content')
<div class="car-form">
    <form action="{{ route('dashboard.cars.update', $car) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="form-section">
            <h3>Informations générales</h3>
            <div class="form-grid">
                <div class="form-group">
                    <label for="brand">Marque</label>
                    <select id="brand" name="brand" required>
                        <option value="">Sélectionner une marque</option>
                        <option value="Abarth" {{ old('brand', $car->brand) == 'Abarth' ? 'selected' : '' }}>Abarth</option>
                        <option value="Acura" {{ old('brand', $car->brand) == 'Acura' ? 'selected' : '' }}>Acura</option>
                        <option value="Alfa Romeo" {{ old('brand', $car->brand) == 'Alfa Romeo' ? 'selected' : '' }}>Alfa Romeo</option>
                        <option value="Alpine" {{ old('brand', $car->brand) == 'Alpine' ? 'selected' : '' }}>Alpine</option>
                        <option value="Aston Martin" {{ old('brand', $car->brand) == 'Aston Martin' ? 'selected' : '' }}>Aston Martin</option>
                        <option value="Audi" {{ old('brand', $car->brand) == 'Audi' ? 'selected' : '' }}>Audi</option>
                        <option value="Bentley" {{ old('brand', $car->brand) == 'Bentley' ? 'selected' : '' }}>Bentley</option>
                        <option value="BMW" {{ old('brand', $car->brand) == 'BMW' ? 'selected' : '' }}>BMW</option>
                        <option value="Bugatti" {{ old('brand', $car->brand) == 'Bugatti' ? 'selected' : '' }}>Bugatti</option>
                        <option value="BYD" {{ old('brand', $car->brand) == 'BYD' ? 'selected' : '' }}>BYD</option>
                        <option value="Cadillac" {{ old('brand', $car->brand) == 'Cadillac' ? 'selected' : '' }}>Cadillac</option>
                        <option value="Chevrolet" {{ old('brand', $car->brand) == 'Chevrolet' ? 'selected' : '' }}>Chevrolet</option>
                        <option value="Chrysler" {{ old('brand', $car->brand) == 'Chrysler' ? 'selected' : '' }}>Chrysler</option>
                        <option value="Citroën" {{ old('brand', $car->brand) == 'Citroën' ? 'selected' : '' }}>Citroën</option>
                        <option value="Cupra" {{ old('brand', $car->brand) == 'Cupra' ? 'selected' : '' }}>Cupra</option>
                        <option value="Dacia" {{ old('brand', $car->brand) == 'Dacia' ? 'selected' : '' }}>Dacia</option>
                        <option value="Daewoo" {{ old('brand', $car->brand) == 'Daewoo' ? 'selected' : '' }}>Daewoo</option>
                        <option value="Daihatsu" {{ old('brand', $car->brand) == 'Daihatsu' ? 'selected' : '' }}>Daihatsu</option>
                        <option value="Dodge" {{ old('brand', $car->brand) == 'Dodge' ? 'selected' : '' }}>Dodge</option>
                        <option value="DS" {{ old('brand', $car->brand) == 'DS' ? 'selected' : '' }}>DS</option>
                        <option value="Ferrari" {{ old('brand', $car->brand) == 'Ferrari' ? 'selected' : '' }}>Ferrari</option>
                        <option value="Fiat" {{ old('brand', $car->brand) == 'Fiat' ? 'selected' : '' }}>Fiat</option>
                        <option value="Ford" {{ old('brand', $car->brand) == 'Ford' ? 'selected' : '' }}>Ford</option>
                        <option value="Genesis" {{ old('brand', $car->brand) == 'Genesis' ? 'selected' : '' }}>Genesis</option>
                        <option value="Honda" {{ old('brand', $car->brand) == 'Honda' ? 'selected' : '' }}>Honda</option>
                        <option value="Hummer" {{ old('brand', $car->brand) == 'Hummer' ? 'selected' : '' }}>Hummer</option>
                        <option value="Hyundai" {{ old('brand', $car->brand) == 'Hyundai' ? 'selected' : '' }}>Hyundai</option>
                        <option value="Infiniti" {{ old('brand', $car->brand) == 'Infiniti' ? 'selected' : '' }}>Infiniti</option>
                        <option value="Isuzu" {{ old('brand', $car->brand) == 'Isuzu' ? 'selected' : '' }}>Isuzu</option>
                        <option value="Jaguar" {{ old('brand', $car->brand) == 'Jaguar' ? 'selected' : '' }}>Jaguar</option>
                        <option value="Jeep" {{ old('brand', $car->brand) == 'Jeep' ? 'selected' : '' }}>Jeep</option>
                        <option value="Kia" {{ old('brand', $car->brand) == 'Kia' ? 'selected' : '' }}>Kia</option>
                        <option value="Koenigsegg" {{ old('brand', $car->brand) == 'Koenigsegg' ? 'selected' : '' }}>Koenigsegg</option>
                        <option value="Lamborghini" {{ old('brand', $car->brand) == 'Lamborghini' ? 'selected' : '' }}>Lamborghini</option>
                        <option value="Lancia" {{ old('brand', $car->brand) == 'Lancia' ? 'selected' : '' }}>Lancia</option>
                        <option value="Land Rover" {{ old('brand', $car->brand) == 'Land Rover' ? 'selected' : '' }}>Land Rover</option>
                        <option value="Lexus" {{ old('brand', $car->brand) == 'Lexus' ? 'selected' : '' }}>Lexus</option>
                        <option value="Lotus" {{ old('brand', $car->brand) == 'Lotus' ? 'selected' : '' }}>Lotus</option>
                        <option value="Maserati" {{ old('brand', $car->brand) == 'Maserati' ? 'selected' : '' }}>Maserati</option>
                        <option value="Maybach" {{ old('brand', $car->brand) == 'Maybach' ? 'selected' : '' }}>Maybach</option>
                        <option value="Mazda" {{ old('brand', $car->brand) == 'Mazda' ? 'selected' : '' }}>Mazda</option>
                        <option value="McLaren" {{ old('brand', $car->brand) == 'McLaren' ? 'selected' : '' }}>McLaren</option>
                        <option value="Mercedes-Benz" {{ old('brand', $car->brand) == 'Mercedes-Benz' ? 'selected' : '' }}>Mercedes-Benz</option>
                        <option value="MG" {{ old('brand', $car->brand) == 'MG' ? 'selected' : '' }}>MG</option>
                        <option value="Mini" {{ old('brand', $car->brand) == 'Mini' ? 'selected' : '' }}>Mini</option>
                        <option value="Mitsubishi" {{ old('brand', $car->brand) == 'Mitsubishi' ? 'selected' : '' }}>Mitsubishi</option>
                        <option value="Nissan" {{ old('brand', $car->brand) == 'Nissan' ? 'selected' : '' }}>Nissan</option>
                        <option value="Opel" {{ old('brand', $car->brand) == 'Opel' ? 'selected' : '' }}>Opel</option>
                        <option value="Pagani" {{ old('brand', $car->brand) == 'Pagani' ? 'selected' : '' }}>Pagani</option>
                        <option value="Peugeot" {{ old('brand', $car->brand) == 'Peugeot' ? 'selected' : '' }}>Peugeot</option>
                        <option value="Polestar" {{ old('brand', $car->brand) == 'Polestar' ? 'selected' : '' }}>Polestar</option>
                        <option value="Porsche" {{ old('brand', $car->brand) == 'Porsche' ? 'selected' : '' }}>Porsche</option>
                        <option value="Renault" {{ old('brand', $car->brand) == 'Renault' ? 'selected' : '' }}>Renault</option>
                        <option value="Rolls-Royce" {{ old('brand', $car->brand) == 'Rolls-Royce' ? 'selected' : '' }}>Rolls-Royce</option>
                        <option value="Saab" {{ old('brand', $car->brand) == 'Saab' ? 'selected' : '' }}>Saab</option>
                        <option value="Seat" {{ old('brand', $car->brand) == 'Seat' ? 'selected' : '' }}>Seat</option>
                        <option value="Škoda" {{ old('brand', $car->brand) == 'Škoda' ? 'selected' : '' }}>Škoda</option>
                        <option value="Smart" {{ old('brand', $car->brand) == 'Smart' ? 'selected' : '' }}>Smart</option>
                        <option value="Subaru" {{ old('brand', $car->brand) == 'Subaru' ? 'selected' : '' }}>Subaru</option>
                        <option value="Suzuki" {{ old('brand', $car->brand) == 'Suzuki' ? 'selected' : '' }}>Suzuki</option>
                        <option value="Tesla" {{ old('brand', $car->brand) == 'Tesla' ? 'selected' : '' }}>Tesla</option>
                        <option value="Toyota" {{ old('brand', $car->brand) == 'Toyota' ? 'selected' : '' }}>Toyota</option>
                        <option value="Volkswagen" {{ old('brand', $car->brand) == 'Volkswagen' ? 'selected' : '' }}>Volkswagen</option>
                        <option value="Volvo" {{ old('brand', $car->brand) == 'Volvo' ? 'selected' : '' }}>Volvo</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="model">Modèle</label>
                    <input type="text" id="model" name="model" value="{{ old('model', $car->model) }}" required>
                </div>

                <div class="form-group">
                    <label for="price">Prix (MAD)</label>
                    <input type="number" id="price" name="price" value="{{ old('price', $car->price) }}" required>
                </div>

                <div class="form-group">
                    <label for="year">Année</label>
                    <input type="number" id="year" name="year" value="{{ old('year', $car->year) }}" required>
                </div>

                <div class="form-group">
                    <label for="mileage">Kilométrage</label>
                    <input type="number" id="mileage" name="mileage" value="{{ old('mileage', $car->mileage) }}" required>
                </div>

                <div class="form-group">
                    <label for="doors">Nombre de portes</label>
                    <input type="number" id="doors" name="doors" value="{{ old('doors', $car->doors) }}" required>
                </div>

                <div class="form-group">
                    <label for="fuel_type">Carburant</label>
                    <select id="fuel_type" name="fuel_type" required>
                        <option value="Essence" {{ old('fuel_type', $car->fuel_type) == 'Essence' ? 'selected' : '' }}>Essence</option>
                        <option value="Diesel" {{ old('fuel_type', $car->fuel_type) == 'Diesel' ? 'selected' : '' }}>Diesel</option>
                        <option value="Électrique" {{ old('fuel_type', $car->fuel_type) == 'Électrique' ? 'selected' : '' }}>Électrique</option>
                        <option value="Hybride" {{ old('fuel_type', $car->fuel_type) == 'Hybride' ? 'selected' : '' }}>Hybride</option>
                        <option value="Hybride Rechargeable" {{ old('fuel_type', $car->fuel_type) == 'Hybride Rechargeable' ? 'selected' : '' }}>Hybride Rechargeable</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-section">
            <h3>Caractéristiques</h3>
            <div class="form-grid">
                <div class="form-group">
                    <label for="type">Type</label>
                    <input type="text" id="type" name="type" value="{{ old('type', $car->type) }}" required placeholder="ex: SUV, Berline, Coupé...">
                </div>

                <div class="form-group">
                    <label for="sector">Secteur</label>
                    <select id="sector" name="sector" required>
                        <option value="luxe" {{ old('sector', $car->sector) == 'luxe' ? 'selected' : '' }}>Luxe</option>
                        <option value="sport" {{ old('sector', $car->sector) == 'sport' ? 'selected' : '' }}>Sport</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="origin">Origine</label>
                    <select id="origin" name="origin" required>
                        <option value="importee" {{ old('origin', $car->origin) == 'importee' ? 'selected' : '' }}>Importée</option>
                        <option value="dedouanee" {{ old('origin', $car->origin) == 'dedouanee' ? 'selected' : '' }}>Dédouanée</option>
                        <option value="ww" {{ old('origin', $car->origin) == 'ww' ? 'selected' : '' }}>WW</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="first_hand">Première main</label>
                    <select id="first_hand" name="first_hand" required>
                        <option value="1" {{ old('first_hand', $car->first_hand) ? 'selected' : '' }}>Oui</option>
                        <option value="0" {{ !old('first_hand', $car->first_hand) ? 'selected' : '' }}>Non</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="fiscal_power">Puissance fiscale</label>
                    <input type="text" id="fiscal_power" name="fiscal_power" value="{{ old('fiscal_power', $car->fiscal_power) }}" required>
                </div>

                <div class="form-group">
                    <label for="condition">État</label>
                    <select id="condition" name="condition" required>
                        <option value="Neuf" {{ old('condition', $car->condition) == 'Neuf' ? 'selected' : '' }}>Neuf</option>
                        <option value="Occasion" {{ old('condition', $car->condition) == 'Occasion' ? 'selected' : '' }}>Occasion</option>
                        <option value="Importée neuve" {{ old('condition', $car->condition) == 'Importée neuve' ? 'selected' : '' }}>Importée neuve</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="transmission">Transmission</label>
                    <select id="transmission" name="transmission" required>
                        <option value="Automatique" {{ old('transmission', $car->transmission) == 'Automatique' ? 'selected' : '' }}>Automatique</option>
                        <option value="Manuelle" {{ old('transmission', $car->transmission) == 'Manuelle' ? 'selected' : '' }}>Manuelle</option>
                        <option value="Semi-automatique" {{ old('transmission', $car->transmission) == 'Semi-automatique' ? 'selected' : '' }}>Semi-automatique</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-section">
            <h3>Description</h3>
            <div class="form-group">
                <textarea id="description" name="description" rows="5" required>{{ old('description', $car->description) }}</textarea>
            </div>
        </div>

        <div class="form-section">
            <h3>Images</h3>
            <div class="form-group">
                <label for="images">Nouvelles images (optionnel)</label>
                <input type="file" id="images" name="images[]" multiple accept="image/*">
                <small>Les anciennes images seront remplacées si vous en téléchargez de nouvelles</small>
            </div>
        </div>

        <div class="form-actions">
            <a href="{{ route('dashboard') }}" class="btn-cancel">Annuler</a>
            <button type="submit" class="btn-save">Enregistrer</button>
        </div>
    </form>
</div>
@endsection 