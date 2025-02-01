@extends('dashboard.layout')

@section('title', 'Ajouter une voiture')

@section('content')
<div class="car-form">
    <form action="{{ route('dashboard.cars.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-section">
            <h3>Informations générales</h3>
            
            <div class="form-group">
                <label>Marque</label>
                <select name="brand" required>
                    <option value="">Sélectionner une marque</option>
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

            <div class="form-group">
                <label>Modèle</label>
                <input type="text" name="model" required>
            </div>

            <div class="form-group">
                <label>Prix (MAD)</label>
                <input type="number" name="price" required>
            </div>

            <div class="form-group">
                <label>Année</label>
                <input type="number" name="year" required>
            </div>
        </div>

        <div class="form-section">
            <h3>Caractéristiques</h3>
            
            <div class="form-grid">
                <div class="form-group">
                    <label>Type</label>
                    <input type="text" name="type" required placeholder="ex: SUV, Berline, Coupé...">
                </div>

                <div class="form-group">
                    <label>Secteur</label>
                    <input type="text" name="sector" required>
                </div>

                <div class="form-group">
                    <label>Kilométrage</label>
                    <input type="text" name="mileage" required>
                </div>

                <div class="form-group">
                    <label>Nombre de portes</label>
                    <input type="number" name="doors" required>
                </div>

                <div class="form-group">
                    <label>Origine</label>
                    <input type="text" name="origin" required>
                </div>

                <div class="form-group">
                    <label>Première main</label>
                    <select name="first_hand" required>
                        <option value="1">Oui</option>
                        <option value="0">Non</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Puissance fiscale</label>
                    <input type="text" name="fiscal_power" required>
                </div>

                <div class="form-group">
                    <label>État</label>
                    <select name="condition" required>
                        <option value="Neuf">Neuf</option>
                        <option value="Occasion">Occasion</option>
                        <option value="Importée neuve">Importée neuve</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Transmission</label>
                    <select name="transmission" required>
                        <option value="Automatique">Automatique</option>
                        <option value="Manuelle">Manuelle</option>
                        <option value="Semi-automatique">Semi-automatique</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Carburant</label>
                    <select name="fuel_type" required>
                        <option value="Essence">Essence</option>
                        <option value="Diesel">Diesel</option>
                        <option value="Électrique">Électrique</option>
                        <option value="Hybride">Hybride</option>
                        <option value="Hybride Rechargeable">Hybride Rechargeable</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-section">
            <h3>Description</h3>
            <div class="form-group">
                <textarea name="description" rows="5" required></textarea>
            </div>
        </div>

        <div class="form-section">
            <h3>Images</h3>
            <div class="form-group">
                <div class="image-upload">
                    <input type="file" name="images[]" multiple accept="image/*" required id="car-images">
                    <label for="car-images" class="upload-label">
                        <span class="icon">📷</span>
                        Sélectionner des images
                    </label>
                    <small>Vous pouvez sélectionner plusieurs images</small>
                </div>
                <div id="image-preview" class="image-preview"></div>
            </div>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-save">Enregistrer</button>
            <a href="{{ route('dashboard') }}" class="btn-cancel">Annuler</a>
        </div>
    </form>
</div>

<script>
document.getElementById('car-images').addEventListener('change', function(e) {
    const preview = document.getElementById('image-preview');
    preview.innerHTML = '';
    
    for (const file of this.files) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const div = document.createElement('div');
            div.className = 'preview-item';
            div.innerHTML = `<img src="${e.target.result}" alt="preview">`;
            preview.appendChild(div);
        }
        reader.readAsDataURL(file);
    }
});

// Get all numeric inputs
const numericInputs = document.querySelectorAll('input[type="number"], input[name="price"], input[name="mileage"], input[name="doors"], input[name="fiscal_power"], input[name="year"]');

numericInputs.forEach(input => {
    // Prevent non-numeric input
    input.addEventListener('keypress', function(e) {
        if (!/[0-9]/.test(e.key) && e.key !== 'Backspace' && e.key !== 'Delete' && e.key !== 'ArrowLeft' && e.key !== 'ArrowRight') {
            e.preventDefault();
        }
    });

    // Clear non-numeric characters on paste
    input.addEventListener('paste', function(e) {
        e.preventDefault();
        const pastedText = (e.clipboardData || window.clipboardData).getData('text');
        const numericValue = pastedText.replace(/[^0-9]/g, '');
        this.value = numericValue;
    });

    // Prevent negative values
    input.addEventListener('input', function(e) {
        if (this.value < 0) {
            this.value = 0;
        }
        // Remove any non-numeric characters
        this.value = this.value.replace(/[^0-9]/g, '');
    });

    // Set minimum value to 0
    input.setAttribute('min', '0');
});
</script>
@endsection 