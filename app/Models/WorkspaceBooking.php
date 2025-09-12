<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkspaceBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_reference',
        'customer_name',
        'customer_email',
        'customer_phone',
        'company_name',
        'workspace_type',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'number_of_people',
        'total_amount',
        'status',
        'payment_status',
        'special_requirements',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'start_time' => 'datetime:H:i',
        'end_time' => 'datetime:H:i',
        'total_amount' => 'decimal:2',
    ];

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($booking) {
            if (!$booking->booking_reference) {
                $booking->booking_reference = 'WS-' . strtoupper(uniqid());
            }
        });
    }
}