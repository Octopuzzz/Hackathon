<?php

namespace App\Models;

use App\Models\Like;
use App\Models\Categery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Forum extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function category()
    {
        return $this->belongsTo(Categery::class);
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
