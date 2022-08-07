<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image', 'description', 'rating_star'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function ReviewData()
    {
        return $this->hasMany('App\Models\ReviewRating', 'food_id');
    }
}
