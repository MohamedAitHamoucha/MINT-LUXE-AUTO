<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CarController extends Controller
{
    public function show($carSlug)
    {
        $car = Car::where('slug', $carSlug)->firstOrFail();
        return view('cardetails', compact('car'));
    }

    public function index(Request $request)
    {
        $query = Car::query();

        // Brand filtering
        if ($request->filled('brand')) {
            $query->where('brand', $request->brand);
        }

        // Year filtering
        if ($request->filled('min_year')) {
            $query->where('year', '>=', $request->min_year);
        }
        if ($request->filled('max_year')) {
            $query->where('year', '<=', $request->max_year);
        }

        // Mileage filtering
        if ($request->filled('min_mileage')) {
            $query->where('mileage', '>=', $request->min_mileage);
        }
        if ($request->filled('max_mileage')) {
            $query->where('mileage', '<=', $request->max_mileage);
        }

        // Price filtering
        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }
        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }

        // Condition filtering
        if ($request->filled('condition')) {
            $query->where('condition', $request->condition);
        }

        $cars = $query->latest()->get();
        return view('cars', compact('cars'));
    }

    // Helper function to generate slugs when saving cars
    private function generateSlug($carName)
    {
        return Str::slug($carName);
    }
} 