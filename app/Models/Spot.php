<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function goods()
    {
        return $this->hasMany(Good::class);
    }

    public function favorite_spots()
    {
        return $this->hasMany(FavoriteSpot::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
    
}
