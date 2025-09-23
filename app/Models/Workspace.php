<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Workspace extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'price_per_day',
        'price_per_week',
        'price_per_month',
        'capacity',
        'amenities',
        'is_available'
    ];

    protected $casts = [
        'amenities' => 'array',
        'is_available' => 'boolean',
        'price_per_day' => 'float',
        'price_per_week' => 'float',
        'price_per_month' => 'float',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
