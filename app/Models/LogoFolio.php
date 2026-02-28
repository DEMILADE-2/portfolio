<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogoFolio extends Model
{
    protected $fillable = [
        'name',
        'client',
        'description',
        'image',
        'sort_order',
        'is_featured',
        'is_active',
    ];
}
