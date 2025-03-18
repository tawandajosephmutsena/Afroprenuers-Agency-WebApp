<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'tags',
        'task_id',
        'user_id',
    ];

    protected static function booted()
    {
        static::creating(function ($note) {
            if (!$note->user_id) {
                $note->user_id = Auth::id();
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}