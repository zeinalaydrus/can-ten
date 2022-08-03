<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image', 'description', 'rating_star'];

    public function comments()
    {
        return $this->hasMany(comment::class);
    }
}
