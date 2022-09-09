<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'price', 'image', 'description',];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function ReviewDatas()
    {
        return $this->hasMany('App\Models\ReviewRating', 'food_id');
    }
}
