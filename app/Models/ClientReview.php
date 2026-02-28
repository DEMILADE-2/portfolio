<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientReview extends Model
{
    protected $fillable = [
        'client_name',
        'client_title',
        'review',
        'client_image',
        'rating',
        'is_featured',
        'is_active',
    ];
}
