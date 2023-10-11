<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $guarded = 'blog';

    protected $fillable = [
        'authorBlog', 'releaseDateBlog', 'titleBlog', 'postBlog','photoBlog',
    ];

    protected $hidden = [
        'remember_token', 'created_at', 'updated_at'
    ];
}
