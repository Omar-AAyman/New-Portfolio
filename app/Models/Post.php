<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title_en',
        'title_ar',
        'slug',
        'image',
        'content_en',
        'content_ar',
        'author',
        'author_image',
        'published_at',
        'tags_en',
        'tags_ar'
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'tags_en' => 'array',
        'tags_ar' => 'array',
    ];
}
