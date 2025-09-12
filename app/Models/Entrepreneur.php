<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrepreneur extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'business_name',
        'business_description',
        'business_preview',
        'industry',
        'location',
        'business_address',
        'business_phone',
        'business_email',
        'business_hours',
        'website',
        'social_media',
        'profile_image',
        'business_logo',
        'bio',
        'overview',
        'role',
        'founded_year',
        'business_size',
        'skills',
        'achievements',
        'milestones',
        'partners',
        'five_year_plan',
        'value_proposition',
        'latitude',
        'longitude',
        'status',
        'featured',
        'joined_date',
    ];

    protected $casts = [
        'social_media' => 'array',
        'skills' => 'array',
        'achievements' => 'array',
        'milestones' => 'array',
        'partners' => 'array',
        'featured' => 'boolean',
        'joined_date' => 'date',
        'founded_year' => 'integer',
        'latitude' => 'decimal:8',
        'longitude' => 'decimal:8',
    ];
}