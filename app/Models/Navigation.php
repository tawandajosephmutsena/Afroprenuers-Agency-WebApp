<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Z3d0X\FilamentFabricator\Models\Page;

class Navigation extends Model
{
    protected $fillable = ['name', 'slug', 'items'];

    protected $casts = [
        'items' => 'array'
    ];

    public function pages()
    {
        return $this->belongsToMany(Page::class);
    }
}