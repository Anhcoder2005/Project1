<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Kyslik\ColumnSortable\Sortable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    use HasApiTokens, HasFactory, Notifiable, Sortable;

	public $sortable = ['id', 'titleBlog', 'postBlog', 'photoBlog', ];

    protected $table = 'blogs';

    protected $guarded = 'blog';

    protected $fillable = [
        'authorBlog', 'releaseDateBlog', 'titleBlog', 'postBlog', 'htmlBlog', 'photoBlog',
    ];

    protected $hidden = [
        'remember_token', 'created_at', 'updated_at'
    ];
}
