<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // The table associated with the model.
    protected $table = 'posts';

    // The attributes that are mass assignable.
    protected $fillable = [
        'title',
        'content',
        'cover_image',
        'published_at',
        'user_id', // Add this line if user_id is part of your model
    ];

    // Cast published_at to a Carbon instance
    protected $casts = [
            'published_at' => 'datetime',
    ];

    // If your model has a timestamp management and you don't want to use created_at and updated_at fields, you can set $timestamps to false
    public $timestamps = true;
}
