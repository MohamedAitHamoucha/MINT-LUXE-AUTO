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

        // Search functionality
        $search = $request->input('search');
        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('brand', 'LIKE', "%{$search}%")
                  ->orWhere('model', 'LIKE', "%{$search}%")
                  ->orWhere('year', 'LIKE', "%{$search}%")
                  ->orWhere('price', 'LIKE', "%{$search}%");
            });
        }

        // Brand filter
        if ($request->has('brand') && $request->brand !== '') {
            $query->where('brand', $request->brand);
        }

        // Condition filter
        if ($request->has('condition') && $request->condition !== '') {
            $query->where('condition', $request->condition);
        }

        // Year range filter
        if ($request->has('min_year') && $request->min_year !== '') {
            $query->where('year', '>=', $request->min_year);
        }
        if ($request->has('max_year') && $request->max_year !== '') {
            $query->where('year', '<=', $request->max_year);
        }

        // Mileage range filter
        if ($request->has('min_mileage') && $request->min_mileage !== '') {
            $query->where('mileage', '>=', $request->min_mileage);
        }
        if ($request->has('max_mileage') && $request->max_mileage !== '') {
            $query->where('mileage', '<=', $request->max_mileage);
        }

        // Price range filter
        if ($request->has('min_price') && $request->min_price !== '') {
            $query->where('price', '>=', $request->min_price);
        }
        if ($request->has('max_price') && $request->max_price !== '') {
            $query->where('price', '<=', $request->max_price);
        }

        // Get the filtered results
        $cars = $query->get();

        return view('Cars', compact('cars'));
    }

    // Helper function to generate slugs when saving cars
    private function generateSlug($carName)
    {
        return Str::slug($carName);
    }
} 