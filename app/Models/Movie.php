<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['original_title', 'description', 'year', 'country', 'cast', 'production', 'director', 'genres'];

    public function production(){
        return $this->belongsTo(Production::class);
    }

    public function actors(){
        return $this->belongsToMany(Actor::class);
    }
}
