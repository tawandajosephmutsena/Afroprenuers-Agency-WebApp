<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Awcodes\Curator\Models\Media;

class FooterSettings extends Model
{
    protected $guarded = [];
    
    protected $casts = [
        'resource_links' => 'array',
        'legal_links' => 'array',
        'social_links' => 'array',
    ];

    public function logo()
    {
        return $this->belongsTo(Media::class, 'logo');
    }
}
