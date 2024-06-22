<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;

    use SoftDeletes;

    public $fillable = [
        'title',
        'content'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->active = true;
            $post->slug = str_replace(' ', '-', $post->title);
        });
    }

    // public function active()
    // {
    //     return $this->where('active', true);
    // }

    public  function comments()
    {

        return $this->hasMany(Comment::class);
    }
}
