<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FooterSettings extends Model
{
    protected $guarded = [];
    
    protected $casts = [
        'resource_links' => 'array',
        'legal_links' => 'array',
        'social_links' => 'array',
    ];
}
