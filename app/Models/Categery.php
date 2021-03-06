<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Forum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categery extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function forums()
    {
        return $this->hasMany(Forum::class);
    }
}
