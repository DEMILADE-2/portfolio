<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'brand_name',
        'appointment_date',
        'appointment_time',
        'meeting_type',
        'services',
        'project_description',
        'project_deadline',
        'budget',
        'referral',
        'additional_notes',
        'status',
    ];

    protected $casts = [
        'services' => 'array',
        'appointment_date' => 'date',
    ];
}