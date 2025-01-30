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
                    <input type="text" id="brand" name="brand" value="{{ old('brand', $car->brand) }}" required>
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