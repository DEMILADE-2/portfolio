<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OtherDesign extends Model
{
    protected $fillable = [
        'title',
        'category',
        'description',
        'image',
        'sort_order',
        'is_featured',
        'is_active',
    ];
}
