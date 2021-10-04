<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demon extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = [
        'aggression',
        'general_priority',
        'hit_points',
        'damage',
        'aerial_threat',
        'ranged_threat',
        'melee_threat',
        'weak_points',
        'speed',
        'area_denial',
    ];
}
