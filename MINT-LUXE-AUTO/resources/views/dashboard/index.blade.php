@extends('dashboard.layout')

@section('title', 'Tableau de bord')

@section('actions')
<a href="{{ route('dashboard.cars.create') }}" class="btn-add">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <line x1="12" y1="5" x2="12" y2="19"></line>
        <line x1="5" y1="12" x2="19" y2="12"></line>
    </svg>
    Ajouter une voiture
</a>
@endsection

@section('content')
<div class="dashboard-grid">
    <!-- Total Cars Card -->
    <div class="dashboard-card stats-card">
        <div class="stats-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M16 3h5v5M21 3l-7 7M21 14v3a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4V7a4 4 0 0 1 4-4h3"></path>
            </svg>
        </div>
        <div class="stats-info">
            <h3>Total des voitures</h3>
            <p>{{ $totalCars }}</p>
        </div>
    </div>

    <!-- Recent Cars Card -->
    <div class="dashboard-card stats-card">
        <div class="stats-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10"></circle>
                <polyline points="12 6 12 12 16 14"></polyline>
            </svg>
        </div>
        <div class="stats-info">
            <h3>Ajoutées ce mois</h3>
            <p>{{ $recentCars }}</p>
        </div>
    </div>
</div>

<!-- Recent Activity -->
<div class="dashboard-card">
    <h2>Dernières voitures ajoutées</h2>
    <div class="recent-cars">
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Voiture</th>
                        <th>Prix</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($latestCars as $car)
                    <tr>
                        <td data-label="Voiture">
                            <div class="car-info-cell">
                                <img src="{{ asset('storage/' . $car->images[0]) }}" alt="{{ $car->brand }}">
                                <div>
                                    <strong>{{ $car->brand }} {{ $car->model }}</strong>
                                    <span>{{ $car->year }}</span>
                                </div>
                            </div>
                        </td>
                        <td data-label="Prix">{{ number_format($car->price, 0, ',', ' ') }} MAD</td>
                        <td data-label="Date">{{ $car->created_at->format('d/m/y') }}</td>
                        <td class="actions">
                            <a href="{{ route('dashboard.cars.edit', $car) }}" class="btn-edit">Modifier</a>
                            <form action="{{ route('dashboard.cars.destroy', $car) }}" method="POST" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette voiture ?')">
                                    Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection 