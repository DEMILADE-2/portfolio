<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrandDesign extends Model
{
    protected $fillable = [
        'brand_name',
        'category',
        'description',
        'image',
        'sort_order',
        'is_featured',
        'is_active',
    ];
}
