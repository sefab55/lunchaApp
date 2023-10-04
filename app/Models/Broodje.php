<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Broodje extends Model
{
    use HasFactory;

    protected $table = 'broodjes'; // De tabelnaam in de database

    protected $fillable = [
        'naam',
        'afbeelding',
        'prijs',
    ];
}