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
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('brand', 'like', "%{$search}%")
                  ->orWhere('model', 'like', "%{$search}%")
                  ->orWhere('year', 'like', "%{$search}%")
                  ->orWhere('type', 'like', "%{$search}%");
            });
        }

        // Brand filtering
        if ($request->has('brand')) {
            $query->where('brand', 'like', "%{$request->brand}%");
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