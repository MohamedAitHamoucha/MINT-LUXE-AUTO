@extends('dashboard.layout')

@section('title', 'Gestion des voitures')

@section('actions')
<a href="{{ route('dashboard.cars.create') }}" class="btn-add">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-6 h-6">
        <line x1="12" y1="5" x2="12" y2="19"></line>
        <line x1="5" y1="12" x2="19" y2="12"></line>
    </svg>
    Ajouter une voiture
</a>
@endsection

@section('content')
<div class="cars-management">
    <div class="cars-list">
        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Marque & Modèle</th>
                    <th>Année</th>
                    <th>Prix</th>
                    <th>Kilométrage</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cars as $car)
                <tr>
                    <td>
                        <img src="{{ asset('storage/' . $car->images[0]) }}" alt="{{ $car->brand }}" class="car-thumbnail">
                    </td>
                    <td>
                        <strong>{{ $car->brand }}</strong><br>
                        {{ $car->model }}
                    </td>
                    <td>{{ $car->year }}</td>
                    <td>{{ number_format($car->price, 0, ',', ' ') }} MAD</td>
                    <td>{{ number_format($car->mileage, 0, ',', ' ') }} km</td>
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

        <div class="pagination">
            {{ $cars->links() }}
        </div>
    </div>
</div>
@endsection 