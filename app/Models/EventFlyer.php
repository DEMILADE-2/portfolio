<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventFlyer extends Model
{
    protected $fillable = [
        'title',
        'event_date',
        'location',
        'description',
        'image',
        'sort_order',
        'is_featured',
        'is_active',
    ];
}
