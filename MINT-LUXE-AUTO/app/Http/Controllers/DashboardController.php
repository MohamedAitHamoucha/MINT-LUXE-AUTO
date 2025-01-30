<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        $totalCars = Car::count();
        $recentCars = Car::whereMonth('created_at', now()->month)->count();
        $latestCars = Car::latest()->take(5)->get();

        return view('dashboard.index', compact('totalCars', 'recentCars', 'latestCars'));
    }

    public function cars()
    {
        $cars = Car::latest()->paginate(10);
        return view('dashboard.cars.index', compact('cars'));
    }

    public function createCar()
    {
        return view('dashboard.cars.create');
    }

    public function storeCar(Request $request)
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'price' => 'required|numeric',
            'year' => 'required|numeric',
            'type' => 'required',
            'sector' => 'required',
            'mileage' => 'required',
            'doors' => 'required|numeric',
            'origin' => 'required',
            'first_hand' => 'required|boolean',
            'fiscal_power' => 'required',
            'condition' => 'required',
            'description' => 'required',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Generate base slug
        $baseSlug = Str::slug($request->brand . ' ' . $request->model);
        
        // Check if slug exists and append number if needed
        $slug = $baseSlug;
        $counter = 1;
        
        while (Car::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }

        $images = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('cars', 'public');
                $images[] = $path;
            }
        }

        Car::create([
            'brand' => $request->brand,
            'model' => $request->model,
            'price' => $request->price,
            'year' => $request->year,
            'type' => $request->type,
            'sector' => $request->sector,
            'mileage' => $request->mileage,
            'doors' => $request->doors,
            'origin' => $request->origin,
            'first_hand' => $request->first_hand,
            'fiscal_power' => $request->fiscal_power,
            'condition' => $request->condition,
            'description' => $request->description,
            'slug' => $slug, // Use the unique slug
            'images' => $images
        ]);

        return redirect()->route('dashboard')->with('success', 'Voiture ajoutée avec succès');
    }

    public function editCar(Car $car)
    {
        return view('dashboard.cars.edit', compact('car'));
    }

    public function updateCar(Request $request, Car $car)
    {
        $validated = $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'price' => 'required|numeric',
            'year' => 'required|numeric',
            'type' => 'required',
            'sector' => 'required',
            'mileage' => 'required',
            'doors' => 'required|numeric',
            'origin' => 'required',
            'first_hand' => 'required|boolean',
            'fiscal_power' => 'required',
            'condition' => 'required',
            'description' => 'required',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $car->update($validated);

        if ($request->hasFile('images')) {
            // Delete old images
            foreach ($car->images as $oldImage) {
                Storage::disk('public')->delete($oldImage);
            }

            // Store new images
            $images = [];
            foreach ($request->file('images') as $image) {
                $path = $image->store('cars', 'public');
                $images[] = $path;
            }
            $car->images = $images;
            $car->save();
        }

        return redirect()->route('dashboard')
            ->with('success', 'Voiture mise à jour avec succès');
    }

    public function destroyCar(Car $car)
    {
        // Delete images from storage
        foreach ($car->images as $image) {
            Storage::disk('public')->delete($image);
        }
        
        // Delete the car
        $car->delete();
        
        return redirect()->route('dashboard')
            ->with('success', 'Voiture supprimée avec succès');
    }
} 