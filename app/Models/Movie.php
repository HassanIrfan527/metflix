<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'director',
        'release_date',
        'duration',
        'poster',
        'trailer',
        'genre',
        'year',
        'rated',
        'imdbID',
        'imdbRating',
        'type',
        'writer',
        'actors',
    ];

    public function genres()
    {
        return $this->belongsToMany(Genre::class);

    }
}
