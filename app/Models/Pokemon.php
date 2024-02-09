<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;
    protected $table='pokemons';
    protected $fillable = [
        'name',
        'species',
        'height',
        'weight',
        'abilities',
        'img_url',
        'hp',
        'attack',
        'defense',
        'speed_attack',
        'speed_defence',
        'speed'
    ];
}
