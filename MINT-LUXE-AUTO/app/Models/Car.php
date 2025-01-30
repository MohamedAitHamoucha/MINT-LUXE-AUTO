<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'brand',
        'model',
        'price',
        'year',
        'type',
        'sector',
        'mileage',
        'doors',
        'origin',
        'first_hand',
        'fiscal_power',
        'condition',
        'description',
        'slug',
        'images',
        'transmission',
        'fuel_type',
    ];

    protected $casts = [
        'images' => 'array',
        'first_hand' => 'boolean',
        'price' => 'float',
        'year' => 'integer',
        'doors' => 'integer',
    ];

    public function getRouteKeyName()
    {
        return 'id'; // or 'slug' if you're using slugs
    }
} 