<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mapdata extends Model
{
    use HasFactory;

    protected $table = 'map-data';

    protected $fillable = [
        'poligon',
        'latitude',
        'longitude',
    ];
}
