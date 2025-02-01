@extends('layouts.app')

@section('title', $car->brand . ' ' . $car->model)

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/car-details.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cardetails.css') }}">
@endsection

@section('content')
    <div class="cardetails">
        <div class="cont">
            <div class="car-left">
                <div class="main-image">
                    <img src="{{ asset('storage/' . $car->images[0]) }}" alt="{{ $car->brand }} {{ $car->model }}" id="mainImage">
                </div>
                <div class="thumbnails">
                    @foreach($car->images as $image)
                        <img src="{{ asset('storage/' . $image) }}" alt="Car thumbnail" onclick="changeMainImage('{{ asset('storage/' . $image) }}')">
                    @endforeach
                </div>
            </div>

            <div class="car-right">
                <h1>{{ $car->brand }} {{ $car->model }}</h1>
                <p class="price">{{ number_format($car->price, 0, ',', ' ') }} MAD</p>

                <div class="info-items">
                    <div class="info-item">
                        <span>Année</span>
                        <p>{{ $car->year }}</p>
                    </div>
                    <div class="info-item">
                        <span>Kilométrage</span>
                        <p>{{ $car->mileage }}</p>
                    </div>
                    <div class="info-item">
                        <span>Transmission</span>
                        <p>{{ $car->transmission }}</p>
                    </div>
                </div>

                <h2>Description</h2>
                <p class="description">{{ $car->description }}</p>

                <h2>Caractéristiques</h2>
                <div class="specs-grid">
                    <div class="spec-item">
                        <span>Secteur</span>
                        <p>{{ $car->sector }}</p>
                    </div>
                    <div class="spec-item">
                        <span>Nombre de portes</span>
                        <p>{{ $car->doors }}</p>
                    </div>
                    <div class="spec-item">
                        <span>Origine</span>
                        <p>{{ $car->origin }}</p>
                    </div>
                    <div class="spec-item">
                        <span>Première main</span>
                        <p>{{ $car->first_hand ? 'Oui' : 'Non' }}</p>
                    </div>
                    <div class="spec-item">
                        <span>Puissance fiscale</span>
                        <p>{{ $car->fiscal_power }} CV</p>
                    </div>
                    <div class="spec-item">
                        <span>État</span>
                        <p>{{ $car->condition }}</p>
                    </div>
                    <div class="spec-item">
                        <span>Type</span>
                        <p>{{ $car->type }}</p>
                    </div>
                    <div class="spec-item">
                        <span>Carburant</span>
                        <p>{{ $car->fuel_type }}</p>
                    </div>
                </div>

                <input type="submit" value="Contacter via WhatsApp" onclick="window.location.href='https://wa.me/212644449650?text=Bonjour%2C%20je%20suis%20int%C3%A9ress%C3%A9%20par%20{{ urlencode($car->brand . ' ' . $car->model) }}%20%C3%A0%20{{ number_format($car->price, 0, ',', ' ') }}%20MAD%0A{{ urlencode(route('car.show', $car->slug)) }}'">
            </div>
        </div>
    </div>

    <div class="lightbox">
        <button class="lightbox-close">&times;</button>
        <button class="lightbox-prev">&lt;</button>
        <img src="" alt="Lightbox image">
        <button class="lightbox-next">&gt;</button>
    </div>
@endsection

@section('scripts')
<script>
function changeMainImage(src) {
    document.getElementById('mainImage').src = src;
}

const lightbox = document.querySelector('.lightbox');
const lightboxImg = lightbox.querySelector('img');
const closeBtn = lightbox.querySelector('.lightbox-close');
const prevBtn = lightbox.querySelector('.lightbox-prev');
const nextBtn = lightbox.querySelector('.lightbox-next');
const images = @json(array_map(function($img) { 
    return asset('storage/' . $img); 
}, $car->images));
let currentImageIndex = 0;

document.querySelector('.main-image img').addEventListener('click', openLightbox);
document.querySelectorAll('.thumbnails img').forEach(img => {
    img.addEventListener('click', function(e) {
        changeMainImage(this.src);
        openLightbox(e);
    });
});

function openLightbox(e) {
    const clickedSrc = e.target.src;
    currentImageIndex = images.indexOf(clickedSrc);
    updateLightboxImage();
    lightbox.classList.add('active');
}

function updateLightboxImage() {
    lightboxImg.src = images[currentImageIndex];
}

closeBtn.addEventListener('click', () => {
    lightbox.classList.remove('active');
});

prevBtn.addEventListener('click', () => {
    currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
    updateLightboxImage();
});

nextBtn.addEventListener('click', () => {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    updateLightboxImage();
});

lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox) {
        lightbox.classList.remove('active');
    }
});

document.addEventListener('keydown', (e) => {
    if (!lightbox.classList.contains('active')) return;
    
    if (e.key === 'Escape') lightbox.classList.remove('active');
    if (e.key === 'ArrowLeft') prevBtn.click();
    if (e.key === 'ArrowRight') nextBtn.click();
});

document.addEventListener('DOMContentLoaded', function() {
    const mainImage = document.querySelector('.main-image img');
    const thumbnails = document.querySelectorAll('.thumbnails img');
    let currentIndex = 0;
    const imagesList = Array.from(thumbnails).map(thumb => thumb.src);

    // Previous and Next buttons for normal view
    const prevButton = document.createElement('button');
    prevButton.className = 'nav-btn prev-btn';
    prevButton.innerHTML = '❮';
    
    const nextButton = document.createElement('button');
    nextButton.className = 'nav-btn next-btn';
    nextButton.innerHTML = '❯';

    // Add buttons to the main image container
    const mainImageContainer = document.querySelector('.main-image');
    mainImageContainer.appendChild(prevButton);
    mainImageContainer.appendChild(nextButton);

    // Navigation functions
    function showImage(index) {
        if (index < 0) index = imagesList.length - 1;
        if (index >= imagesList.length) index = 0;
        currentIndex = index;
        mainImage.src = imagesList[currentIndex];
        
        // Update thumbnail selection
        thumbnails.forEach((thumb, i) => {
            thumb.classList.toggle('selected', i === currentIndex);
        });
    }

    // Event listeners for buttons
    prevButton.addEventListener('click', (e) => {
        e.preventDefault();
        showImage(currentIndex - 1);
    });

    nextButton.addEventListener('click', (e) => {
        e.preventDefault();
        showImage(currentIndex + 1);
    });

    // Keyboard navigation (only when lightbox is not active)
    document.addEventListener('keydown', (e) => {
        if (!document.querySelector('.lightbox.active')) {
            if (e.key === 'ArrowLeft') showImage(currentIndex - 1);
            if (e.key === 'ArrowRight') showImage(currentIndex + 1);
        }
    });
});
</script>
@endsection 