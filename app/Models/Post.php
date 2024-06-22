<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;

    use SoftDeletes;

    // public function active()
    // {
    //     return $this->where('active', true);
    // }

    public  function comments()
    {

        return $this->hasMany(Comment::class, 'post_id', 'id');
    }
}
