<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'section_label',
        'title',
        'highlight',
        'description',
        'image',
        'years_experience',
        'projects_completed',
        'happy_clients',
        'is_active',
    ];

    protected $casts = [
        'years_experience' => 'integer',
        'projects_completed' => 'integer',
        'happy_clients' => 'integer',
        'is_active' => 'boolean',
    ];
}
