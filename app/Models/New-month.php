<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewMonth extends Model
{
    protected $fillable = [
        'name',
        'title',
        'content',
        'image',
        'is_active',
    ];
}
